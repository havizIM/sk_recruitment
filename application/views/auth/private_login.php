
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <title>E Recruitment - Log in </title>

	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-extend.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/master_style.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/skins/_all-skins.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor_plugins/loaders/loaders.min.css">

</head>
<body class="hold-transition bg-img" style="background-image: url(<?= base_url() ?>assets/images/gallery/full/6.jpg)" data-overlay="4">
	
	<div class="auth-2-outer row align-items-center h-p100 m-0">
		<div class="auth-2">
		  <div class="auth-logo font-size-40">
			<a href="<?= base_url() ?>assets/index.html" class="text-white"><b>E</b> Recruitment</a>
		  </div>
		  <!-- /.login-logo -->
		  <div class="auth-body">
			<p class="auth-msg">Sign in to start your session</p>

			<form id="form_login" class="form-element">
			  <div class="form-group has-feedback">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
				<span class="ion ion-email form-control-feedback"></span>
			  </div>
			  <div class="form-group has-feedback">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				<span class="ion ion-locked form-control-feedback"></span>
			  </div>
			  <div class="row">
				<div class="col-6">
				  <div class="checkbox">
					<input type="checkbox" id="basic_checkbox_1">
					<label for="basic_checkbox_1">Show Password</label>
				  </div>
				</div>
				<!-- /.col -->
				<div class="col-6">

				</div>
				<!-- /.col -->
				<div class="col-12 text-center">
				  <button type="submit" class="btn btn-block mt-10 btn-success">LOG IN</button>
				</div>
				<!-- /.col -->
			  </div>
			</form>


		  </div>
		</div>
	
	</div>
	
	<script src="<?= base_url() ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	<script src="<?= base_url() ?>assets/vendor_components/popper/dist/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="<?= base_url() ?>assets/vendor_components/jquery-validation/dist/jquery.validate.js"></script>
	<script src="<?= base_url() ?>assets/vendor_plugins/loaders/blockui.min.js"></script>

	<script src="<?= base_url() ?>src/private/additional.js"></script>
	<script src="<?= base_url() ?>src/private/auth.js"></script>
	<script>
        document.addEventListener('DOMContentLoaded', function () {
            authController.init()
        })
    </script>

</body>
</html>
