<?php

/**
 * York University 2016 Theme Customizer.
 *
 * @package York_University_2016
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function yorku_customize_register($wp_customize) {

    $wp_customize->add_section('yorku_social_links', array(
      'title' => 'Social Media Links',
      'priority' => 20,
    ));

    $wp_customize->add_section('emergency_notice', array(
      'title' => 'Emergency Notice',
      'priority' => 25,
    ));


    $wp_customize->add_setting('social_link_facebook', array(
      'default' => 'https://www.facebook.com/yorkuniversityhome',
        )
    );

    $wp_customize->add_setting('social_link_twitter', array(
      'default' => 'https://twitter.com/YorkUnews',
        )
    );

    $wp_customize->add_setting('social_link_instagram', array(
      'default' => 'https://www.instagram.com/yorkuofficial/',
        )
    );

    $wp_customize->add_setting('social_link_youtube', array(
      'default' => '',
        )
    );
    
    $wp_customize->add_setting('social_link_rss', array(
      'default' => '',
        )
    );

    $wp_customize->add_setting('social_link_linkedin', array(
      'default' => '',
        )
    );

    $wp_customize->add_setting('emergency_notice_message', array(
      'default' => '',
        )
    );

    $wp_customize->add_control('social_link_facebook', array(
      'label' => 'Facebook',
      'section' => 'yorku_social_links',
      'setting' => 'social_link_facebook',
      'type' => 'text',
    ));

    $wp_customize->add_control('social_link_twitter', array(
      'label' => 'Twitter',
      'section' => 'yorku_social_links',
      'setting' => 'social_link_twitter',
      'type' => 'text',
    ));

    $wp_customize->add_control('social_link_instagram', array(
      'label' => 'Instagram',
      'section' => 'yorku_social_links',
      'setting' => 'social_link_instagram',
      'type' => 'text',
    ));
    
     $wp_customize->add_control('social_link_youtube', array(
      'label' => 'Youtube',
      'section' => 'yorku_social_links',
      'setting' => 'social_link_youtube',
      'type' => 'text',
    ));
     
      $wp_customize->add_control('social_link_rss', array(
      'label' => 'RSS',
      'section' => 'yorku_social_links',
      'setting' => 'social_link_rss',
      'type' => 'text',
    ));

    $wp_customize->add_control('social_link_linkedin', array(
      'label' => 'LinkedIn',
      'section' => 'yorku_social_links',
      'setting' => 'social_link_linkedin',
      'type' => 'text',
    ));

    $wp_customize->add_control('emergency_notice_message', array(
      'label' => 'Message',
      'section' => 'emergency_notice',
      'setting' => 'emergency_notice_message',
      'type' => 'textarea',
    ));


    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
}

add_action('customize_register', 'yorku_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function yorku_customize_preview_js() {
    wp_enqueue_script('yorku_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'yorku_customize_preview_js');
