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
        <div class="quick-links-content">
            <div class="close-quick-links"><i class="fa fa-times-circle fa-4x" aria-hidden="true"></i></div>
            <div class="central-search central-search-mobile">
                <form method="get" action="http://search2.info.yorku.ca/">
                    <div class="input-group">
                        <input type="search" name="q" class="form-control" placeholder="Search York University...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </form>
            </div>
            <?php include('http://fes.yorku.ca/wp-content/themes/York-Template-2014/quick-links.inc'); ?>
        </div>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'yorku'); ?></a>
            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <a href="http://www.yorku.ca"><img class="yorku-logo" src="<?php echo get_template_directory_uri(); ?>/images/yorku-logo.png" alt="YorkU Logo"/></a>
                    <div class="central-search central-search-desktop">
                        <form method="get" action="http://search2.info.yorku.ca/">
                            <div class="input-group">
                                <input type="search" name="q" class="form-control" placeholder="Search York University...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <div class="central-quick-links">Quick Links <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div><!-- .site-branding -->
                <div class="yorku-title-bar">
                    <a href="<?php bloginfo('url'); ?>">Faculty of Environmental Studies</a>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></button>
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sm sm-yorku')); ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->
            <div id="content" class="site-content">
