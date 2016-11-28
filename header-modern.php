<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yorku
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php if (get_theme_mod('emergency_notice_message') != '') : ?>
            <div class="emergency-notice"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php echo get_theme_mod('emergency_notice_message'); ?></div>
        <?php endif; ?>
        <div id="page" class="site">
            <span class="modern-header">
                <div class="quick-links-content">
                    <div class="close-quick-links"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></div>
                    <?php include('http://fes.yorku.ca/wp-content/themes/York-Template-2014/quick-links.inc'); ?>
                    <div class="central-search modern-header">
                        <form method="get" action="http://search2.info.yorku.ca/">
                            <div class="input-group">
                                <input type="search" name="q" class="form-control" placeholder="Search York University...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                </div>
                <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'yorku'); ?></a>
                <header id="masthead" class="site-header" role="banner">
                    <div class="site-branding modern-header">
                        <a href="http://www.yorku.ca">
                            <img class="yorku-logo" src="<?php echo get_template_directory_uri(); ?>/images/yorku-logo.png" alt="YorkU Logo"/>
                            <img class="yorku-logo-small" src="<?php echo get_template_directory_uri(); ?>/images/yorku-logo-small.png" alt="YorkU Logo"/>
                        </a>
                        <div class="sub-site-name">
                            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                            <div class="social-links">
                                <?php if (get_theme_mod('social_link_facebook') != '') : ?>
                                    <a href="<?php echo get_theme_mod('social_link_facebook', 'https://www.facebook.com/yorkuniversityhome'); ?>"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('social_link_twitter') != '') : ?>
                                    <a href="<?php echo get_theme_mod('social_link_twitter', 'https://twitter.com/YorkUnews'); ?>"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('social_link_instagram') != '') : ?>
                                    <a href="<?php echo get_theme_mod('social_link_instagram', 'https://www.instagram.com/yorkuofficial/'); ?>"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('social_link_youtube') != '') : ?>
                                    <a href="<?php echo get_theme_mod('social_link_youtube', 'https://www.youtube.com/user/YorkUniversity'); ?>"><i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('social_link_rss') != '') : ?>
                                    <a href="<?php echo get_theme_mod('social_link_rss'); ?>"><i class="fa fa-rss-square fa-lg" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if (get_theme_mod('social_link_linkedin') != '') : ?>
                                    <a href="<?php echo get_theme_mod('social_link_linkedin'); ?>"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="central-quick-links">Quick Links <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                        <i class="fa fa-search search-icon fa-lg" aria-hidden="true"></i>
                    </div><!-- .site-branding -->

                    <div class="toggle-search">
                        <?php get_search_form(); ?>
                    </div>
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
                        <span class="mobile-sub-site-name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span>
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sm sm-yorku sm-yorku-modern')); ?>
                    </nav><!-- #site-navigation -->
                </header><!-- #masthead -->
            </span>
            <span id="nav-marker"></span>
            <?php
            dynamic_sidebar('slideshow-1');
            ?>
            <div id="content" class="site-content">

