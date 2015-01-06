<!doctype html>
<html lang="<?php print $globalPage['info']['htmlLanguage']; ?>">
<head>
  <?php print $globalPage['partials']['top']; ?>
  <title><?php print $globalPage['info']['title']; ?>Home page</title>
  <meta name="keywords"     content="<?php print $globalPage['info']['tags']; ?>">
  <meta name="description"  content="<?php print $globalPage['info']['desc']; ?>">
  <meta name="author"     	content="<?php print $globalPage['info']['author']; ?>">
</head>
<body>

<div class="video-container">
	<video class="background-video" src="<?php print baseurl("assets/movie/xno_moveing_background.mp4") ?>" autoplay loop >
	</video>
</div>

<div class="wrapper">
	<a class="menu-button" href="javascript:open_modal();">
		<div class="line one"></div>
		<div class="line two"></div>
		<div class="line three"></div>
	</a>
</div>

<img src="<?php print baseurl("assets/img/xno-logo.png"); ?>" class="logo">


<div class="xno-modal-window">
	<a href="javascript:close_modal();" class="xno-modal-quit"></a>
	<div class="xno-modal-content">
		<div class="row">
			<div class="col-md-12">
				<div class="space-out">
					<h1>XNO</h1>
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="space-out">
					<h2>OUR PROJECTS</h2>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="item">
								Xno.li
								<div class="pull-right">
									<a href="http://xno.li"><img class="rel-icon" src="<?php print baseurl("assets/img/earth23.png"); ?>"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="item">
								Botwars
								<div class="pull-right">
									<a href="#ComingSoon"><img class="rel-icon" src="<?php print baseurl("assets/img/earth23.png"); ?>"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="space-out">
					<h2>INLUENS </h2>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="item">
								Startbox.se
								<div class="pull-right">
									<a href="http://startbox.se"><img class="rel-icon" src="<?php print baseurl("assets/img/earth23.png"); ?>"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="item">
								RestaurangOnline
								<div class="pull-right">
									<a href="http://RestaurangOnline.se"><img class="rel-icon" src="<?php print baseurl("assets/img/earth23.png"); ?>"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="space-out">
					<h3 class="text-center">Contact</h3>
					<hr>
					<h4 class="text-center">xno@xno.se</h4>
				</div>
			</div>
		</div>
	</div>
</div>









<?php print $globalPage['partials']['bottom']; ?>
</body>
</html> 