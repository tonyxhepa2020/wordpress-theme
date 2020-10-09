<?php

function ju_misc_customizer_section( $wp_customize ){


    $wp_customize->add_setting( 'ju_header_show_search', [
        'default'       =>  'yes',
        'transport'     =>  'postMessage'
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_search_input',
        array(
            'label'                 =>  __( 'Show Search Button in Header', 'udemy' ),
            'section'               => 'ju_misc_section',
            'settings'              => 'ju_header_show_search',
            'type'                  =>  'checkbox',
            'choices'               =>  [
                'yes'               =>  'Yes'
            ]
        )
    ));
    $wp_customize->add_setting( 'ju_footer_copyright_text', array(
        'default'       =>  'Copyrights &copy; 2019 All Rights Reserved.',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_copyright_text_input',
        array(
            'label'                 =>  __( 'Show Search Button in Header', 'udemy' ),
            'section'               => 'ju_misc_section',
            'settings'              => 'ju_footer_copyright_text',
        )
    ));
    $wp_customize->add_setting( 'ju_footer_tos_page', array(
        'default'       =>  0,
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_tos_page_input',
        array(
            'label'                 =>  __( 'Footer TOS Page', 'udemy' ),
            'section'               => 'ju_misc_section',
            'settings'              => 'ju_footer_tos_page',
            'type'                  =>  'dropdown-pages'
        )
    ));
    $wp_customize->add_setting( 'ju_footer_privacy_page', array(
        'default'       =>  0,
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_page_input',
        array(
            'label'                 =>  __( 'Footer Privacy Policy Page', 'udemy' ),
            'section'               => 'ju_misc_section',
            'settings'              => 'ju_footer_privacy_page',
            'type'                  =>  'dropdown-pages'
        )
    ));
    $wp_customize->add_setting( 'ju_read_more_color', [
        'default'       =>  '#1ABC9C'
    ]);
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ju_read_more_color_input',
            array(
                'label'      => __( 'Read more link color', 'udemy' ),
                'section'    => 'ju_misc_section',
                'settings'   => 'ju_read_more_color',
            )
        )
    );
    $wp_customize->add_setting( 'ju_report_file', [
        'default'       =>  ''
    ]);
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'ju_report_file_input',
            array(
                'label'      => __( 'File Report', 'udemy' ),
                'section'    => 'ju_misc_section',
                'settings'   => 'ju_report_file',
            )
        )
    );
    $wp_customize->add_section( 'ju_misc_section', [
        'title'         =>  __( 'Udemy Misc Settings', 'udemy' ),
        'priority'      =>  30,
        'panel'         =>  'udemy'
    ]);















}