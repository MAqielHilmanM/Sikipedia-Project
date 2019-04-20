<!doctype html>
<html>
    <head>
        <title>Create account - Wikipedia</title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    </head>
    <body>
		<div class="wrapAll clearfix">
			<div class="sidebar">
				<div class="logo">
					<a href="/"><img src='<?php echo base_url() ?>assets/img/logo.png' alt="logo"></a>
				</div>
				<div class="navigation">
					<ul>
						<li><a href="#">Main page</a></li>
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
					<span class="user">Not logged in</span> <a href="#">Talk</a> <a href="#">Contributions</a> <a href="#">Create account</a> <a href="<?php echo site_url('Wikipedia/login'); ?>">Log in</a>
				</div>
				<div class="tabs clearfix">
					<div class="tabsLeft">
						<ul>
							<li><a href="" class="active text-body">Special page</a></li>						
						</ul>
					</div>
					<div id="simpleSearch">
						<input type="text" name="searchInput" id="searchInput" placeholder="Search Wikipedia" size="12" />
						<div id="submitSearch"></div>
					</div>
					
				
				</div>
					<div class="article">
						<h1>Create account</h1>
						<form method="POST">
							<?php echo validation_errors(); ?>
					<div class="form-group col-3">
						<label>Username</label>
						<input class="form-control" type="text" name="username" placeholder="Enter your username">
					</div>

					<div class="form-group col-3">
						<label>Password</label>
						<input class="form-control pwd" type="password" name="password" placeholder="Enter a password">
					</div>

					<div class="form-group col-3">
						<label>Confirm password</label>
						<input class="form-control pwd" type="password" name="c_password" placeholder="Enter your password again">
					</div>

					<div class="form-group col-3">
						<label>Email address</label>
						<input class="form-control type="password" name="email" placeholder="Enter your email address">
					</div>
					<!-- isi -->
					<button id="create" class="btn btn-primary col-3" type="submit">Create your account</button>					
				</div>
				
				<div class="pagefooter">
					
					<div class="footerlinks">
						<a href="#">Privacy policy</a> <a href="#">About Wikipedia</a> <a href="#">Disclaimers</a> <a href="#">Contact Wikipedia</a> <a href="#">Developers</a>
						<a href="#">Cookie statement</a>
						<a href="#">Mobile view</a>
					</div>
				</div>
			
			
			</div>		
		</div>
		

    </body>
</html>
