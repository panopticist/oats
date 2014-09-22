<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta name="keywords" content="Park Slope Food Coop, Cooperative Design Process, Food Coop, Brooklyn, Cooperative" />
    <meta name="description" content="A member-owned cooperative in Brooklyn, New York." />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph Tags -->
    <?php // include INC . 'open-graph.php'; ?>

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT; ?>/css/bootstrap.min.css?v=<?php echo V; ?>'>"/>
    <!-- Le Font Awesome // http://fontawesome.github.io/Font-Awesome/icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT; ?>/css/font-awesome.min.css?v=<?php echo V; ?>'>"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT; ?>/style.css?v=<?php echo V; ?>'>"/>

    <!-- Typekit -->
    <script src="//use.typekit.net/yfy7fjl.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo TDIR . '/img/graphics/oats-logo-blue.svg'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class=" img-responsive logo"></a>
            </h1>

            <?php include( INC . 'primary-nav.php' ); ?>

          </div>
        </div>
      </div>
    </header>

