<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta charset="utf-8" />

		<!-- User defined head content such as meta tags and encoding options -->
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="keywords" content="LEEDMOL, Heibbe's Group, UV-vis Sp3ctrum P4tronum, Rating, IQ UnB" />
		<meta name="author" content="Thiago Lopes" />
		<meta name="description" content="Heibbe's Group - Laboratory of Eletronic Structure and Molecular Dynamics" />
		<meta name="googlebot" content="index, follow" />
		<meta name="reply-to" content="leedmol@heibbegroup.top" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="icon" href="http://www.leedmol.com/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://www.leedmol.com/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://www.leedmol.com/apple-touch-icon.png" />
		

		<!-- User defined head content -->
		

		<!-- Meta tags -->
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

		<title>Contact US | Heibbe's Group</title>

		<!-- Load some fonts from Google's Font service -->
		<link href='https://fonts.googleapis.com/css?family=Open Sans:400,300,800|Noto Serif|Arvo' rel='stylesheet' type='text/css'>

		<!-- CSS stylesheets reset -->
	  <link rel="stylesheet" type="text/css" media="all" href="rw_common/themes/tesla/consolidated.css?rwcache=533952051" />
		

		<!-- CSS for the Foundation framework's CSS that handles the responsive columnized layout -->
	  

	  <!-- Main Stylesheet -->
		

	  <!-- Loads Font Awesome v4.0.3 CSS from CDN -->
	  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
		<!-- RapidWeaver Color Picker Stylesheet -->
		  

	  <!-- Theme specific media queries -->
		

		<!-- Base RapidWeaver javascript -->
		<script type="text/javascript" src="rw_common/themes/tesla/javascript.js?rwcache=533952051"></script>

		<!-- jQuery 1.8 is included in the theme internally -->
	  <script src="rw_common/themes/tesla/js/jquery.min.js?rwcache=533952051"></script>

	  <!-- Theme specific javascript, along with jQuery Easing and a few other elements -->
	  <script src="rw_common/themes/tesla/js/elixir.js?rwcache=533952051"></script>

		<!-- Style variations -->
		<script type="text/javascript" src="rw_common/themes/tesla/js/fitvids.js?rwcache=533952051"></script>
		

		<!-- User defined styles -->
		

		<!-- User defined javascript -->
		

		<!-- Plugin injected code -->
		

	
	</head>
	
	<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

	<body>

			<header role="banner">

				<!-- Site Logo -->
				<div id="logo" data-0="opacity: 1;" data-top-bottom="opacity: 0;" data-anchor-target="#logo">
			  	<img src="rw_common/images/Asset 2_en.png" width="8336" height="3553" alt="Leedmol_logo"/>  
				</div>
				
				<div id="title_wrapper">
						<!-- Site Title -->
						<h1 id="site_title" data-0="opacity: 1; top:0px;" data-600="opacity: 0; top: 80px;" data-anchor-target="#site_title">
							Contact Form
						</h1>

						<!-- Site Slogan -->
						<h2 id="site_slogan" data-0="opacity: 1; top:0px;" data-600="opacity: 0; top: 80px;" data-anchor-target="#site_slogan">
							Laboratory of Electronic Structure and Molecular Dynamics
						</h2>

						<!-- Scroll down button -->
						<div id="scroll_down_button" data-0="opacity: 1; top:0px;" data-400="opacity: 0; top: 100px;" data-anchor-target="#scroll_down_button">
							<i class="fa fa-angle-down"></i>
						</div>
				</div>
				
				<!-- Top level navigation -->
				<div id="navigation_bar">
					<div class="row site_width">
						<div class="large-12 columns">
							<nav id="top_navigation"><ul><li><a href="./" rel="">Home</a></li><li><a href="about.html" rel="">About</a></li><li><a href="interests.html" rel="">Interests</a></li><li><a href="members.html" rel="">People</a></li><li><a href="publications.html" rel="">Publications</a></li><li><a href="programs.html" rel="">Softwares</a></li><li><a href="resources.html" rel="">Resources</a></li><li><a href="news.html" rel="">News</a></li><li><a href="links.html" rel="">Links</a></li><li><a href="contact.php" rel="" id="current">Contact US</a></li></ul></nav>
						</div>
					</div>
				</div>

			</header>

		<!-- Sub-navigation -->
		<div id="sub_navigation_bar">
			<div class="row site_width">
				<div class="large-12 columns">
					<nav id="sub_navigation"><ul></ul></nav>
				</div>
			</div>
		</div>

		<!-- Mobile Navigation -->
		<div id="mobile_navigation_toggle">
			<i id="mobile_navigation_toggle_icon" class="fa fa-bars"></i>
		</div>
		<nav id="mobile_navigation">
			<ul><li><a href="./" rel="">Home</a></li><li><a href="about.html" rel="">About</a></li><li><a href="interests.html" rel="">Interests</a></li><li><a href="members.html" rel="">People</a></li><li><a href="publications.html" rel="">Publications</a></li><li><a href="programs.html" rel="">Softwares</a></li><li><a href="resources.html" rel="">Resources</a></li><li><a href="news.html" rel="">News</a></li><li><a href="links.html" rel="">Links</a></li><li><a href="contact.php" rel="" id="current">Contact US</a></li></ul>
		</nav>

		<!-- Main Content area and sidebar -->
		<div class="row site_width" id="container">
			<section id="content"class="large-8 columns">
				
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./contact_files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

			</section>
			<aside id="sidebar" class="large-4 columns">
				<!-- Sidebar content -->
				<h4 id="sidebar_title"></h4>
				<div id="sidebar_content"><!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="56115/"></script> <!-- end feedwind code -->

<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="56114/"></script> <!-- end feedwind code -->

<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="56117/"></script> <!-- end feedwind code -->

</div>
				<div id="archives">
					
				</div>
			</aside>
		</div>

		<!-- Footer -->
		<footer class="row site_width">
			<div id="footer_content" class="large-12 columns">
				<div id="breadcrumb_container">
					<i class="fa fa-folder-open-o"></i> <span id="breadcrumb"></span>
				</div>
				&copy; 2017 Thiago Lopes <a href="#" id="rw_email_contact">Contact me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":lo";var _rwObsfuscatedHref3 = "pes";var _rwObsfuscatedHref4 = ".th";var _rwObsfuscatedHref5 = ".o@";var _rwObsfuscatedHref6 = "gma";var _rwObsfuscatedHref7 = "il.";var _rwObsfuscatedHref8 = "com";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
			</div>
		</footer>

		<!-- Scroll up button -->
		<div id="scroll_up_button"><i class="fa fa-angle-up"></i></div>

		<!-- Handles loading Skrollr, which helps in animating portions of the header area. -->
		<!-- We check to see if the user is on an mobile device or not, and only serve up -->
		<!-- the animations on non-mobile devices. -->
		<script>
			$elixir(window).load(function() {
			  if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
			      skrollr.init({
			          forceHeight: false
			      });
			  }
			});
		</script>

	</body>

</html>
