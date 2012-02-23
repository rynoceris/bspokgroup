<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php // bloginfo( 'stylesheet_url' ); ?>" />-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="/js/jquery.relatedtweets-1.0.min.js" type="text/javascript" charset="utf-8"></script>
</head>

<body <?php body_class(); ?>>
	<header><div class="wrap">
            <div id="header">   

                <a id="logo" href="./" title="bspok group"><img src="<?php echo get_template_directory_uri(); ?>/images/bspok-group.png" width="212" height="78" alt="Bspok Group"></a>
                
                <hr>
				<nav>
					<ul id="nav">
						<li>
                            <a href="/about.html" title="About Us">
                                <strong>About Us</strong>
                                <span>Who we are.</span>
                            </a>
                        </li>

						<li>
                            <a href="/products.html" title="Products">
                                <strong>Products</strong>
                                <span>What we offer.</span>
                            </a>
                        </li>
						
						<li>
                            <a href="/#services-list" title="Services">
                                <strong>Services</strong>
                                <span>What we do.</span>
                            </a>
                        </li>
                        <li>
                            <a href="/design-archive.html" title="Design Archive">
                                <strong>Design Archive</strong>
                                <span>See our work.</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="/contact.php" title="Contact">
                                <strong>Contact</strong>
                                <span>Get in touch.</span>
                            </a>
                        </li>
                    </ul>
				</nav>
			</div> <!-- / #header -->

            <hr>
            
        </div> <!-- / .wrap -->
    </header> <!-- / header -->
	<hr>
	
	<div id="container-interior">
        <div id="blog-content" class="wrap clearFix">
			<div id="copy">
				<div class="breadcrumbs">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
				<!--<h1 id="site-title"><span><a href="<?php // echo esc_url( home_url( '/' ) ); ?>" title="<?php // echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php // bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php // bloginfo( 'description' ); ?></h2>

			

			<?php
				// Has the text been hidden?
			//	if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php // if ( ! empty( $header_image ) ) : ?> with-image<?php // endif; ?>">
				<?php get_search_form(); ?>
				</div>
			<?php
			//	else :
			?>
				<?php get_search_form(); ?>
			<?php// endif; ?>

			
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php // esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php // _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php // esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php // _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>


	<div id="main">-->