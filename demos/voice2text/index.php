<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="language" content="de"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CallOne.de - Voice2Text Demo</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style>
	html
	{	background-color: #98ce15;
	}
	</style>

	<script>
	$(function ()
	{
		function callback ()
		{
			$.ajax
			({
				url: 'ajax.php',
				cache: false,
				type: 'POST',
				data:
				{	phonenumber: $('#phonenumber').val().trim(),
					email: $('#email').val().trim()
				},
				dataType: 'json',
				success: function (data)
				{	$('#buttonCallback').addClass ('btn btn-secondary');
					$('#buttonCallback').popover ('show');
				},
				error: function (data)
				{
					$('#phonenumber').prop('disabled', false);
					$('#email').prop('disabled', false);
					$('#buttonCallback').addClass ('btn-success');
					$('#buttonCallback').prop('disabled', false);
				}
			});
		}

		function validate_input ()
		{
			$('#phonenumber').removeClass ('is-invalid');
			$('#email').removeClass ('is-invalid');

			if ($('#phonenumber').val().trim().length < 8)
			{	$('#phonenumber').addClass ('is-invalid');
				return false;
			}

			if ($('#email').val().trim().length < 8)
			{	$('#email').addClass ('is-invalid');
				return false;
			}

			return true;
		}

		// callback button
		$('#buttonCallback').click (function ()
		{
			$('#buttonCallback').removeClass ('btn-success');
			$('#buttonCallback').prop('disabled', true);

			if (!validate_input ())
			{
				$('#buttonCallback').addClass ('btn-success');
				$('#buttonCallback').prop('disabled', false);
				return;
			}

			$('#phonenumber').prop('disabled', true);
			$('#email').prop('disabled', true);
			callback ();
		});

		$('#voice2textSettings').modal({backdrop: 'static', keyboard: false}, 'show');
	});
	</script>
</head>
<body>
	<div class="modal fade" id="voice2textSettings">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title align-top"><strong>CallOne GmbH</strong> - Voice2Text Demo</h4>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="phonenumber" class="col-sm-4 col-form-label"><strong>Telefonnummer</strong></label>
						<div class="col-sm-8">
							<input type="tel" class="form-control" id="phonenumber" placeholder="Mobilfunknummer für SMS" value="">
							<div class="invalid-feedback">Fehlerhafte Telefonnummer.</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-4 col-form-label"><strong>Email</strong></label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" placeholder="" value="">
							<div class="invalid-feedback">Fehlerhafte Emailadresse.</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="buttonCallback" data-toggle="popover"
							title="CallOne sagt Danke!" data-placement="bottom"
							data-content="Sie werden nun angerufen und können eine Minute Sprache aufnehmen und transkribieren lassen.">Start</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>