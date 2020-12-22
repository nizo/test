$(function ()
{
	var sessioname=null, rootnumberhash=null, identity=null, cb_text=null, cb_url=null, webview_sharing_link=null;

	function webview_sharing_init ()
	{
		var settings = { widget_key:'d9a22485fef9410eb5e07ed4966d32b7' };

		Surfly.init(settings, function(init)
		{
			if (init.success)
			{
				if (Surfly.isInsideSession)
				{	webview_sharing_link = Surfly.currentSession.followerLink;
					console.debug ('Webview sharing link: '+webview_sharing_link);
				}
				else console.info ('Webview sharing init successful.');
			}
			else console.error ('Webview sharing was unable to initialize properly: '+init.errorMsg);
		});
	}

	window.callbrowsing_webview_sharing_start = function ()
	{
		var settings = { show_loading_screen: false };

		if (window.webview_sharing_state)
			return true;

		Surfly.session(settings).startLeader();
	}

	function callbrowsing_session_update ()
	{
		var text=null, url=null;

		if (window.cb_text != null)
			text = window.cb_text ();
		if (window.cb_url != null)
			url = window.cb_url ();

		$.ajax
		({
			url: '/demos/callbrowsing/ajax.php',
			cache: false,
			type: 'POST',
			data:
			{
				rootnumberhash: window.rootnumberhash,
				identity: window.identity,
				session: sessionStorage.getItem (window.sessionname),
				text: text,
				url: url
			},
			dataType: 'json',
			success: function (data)
			{
				sessionStorage.setItem (window.sessionname, data['session']);

				if ((data['callstatus'] == 2) && (Surfly.isInsideSession))
					data['callstatus'] = 3;

				if (window.cb_status != null)
					window.cb_status (data['rootnumber'], data['ddi'], data['callstatus'], data['caller']);
			}
		});

		setTimeout (callbrowsing_session_update, 1000);
	}

	window.callbrowsing_session_init = function (rootnumberhash, identity, cb_text, cb_url, cb_status)
	{
		window.rootnumberhash = rootnumberhash;
		window.identity = identity;
		window.cb_text = cb_text;
		window.cb_url = cb_url;
		window.cb_status = cb_status;
		window.sessionname = 'demo_callbrowsing_'+window.identity;

		webview_sharing_init ();
		callbrowsing_session_update ();
	}
});