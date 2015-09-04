<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>


<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png"> -->
<!-- <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png"> -->    		
<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">-->
<!--[if IE]>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->


<?php wp_head(); ?>

<?php //Including external font-awesome for the time being ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<?php // drop Google Analytics Here ?>
<?php // end analytics ?>

</head>

<body <?php body_class(); ?>>

<?php edit_post_link('Edit'); ?>  

<header id="site-header">

  <nav role="navigation">
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <i class="fa fa-bars"></i>
          </button>

          <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
            <img src="<?= get_bloginfo('template_directory'); ?>/images/logo_dd9.svg" onerror="this.src='<?= get_bloginfo('template_directory'); ?>/images/logo_dd9.png'; this.onerror=null;" alt="<?php bloginfo( 'name' ) ?> Logo" />
          </a>

        </div><!-- /navbar-header -->

        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <?php bones_main_nav(); ?>
        </div><!-- /navbar-collapse -->
        
      </div><!-- /container -->
    </div><!-- /navbar --> 
  </nav>

</header> <?php // end site-header ?>
