<?php
  function wpb_customize_register($wp_customize){
    // theme-options Section
    $wp_customize->add_section('theme-options', array(
      'title'   => __('theme-options', 'josh-prac'),
      'description' => sprintf(__('Options for theme-options','josh-prac')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('theme-options_image', array(
      'default'   => get_bloginfo('template_directory').'/img/theme-options.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme-options_image', array(
      'label'   => __('theme-options Image', 'josh-prac'),
      'section' => 'theme-options',
      'settings' => 'theme-options_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('theme-options_heading', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'josh-prac'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('theme-options_heading', array(
      'label'   => __('Heading', 'josh-prac'),
      'section' => 'theme-options',
      'priority'  => 2
    ));

    $wp_customize->add_setting('theme-options_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'josh-prac'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('theme-options_text', array(
      'label'   => __('Text', 'josh-prac'),
      'section' => 'theme-options',
      'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'josh-prac'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'josh-prac'),
      'section' => 'theme-options',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'josh-prac'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'josh-prac'),
      'section' => 'theme-options',
      'priority'  => 5
    ));

    $wp_customize->add_setting( 'background_color' , array(
        'default'     => '#fff',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
        'label'        => 'Background Color',
        'section'    => 'theme-options',
        'settings'   => 'background_color',
    ) ) );
  }

  add_action('customize_register', 'wpb_customize_register');
