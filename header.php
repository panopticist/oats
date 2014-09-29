<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta name="keywords" content="Older Adults Technology Services (OATS)" />
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



    <!-- Facebook Widget --> 
			  <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>



    <header>
      <div class="container">
        <div class="row">

    <!-- PRIMARY-NAV MODULE --> 
					<div class="col-xs-12">


<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo TDIR . '/img/graphics/oats-logo-blue.svg'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class=" img-responsive logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
			  <li><a href="<?php echo get_site_url(); ?>/approach/">Approach</a></li>
			  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Work <span class="caret"></a>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="<?php echo get_site_url(); ?>/flagship-programs/">Flagship Programs</a></li>
			      <li><a href="<?php echo get_site_url(); ?>/client-projects/">Client Projects</a></li>
			      <li><a href="<?php echo get_site_url(); ?>/white-papers/">White Papers</a></li>
			    </ul>
			  </li>
			  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">About <span class="caret"></a>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="<?php echo get_site_url(); ?>/team/">Team</a></li>
			      <li><a href="<?php echo get_site_url(); ?>/board/">Board</a></li>
			      <li><a href="<?php echo get_site_url(); ?>/partners/">Partners</a></li>
			      <li><a href="<?php echo get_site_url(); ?>/program-sites/">Program Sites</a></li>
			      <li><a href="<?php echo get_site_url(); ?>/funders/">Funders</a></li>
			      <li><a href="<?php echo get_site_url(); ?>/in-kind-donors/">In-Kind Donors</a></li>
			    </ul>
			  </li>
			  <li><a href="<?php echo get_site_url(); ?>/press/">Press</a></li>
			  <li><a href="<?php echo get_site_url(); ?>/contact/">Contact Us</a></li>
			  <li><a href="<?php echo get_site_url(); ?>/donate/">Donate</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- OLD PRIMARY-NAV MODULE

<ul class="nav nav-pills">
</ul>

 --> 


					</div>
				

            <?php // include( INC . 'primary-nav.php' ); ?>

          </div>
        </div>
      </div>
    </header>

