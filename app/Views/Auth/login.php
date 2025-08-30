<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Portal Pengajuan</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app app-login p-0">
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">
					<div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in to Portal</h2>
					<div class="auth-form-container text-start">
						<?php if (session()->getFlashdata('error')): ?>
							<div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
						<?php endif; ?>

						<form class="auth-form login-form" action="<?= base_url('Proses-Login') ?>" method="POST">
							<?= csrf_field() ?>

							<div class="mb-3">
								<label class="sr-only" for="signin-username">Username / Email</label>
								<input id="signin-username" name="username" type="text"
									class="form-control signin-username"
									placeholder="Username atau Email" required="required">
							</div>

							<div class="mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="password" type="password"
									class="form-control signin-password"
									placeholder="Password" required="required">

								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
												Remember me
											</label>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="<?= base_url('reset-password') ?>">Forgot password?</a>
										</div>
									</div>
								</div>
							</div>

							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>
						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="<?= base_url('Register') ?>">here</a>.</div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
			<div class="auth-background-holder">
			</div>
			<div class="auth-background-mask"></div>
			<div class="auth-background-overlay p-3 p-lg-5">
				<div class="d-flex flex-column align-content-end h-100">
					<div class="h-100"></div>
				</div>
			</div>
		</div>

	</div>


</body>

</html>