<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<title><?php bloginfo('name') ?></title>
	<!-- <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>"> -->
	<?php wp_head(); ?>
</head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
</head>


<body>
<!-- header -->
<header>
  <h2><a href="<?php echo site_url(); ?>">ICT HUB</a></h2>
  <nav>
    <li <?php if(is_front_page()) echo 'class="active"'; ?>><a href="<?php echo site_url(); ?>">Home</a></li>
    <li <?php if(is_page('About')) echo 'class="active"'; ?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
    <li <?php if(is_page('Contact')) echo 'class="active"'; ?>><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
    <li <?php if(is_page('Contact Messages')) echo 'class="active"'; ?>><a href="<?php echo site_url('/contact-messages'); ?>">Client Responses</a></li>
  </nav>
</header>