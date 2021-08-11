$(function ()
{
	/* https://stackoverflow.com/questions/4545311/download-a-file-by-jquery-ajax */
	function base64ToBlob (base64, mimetype, slicesize)
	{
		if (!window.atob || !window.Uint8Array)
		{	// The current browser doesn't have the atob function. Cannot continue
			return null;
		}

		mimetype = mimetype || '';
		slicesize = slicesize || 512;

		var bytechars = atob (base64);
		var bytearrays = [];

		for (var offset = 0; offset < bytechars.length; offset += slicesize)
		{
			var slice = bytechars.slice (offset, offset + slicesize);
			var bytenums = new Array (slice.length);
			for (var i = 0; i < slice.length; i++)
				bytenums[i] = slice.charCodeAt(i);
			var bytearray = new Uint8Array(bytenums);
			bytearrays[bytearrays.length] = bytearray;
		}
		return new Blob (bytearrays, {type: mimetype});
	}


	// get current MicroSIP version
	$.ajax
	({
		url: 'https://connect.callone.io/backend/microsip/ajax.php',
		cache: false,
		type: 'GET',
		data:
		{	mode: 'version'
		},
		dataType: 'json',
		error: function (error)
		{	console.error (JSON.stringify (error));
		},
		success: function (jsonData)
		{	$('#formMicroSipHint').html ('MicroSIP v'+jsonData['version']);
		}
	});


	// download prepared package
	$('#formMicroSipSubmit').on('click',function(e)
	{
		e.preventDefault();

		if ((!$('#formMicroSipUsername').val().trim().length) ||
			(!$('#formMicroSipPassword').val().trim().length))
		{	$('#formMicroSipHint').html ('Bitte prüfen Sie ihre Anmeldedaten.<br/>Sind diese korrekt, kontaktieren Sie bitte den CallOne Support.');
			return;
		}

		$('#formMicroSipSubmit').hide ();
		$('#formMicroSipHint').html ('Bitte warten, Download wird generiert...');

		$.ajax
		({
			url: 'https://connect.callone.io/backend/microsip/ajax.php',
			cache: false,
			type: 'POST',
			data:
			{
				mode: 'download',
				username: $('#formMicroSipUsername').val().trim(),
				password: $('#formMicroSipPassword').val().trim()
			},
			dataType: 'json',
			error: function (error)
			{
				console.error (JSON.stringify (error));
				$('#formMicroSipHint').html ('Bitte prüfen Sie ihre Anmeldedaten.<br/>Sind diese korrekt, kontaktieren Sie bitte den CallOne Support.');
				$('#formMicroSipSubmit').show ();
			},
			success: function (jsonData)
			{
				if (jsonData['filename'])
				{
					var a = document.createElement ('a');
					if (window.URL && window.Blob && ('download' in a) && window.atob)
					{
						// Do it the HTML5 compliant way
						var blob = base64ToBlob (jsonData['content'], jsonData['mimetype']);
						var url = window.URL.createObjectURL(blob);
						a.href = url;
						a.download = jsonData['filename'];
						a.style.display = 'none';
						document.body.appendChild(a);
						a.click();
						window.URL.revokeObjectURL(url);
						document.body.removeChild(a);
					}

					$('#formMicroSipHint').html ('Vielen Dank für die Nutzung von CallOne.');
				}
				else
				{	$('#formMicroSipHint').html ('Bitte prüfen Sie ihre Anmeldedaten.<br/>Sind diese korrekt, kontaktieren Sie bitte den CallOne Support.');
					$('#formMicroSipSubmit').show ();
				}
			}
		});
	});
});