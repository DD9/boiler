<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">

<?php // Google Chrome Frame for IE ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

<?php //  ?>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-icon-touch.png"> -->		
<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">-->
<!--[if IE]>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->

<?php // wordpress head functions ?>
<?php wp_head(); ?>
<?php // end of wordpress head ?>

<?php //Icluding external font-awesome for the time being ?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<?php // drop Google Analytics Here ?>
<?php // end analytics ?>

</head>

<body <?php body_class(); ?>>

<?php edit_post_link('Edit'); ?>  

<header id="header">

  <nav role="navigation">
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <i class="fa fa-bars"></i>
          </button>

          <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
            <img src="<?= get_bloginfo('template_directory'); ?>/library/images/DD9_logo_v3.png" id="logo" alt="<?php bloginfo( 'name' ) ?> Logo" />
          </a>

        </div><!-- /navbar-header -->

        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <?php bones_main_nav(); ?>
        </div><!-- /navbar-collapse -->
        
      </div><!-- /container -->
    </div><!-- /navbar --> 
  </nav>

</header> <?php // end header ?>
