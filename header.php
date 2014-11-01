<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php  wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="clearfix">


  <nav class="wrapper clearfix">
  <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-400x50.png" alt=""></a>
    <?php wp_nav_menu(array(
      'container' => 'ul',
      'theme_location' => 'primary'
    )); ?>
  </nav>
</header>

