<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Service.com
 * @version 1.0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <nav role="navigation">
          <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
            <a id="desktop-site-logo" class="site-logo" href="/"></a>
                <div class="text-links">
                    <a href="/">Home</a>
                    <a href="/dashboard/search">Browse</a>
                    <a href="/dashboard/pro">For Pros</a>
                    <a href="/local/">Advice</a>
                    <a href="/local/g/Roofing-Contractors/">Roofing Advice</a>
                    <a href="/local/g/HVAC-Contractors/">HVAC Advice</a>
                    <a class="request-quote" href="/dashboard/start">
                        Request Quote
                    </a>
                </div>
            </ul>
          </div>
        </nav>
    </header><!-- #masthead -->

    <?php
    // If a regular post or page, and not the front page, show the featured image.
    if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
        echo '<div class="single-featured-image-header">';
        the_post_thumbnail( 'twentyseventeen-featured-image' );
        echo '</div><!-- .single-featured-image-header -->';
    endif;
    ?>

    <div id="content" class="site-content">
