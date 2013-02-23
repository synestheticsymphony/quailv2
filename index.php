<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<jdoc:include type="head" />
	<title><?php $title = $this->getTitle(); ?></title>
	<link href="<?php echo $this->baseurl ?>/templates/quailv2/css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="<?php echo $this->baseurl ?>/templates/quailv2/css/bootstrap-responsive.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/quailv2/css/template.css" type="text/css" />
	<!--[if !IE 7]>
	<style type="text/css">
		#container {
			display:table;
			height:100%
		}
	</style>
<![endif]-->
</head>
<body>
	<div id="container" class="container-fluid">
		<div class="row-fluid" id="header">
			<div id="branding" class="row-fluid">
				<div id="login_button" class="hidden-phone">
					<?php
						if(JFactory::getUser()->id) {?>
					<form action="/~jake/gentry_joomla/" method="post" id="login-form">
						<input type="submit" name="Submit" class="button" id="logout_button" value="Logout">
						<input type="hidden" name="option" value="com_users">
						<input type="hidden" name="task" value="user.logout">
						<input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD0xMDE=">
						<?php echo JHtml::_('form.token'); ?>
					</form>
					<?php
						} else { ?>
					<a class="login_link" onclick="$('#login_form').slideToggle();">Login</a>
					<?php
						}
					?>
				</div>
				<div id="login_form">
					<jdoc:include type="modules" name="loginform" style="xhtml" />
				</div>
				<div id="facebook_button" class="hidden-phone">
					<a href="http://www.facebook.com/" target="_blank">
						<img src="<?php echo $this->baseurl ?>/templates/quailv2/img/f_logo.png" id="facebook_logo" alt="Facebook" height="32" width="32" />
					</a>
				</div>
				<img src="<?php echo $this->baseurl ?>/templates/quailv2/img/top_banner.jpg" id="header_image" />
			</div>
			<div id="slideshow" class="hidden-phone">
				<jdoc:include type="modules" name="slideshow" style="xhtml" />
			</div>
			<div class="navbar" id="menubar">
				<div class="navbar-inner" style="min-height: 0;">
					<div class="container">
						<jdoc:include type="modules" name="menubar" style="xhtml" />
					</div>
				</div>		
			</div>
		</div>
		<div class="row-fluid">
			<jdoc:include type="modules" name="dashboard_row_1" style="xhtml" />
		</div>
		<div class="row-fluid">
			<jdoc:include type="modules" name="dashboard_row_2" style="xhtml" />
		</div>
		<div id="content">
			<jdoc:include type="component" />
		</div>
	</div>
	<div id="footer">
		<jdoc:include type="modules" name="footer" style="xhtml" />
	</div>
	<script src="<?php echo $this->baseurl ?>/templates/quailv2/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/quailv2/js/bootstrap.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/quailv2/js/bootstrap-collapse.js"></script>
</body>
</html>