document.addEventListener("DOMContentLoaded", function()
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

	// download prepared package
	eventListener('click', '#formMicroSipSubmit', (e) => 
	{
		e.preventDefault();

		let sipuser = document.querySelector('#formMicroSipUsername');
		let sippass = document.querySelector('#formMicroSipPassword');
		let siphint = document.querySelector('#formMicroSipHint');
		let sipsubmit = document.querySelector('#formMicroSipSubmit');

		if ((!sipuser.value.trim().length) ||
			(!sippass.value.trim().length))
		{	siphint.innerHTML = 'Bitte prüfen Sie ihre Anmeldedaten.<br/>Sind diese korrekt, kontaktieren Sie bitte den CallOne Support.';
			return;
		}

		sipsubmit.style.display = 'none';
		siphint.innerHTML = 'Bitte warten, Download wird generiert...';

		let postUrl = 'https://connect.callone.io/backend/microsip/ajax.php';
		let postData = new FormData();
		postData.set('mode', 'download');
		postData.set('username', sipuser.value.trim());
		postData.set('password', sippass.value.trim());
		fetch(postUrl, {
			method: 'POST',
			cache: 'no-cache',
			body: postData
		})
		.then(response => {
			return response.json();
		})
		.then(data => {
			if (data.filename)
			{
				var a = document.createElement ('a');
				if (window.URL && window.Blob && ('download' in a) && window.atob)
				{
					// Do it the HTML5 compliant way
					var blob = base64ToBlob (data.content, data.mimetype);
					var url = window.URL.createObjectURL(blob);
					a.href = url;
					a.download = data.filename;
					a.style.display = 'none';
					document.body.appendChild(a);
					a.click();
					window.URL.revokeObjectURL(url);
					document.body.removeChild(a);
				}

				siphint.innerHTML = 'Vielen Dank für die Nutzung von CallOne.';
			}
			else
			{	siphint.innerHTML = 'Bitte prüfen Sie ihre Anmeldedaten.<br/>Sind diese korrekt, kontaktieren Sie bitte den CallOne Support.';
				sipsubmit.style.display = 'block';
			}
		})
		.catch(error => {
			console.error (JSON.stringify (error));
			siphint.innerHTML = 'Bitte prüfen Sie ihre Anmeldedaten.<br/>Sind diese korrekt, kontaktieren Sie bitte den CallOne Support.';
			sipsubmit.style.display = 'block';
		});
	});
});