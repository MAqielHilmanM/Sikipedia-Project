<!doctype html>
<html>
    <head>
        <title>Create account - Wikipedia</title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
        <script src="<?= base_url('assets/js/script.js') ?>"></script>

    </head>
    <body>
		<div class="wrapAll clearfix">
			<div class="sidebar">
				<div class="logo">
					<a href="<?php echo site_url('wiki/index'); ?>"><img src='<?php echo base_url() ?>assets/img/logo.png' alt="logo"></a>
				</div>
				<div>
					<ul>
						<li><a href="<?php echo site_url('wiki/index'); ?>">Main page</a></li>
						<li><a href="#">Contents</a></li>
						<li><a href="#">Featured content</a></li>
						<li><a href="#">Current events</a></li>
						<li><a href="#">Random article</a></li>
						<li><a href="#">Donate to Wikipedia</a></li>
						<li><a href="#">Wikipedia store</a></li>
					</ul>
					<h3>Interaction</h3>
					<ul>
						<li><a href="#">Help</a></li>
						<li><a href="#">About Wikipedia</a></li>
						<li><a href="#">Community portal</a></li>
						<li><a href="#">Recent changes</a></li>
						<li><a href="#">Contact page</a></li>
					</ul>
					<h3>Tools</h3>
					<ul>
						<li><a href="#">Upload file</a></li>
						<li><a href="#">Special pages</a></li>
						<li><a href="#">Printable version</a></li>
					</ul>
					<h3>Languages</h3>
				</div>


			</div>
			<div class="mainsection">
				<div class="headerLinks">
					<span class="user">Not logged in</span> <a href="#">Talk</a> <a href="#">Contributions</a> <a href="<?php echo site_url('Wikipedia/register'); ?>">Create account</a> <a href="<?php echo site_url('Wikipedia/login'); ?>">Log in</a>
				</div>
				<div class="tabs clearfix">
					<div class="tabsLeft">
						<ul>
							<li><a href="" class="active text-body">Special page</a></li>
						</ul>
					</div>
					<div id="simpleSearch">
						<input class="doSearch" type="text" name="searchInput" id="searchInput" placeholder="Search Wikipedia" size="12" />
						<div id="submitSearch"></div>
					</div>


				</div>
					<div class="article">
						<h1>Create account</h1>
						<hr>
						<hr>
						<br>
						<form method="POST">
							<?php echo validation_errors(); ?>

						<div class="mw-content-text">
							<div class="row">
								<div class="col-5">

									<div class="form-group col-6">
										<labela>Username
											<span class="mw-ui-flush-right">
												<a href="#">
													(help me choose)
												</a>
											</span>
										</label>
										<input class="form-control" type="text" name="username" placeholder="Enter your username">
									</div>

									<div class="form-group col-6">
										<label>Password</label>
										<input class="form-control pwd" type="password" name="password" placeholder="Enter a password">
									</div>

									<div class="form-group col-6">
										<label>Confirm password</label>
										<input class="form-control pwd" type="password" name="c_password" placeholder="Enter your password again">
									</div>

									<div class="form-group col-6">
										<label>Email address</label>
										<input class="form-control type="password" name="email" placeholder="Enter your email address">
									</div>
									<div class="col-7">
										<p>CAPTCHA Security check</p>
										<p>To protect the wiki against automated account creation, we kindly ask you to enter the words that appear below in the box (<a href="#">more info</a>):
										</p>

										<div class="mw-input">
											<div class="fancycaptcha-captcha-container">
												<div class="fancycaptcha-captcha-and-reload">
													<div class="fancycaptcha-image-container">
														<img class="fancycaptcha-image" src="/w/index.php?title=Special:Captcha/image&amp;wpCaptchaId=728155157">
														<small class="confirmedit-captcha-reload fancycaptcha-reload">Refresh</small>
													</div>
												</div>
												<input id="mw-input-captchaWord" name="captchaWord" class="mw-ui-input" size="12" autocomplete="off" autocorrect="off" autocapitalize="off" placeholder="Enter the text you see on the image" tabindex="6">
												<small class="mw-createacct-captcha-assisted">Can't see the image?
													<a href="#" title="Wikipedia:Request an account">Request an account
													</a>
												</small>
											</div>
										</div>
									</div>
							</div>
							<div>
								<h1>Wikipedia is made by people like you.</h1>
								<div>
									<div class="mw-number-text icon-edits">
										<h3>889,074,250</h3>
										<p>edits</p>
									</div>
									<div class="mw-number-text icon-pages">
										<h3>5,845,922</h3>
										<p>articles</p>
									</div>
									<div class="mw-number-text icon-contributors">
										<h3>136,523</h3>
										<p>recent contributors</p>
									</div>
								</div>
							</div>
						</div>
					<div class="pagefooter">
						<button id="create" class="btn btn-primary col-3" type="submit">Create your account</button>
					</div>
				</div>
			</div>


					<div>
						<a href="#">Privacy policy</a> <a href="#">About Wikipedia</a> <a href="#">Disclaimers</a> <a href="#">Contact Wikipedia</a> <a href="#">Developers</a>
						<a href="#">Cookie statement</a>
						<a href="#">Mobile view</a>
					</div>



    </body>
</html>
