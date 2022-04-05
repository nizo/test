document.addEventListener("DOMContentLoaded", function()
{
	var sessioname=null, rootnumberhash=null, identity=null, cb_text=null, cb_url=null, webview_join_url=null;

	var settings =
	{
		// Surfly session options can be set here, or at the Company/Plan levels.
		widget_key: 'd9a22485fef9410eb5e07ed4966d32b7',
		private_session: true, // to make sure only logged in agents can join the call
		require_password: false,
		language: 'de',
		block_until_agent_joins: false,
		show_loading_screen: false
	};

	function webview_sharing_init ()
	{
		Surfly.init(settings, function(init)
		{	if (!init.success)
				console.error ('Webview sharing was unable to initialize properly: '+init.errorMsg);
		});
	}

	window.callbrowsing_webview_sharing_start = function ()
	{
		if (window.webview_sharing_state)
			return true;

		Surfly.session(settings)
		.on("session_started", function (session, event)
		{	webview_join_url = session.followerLink;
		})
		.startLeader();
	}

	function callbrowsing_session_update ()
	{
		var text=null, url=null;

		if (window.cb_text != null)
			text = window.cb_text ();
		if (window.cb_url != null)
			url = window.cb_url ();

		let postUrl = '/demos/callbrowsing/ajax.php';

		let postData = new FormData();
		postData.set('rootnumberhash', window.rootnumberhash);
		postData.set('identity', window.identity);
		postData.set('session', sessionStorage.getItem (window.sessionname) !== null ? sessionStorage.getItem (window.sessionname) : '');
		postData.set('text', text);
		postData.set('url', url);
		postData.set('webview_join_url', webview_join_url);

		fetch(postUrl, {
			method: 'POST',
			cache: 'no-cache',
			body: postData
		})
		.then(response => {
			return response.json();
		})
		.then(data => {
			setTimeout (callbrowsing_session_update, 1000);

			if (data['error'])
				return;

			sessionStorage.setItem (window.sessionname, data['session']);

			if ((data['callstatus'] == 2) && (Surfly.isInsideSession))
				data['callstatus'] = 3;

			if (window.cb_status != null)
				window.cb_status (data['rootnumber'], data['ddi'], data['callstatus'], data['caller']);	
		})
		.catch(error => {
			setTimeout (callbrowsing_session_update, 1000);
			console.error (JSON.stringify (error));
		});
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