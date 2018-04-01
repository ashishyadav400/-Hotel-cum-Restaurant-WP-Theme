<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Desi Pizza</title>
	<?php wp_head() ?>
</head>
<body>
<!-- Header logo start -->
	<header class="site-header">
		<div class="container">
		<div class="logo">
			<a href="<?php echo esc_url(home_url('/') ); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/img/Logo.png" class="logoimage">
			</a>
		</div> <!-- header logo end -->
		<div class="header-information">
			<div class="socials">
				<?php 
					$args = array (
						'theme_location' => 'social-menu',
						'container'		 => 'nav',
						'container_class' => 'socials',
						'container_id' 	 => 'socials',
						'link_before'	 => '<span class="sr-text">',
						'link_after'	 => '</span>'
					);
					wp_nav_menu($args);
				 ?>
			</div> <!-- .social -->
			<div class="address">
				<p>Lorem Ipsum, giving information on its origins, as well as </p>
				<p>Phone number: 0123456789</p>
			</div> <!-- .address -->
		</div> <!-- .header-information -->
	</div> <!-- .container -->
	</header>
	<div class="main-menu">
		<div class="navigation">
			<?php 
				$args = array(
					'theme_location' => 'header-menu',
					'container'		 => 'nav',
					'container_class'  => 'site-nav'
				);
				wp_nav_menu($args);
			 ?>
		</div>
	</div>