<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
    <div class="u-gridContainer white-bg">
        <div class="u-gridContainer">
            <div class="">
                <div class="u-gridRow">
                    <div class="u-gridCol3 Logo">
                        <a href="/home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
                    </div>
                    <div class="u-gridCol9">
                        <div class="u-cf top-links">
                            <div class="u-objRight">
                                <a href="#">Over Ons</a>
                                <a href="/contact">Contact</a>
                                
                            </div>
                            
                        </div>
                        <div class="u-objRight u-cf top-buttons">
                            <?php get_search_form(); ?>
                            <button class="blue-button"><i class="fa fa-envelope"></i> Mail ons</button>
                            <button class="blue-button"><i class="fa fa-shopping-cart"></i> Winkelwagen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="u-gridContainer white-bg">
      <div class="Bot-Nav">
    	<div class="u-gridContainer">
    		<div class="Nav-toggle u-cf">
    			<a class="Navigation-menuToggle" id="js-navCollapse">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-menu2"></use>
    				</svg>
    			</a>
    		</div>

    		<?php include 'includes/navigation.php'; ?>
    		
    		<div class="Mob-contact-ico">
    			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0165561424">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-phone"></use>
    				</svg>
    			</a>
    		
                    <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-envelope"></use>
    				</svg>
    			</a>
    		</div><!-- header-contact -->
    	</div>
      </div>
    </div>