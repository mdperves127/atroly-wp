<?php


new \Kirki\Panel(
    'panel_id',
    [
        'priority' => 10,
        'title' => esc_html__('Atroly Panel', 'atroly'),
        'description' => esc_html__('Atroly Panel Description.', 'atroly'),
    ]
);

// header_top_section
function header_top_section()
{
    // header_top_bar section 
    new \Kirki\Section(
        'header_top_section',
        [
            'title' => esc_html__('Header Info', 'atroly'),
            'description' => esc_html__('Header Section Information.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 100,
        ]
    );
    // header_top_bar section 

    new \Kirki\Field\Radio_Image(
        [
            'settings' => 'header_layout_custom',
            'label' => esc_html__('Choose Header Style', 'atroly'),
            'section' => 'header_top_section',
            'priority' => 10,
            'choices' => [
                'header_1' => get_template_directory_uri() . '/inc/img/header/header-1.png',
                'header_2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
                'header_3' => get_template_directory_uri() . '/inc/img/header/header-3.png',
                'header_4' => get_template_directory_uri() . '/inc/img/header/header-4.png'
            ],
            'default' => 'header_1',
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_topbar_switch',
            'label' => esc_html__('Header Topbar Switch', 'atroly'),
            'description' => esc_html__('Header Topbar switch On/Off', 'atroly'),
            'section' => 'header_top_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
            'active_callback' => [
                [
                    'setting' => 'header_layout_custom',
                    'operator' => 'in',
                    'value' => ['header_3', 'header_4'],
                ],
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_right_switch',
            'label' => esc_html__('Header Right Switch', 'atroly'),
            'description' => esc_html__('Header Right switch On/Off', 'atroly'),
            'section' => 'header_top_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_preloader_switch',
            'label' => esc_html__('Header Preloader Switch', 'atroly'),
            'description' => esc_html__('Header Preloader switch On/Off', 'atroly'),
            'section' => 'header_top_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_search_switch',
            'label' => esc_html__('Header Search Switch', 'atroly'),
            'description' => esc_html__('Header Search switch On/Off', 'atroly'),
            'section' => 'header_top_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_backtotop_switch',
            'label' => esc_html__('Header Back to Top Switch', 'atroly'),
            'description' => esc_html__('Header Back to Top switch On/Off', 'atroly'),
            'section' => 'header_top_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_top_button_switch',
            'label' => esc_html__('Header Top Button On/Off', 'atroly'),
            'description' => esc_html__('Header Top Button switch On/Off', 'atroly'),
            'section' => 'header_top_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );


    new \Kirki\Field\Text(
        [
            'settings' => 'header_button_text',
            'label' => esc_html__('Button Text', 'atroly'),
            'section' => 'header_top_section',
            'default' => esc_html__('Book an Appointment', 'atroly'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_button_link',
            'label' => esc_html__('Button URL', 'atroly'),
            'section' => 'header_top_section',
            'default' => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_phone',
            'label' => esc_html__('Phone Number', 'atroly'),
            'section' => 'header_top_section',
            'default' => esc_html__('+88 01310-069824', 'atroly'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_email',
            'label' => esc_html__('Email ID', 'atroly'),
            'section' => 'header_top_section',
            'default' => esc_html__('atroly@support.com', 'atroly'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_address',
            'label' => esc_html__('Address Text', 'atroly'),
            'section' => 'header_top_section',
            'default' => esc_html__('734 H, Bryan Burlington, NC 27215', 'atroly'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_address_link',
            'label' => esc_html__('Address URL', 'atroly'),
            'section' => 'header_top_section',
            'default' => 'https://www.google.com/maps/@36.0758266,-79.4558848,17z',
            'priority' => 10,
        ]
    );


}
header_top_section();

// header_social_section
function header_social_section()
{
    // header_top_bar section 
    new \Kirki\Section(
        'header_social_section',
        [
            'title' => esc_html__('Social Area', 'atroly'),
            'description' => esc_html__('Social URL.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 120,
        ]
    );
    // header_top_bar section 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_facebook_link',
            'label' => esc_html__('Facebook URL', 'atroly'),
            'section' => 'header_social_section',
            'default' => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_twitter_link',
            'label' => esc_html__('Twitter URL', 'atroly'),
            'section' => 'header_social_section',
            'default' => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_linkedin_link',
            'label' => esc_html__('Linkedin URL', 'atroly'),
            'section' => 'header_social_section',
            'default' => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_instagram_link',
            'label' => esc_html__('Instagram URL', 'atroly'),
            'section' => 'header_social_section',
            'default' => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_youtube_link',
            'label' => esc_html__('Youtube URL', 'atroly'),
            'section' => 'header_social_section',
            'default' => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_fb_link',
            'label' => esc_html__('Facebook URL', 'atroly'),
            'section' => 'header_social_section',
            'default' => '#',
            'priority' => 10,
        ]
    );

}
header_social_section();

// header_logo_section
function header_logo_section()
{
    // header_logo_section section 
    new \Kirki\Section(
        'header_logo_section',
        [
            'title' => esc_html__('Header Logo', 'atroly'),
            'description' => esc_html__('Header Logo Settings.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 130,
        ]
    );

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings' => 'header_logo',
            'label' => esc_html__('Header Logo', 'atroly'),
            'description' => esc_html__('Theme Default/Primary Logo Here', 'atroly'),
            'section' => 'header_logo_section',
            'default' => get_template_directory_uri() . '/assets/images/logo/logo.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings' => 'header_secondary_logo',
            'label' => esc_html__('Header Secondary Logo / White', 'atroly'),
            'description' => esc_html__('Theme Secondary Logo Here', 'atroly'),
            'section' => 'header_logo_section',
            'default' => get_template_directory_uri() . '/assets/images/logo/logo-white.png',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'preloader_logo',
            'label' => esc_html__('Preloader Icon', 'atroly'),
            'description' => esc_html__('Preloader Icon Logo Here', 'atroly'),
            'section' => 'header_logo_section',
            'default' => get_template_directory_uri() . '/assets/images/icon/preloader.gif',
        ]
    );
}
header_logo_section();

// header_logo_section
function header_breadcrumb_section()
{
    // header_logo_section section 
    new \Kirki\Section(
        'header_breadcrumb_section',
        [
            'title' => esc_html__('Breadcrumb', 'atroly'),
            'description' => esc_html__('Breadcrumb Settings.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 160,
        ]
    );

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings' => 'breadcrumb_image',
            'label' => esc_html__('Breadcrumb Image', 'atroly'),
            'description' => esc_html__('Breadcrumb Image add/remove', 'atroly'),
            'section' => 'header_breadcrumb_section',
        ]
    );


    new \Kirki\Field\Color(
        [
            'settings' => 'breadcrumb_bg_color',
            'label' => __('Breadcrumb BG Color', 'atroly'),
            'description' => esc_html__('You can change breadcrumb bg color from here.', 'atroly'),
            'section' => 'header_breadcrumb_section',
            'default' => '#f3fbfe',
        ]
    );
    new \Kirki\Field\Slider(
        [
            'settings' => 'breadcrumb_bg_opacity',
            'label'    => __('Breadcrumb BG Opacity', 'atroly'),
            'section'  => 'header_breadcrumb_section',
            'default'  => 0.8,
            'choices'  => [
                'min'  => 0,
                'max'  => 1,
                'step' => 0.1,
            ],
        ]
    );

    new \Kirki\Field\Dimensions(
        [
            'settings' => 'breadcrumb_padding',
            'label' => __('Padding', 'atroly'),
            'section' => 'header_breadcrumb_section',
            'responsive' => true,
            'default' => [
                'desktop' => [
                    'padding-top' => '165px',
                    'padding-bottom' => '160px',
                ],
                'tablet' => [
                    'padding-top' => '60px',
                    'padding-bottom' => '60px',
                ],
                'mobile' => [
                    'padding-top' => '40px',
                    'padding-bottom' => '40px',
                ],
            ],
            'output' => [
                [
                    'element' => '.breadcrumb',
                    'media_query' => [
                        'desktop' => '@media (min-width: 1024px)',
                        'tablet' => '@media (min-width: 768px) and (max-width: 1023px)',
                        'mobile' => '@media (max-width: 767px)',
                    ],
                ],
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings' => 'breadcrumb_typography',
            'label' => esc_html__('Typography Control', 'atroly'),
            'description' => esc_html__('The full set of options.', 'atroly'),
            'section' => 'header_breadcrumb_section',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => '.tpbreadcrumb-title',
                ],
            ],
        ]
    );


}
header_breadcrumb_section();

// header_logo_section
function full_site_typography()
{
    // header_logo_section section 
    new \Kirki\Section(
        'full_site_typography',
        [
            'title' => esc_html__('Typography', 'atroly'),
            'description' => esc_html__('Typography Settings.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 190,
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings' => 'atroly_typo_body',
            'label' => esc_html__('Typography Body Text', 'atroly'),
            'description' => esc_html__('Body Typography Control.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => 'body',
                ],
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings' => 'atroly_typo_h1',
            'label' => esc_html__('Typography Heading 1 Font', 'atroly'),
            'description' => esc_html__('H1 Typography Control.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => 'h1',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings' => 'atroly_typo_h2',
            'label' => esc_html__('Typography Heading 2 Font', 'atroly'),
            'description' => esc_html__('H2 Typography Control.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => 'h2',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings' => 'atroly_typo_h3',
            'label' => esc_html__('Typography Heading 3 Font', 'atroly'),
            'description' => esc_html__('H3 Typography Control.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => 'h3',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings' => 'atroly_typo_h4',
            'label' => esc_html__('Typography Heading 4 Font', 'atroly'),
            'description' => esc_html__('H4 Typography Control.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => 'h4',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings' => 'atroly_typo_h5',
            'label' => esc_html__('Typography Heading 5 Font', 'atroly'),
            'description' => esc_html__('H5 Typography Control.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => 'h5',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings' => 'atroly_typo_h6',
            'label' => esc_html__('Typography Heading 6 Font', 'atroly'),
            'description' => esc_html__('H6 Typography Control.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => 'h6',
                ],
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings' => 'full_site_typography_settings',
            'label' => esc_html__('Typography Control', 'atroly'),
            'description' => esc_html__('The full set of options.', 'atroly'),
            'section' => 'full_site_typography',
            'priority' => 10,
            'transport' => 'auto',
            'default' => [
                'font-family' => '',
                'variant' => '',
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'text-align' => '',
            ],
            'output' => [
                [
                    'element' => '.tpbreadcrumb-title',
                ],
            ],
        ]
    );
}
full_site_typography();

// header_logo_section
function footer_layout_section()
{
    // header_logo_section section 
    new \Kirki\Section(
        'footer_layout_section',
        [
            'title' => esc_html__('Footer', 'atroly'),
            'description' => esc_html__('Footer Settings.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 190,
        ]
    );
    // footer_top_widget_number section 
    new \Kirki\Field\Select(
        [
            'settings' => 'footer_top_widget_number',
            'label' => esc_html__('Footer Top Widget Number', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => '3',
            'placeholder' => esc_html__('Choose an option', 'atroly'),
            'choices' => [
                '1' => esc_html__('1', 'atroly'),
                '2' => esc_html__('2', 'atroly'),
                '3' => esc_html__('3', 'atroly'),
            ],
        ]
    );
    // footer_widget_number section 
    new \Kirki\Field\Select(
        [
            'settings' => 'footer_widget_number',
            'label' => esc_html__('Footer Widget Number', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => '4',
            'placeholder' => esc_html__('Choose an option', 'atroly'),
            'choices' => [
                '1' => esc_html__('1', 'atroly'),
                '2' => esc_html__('2', 'atroly'),
                '3' => esc_html__('3', 'atroly'),
                '4' => esc_html__('4', 'atroly'),
            ],
        ]
    );

    new \Kirki\Field\Radio_Image(
        [
            'settings' => 'footer_layout',
            'label' => esc_html__('Footer Layout Control', 'atroly'),
            'section' => 'footer_layout_section',
            'priority' => 10,
            'choices' => [
                'footer_1' => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
                'footer_2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
                'footer_3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
                'footer_4' => get_template_directory_uri() . '/inc/img/footer/footer-4.png'
            ],
            'default' => 'footer_1',
        ]
    );

    // footer_layout_section section 
    new \Kirki\Field\Image(
        [
            'settings' => 'footer_bg_image',
            'label' => esc_html__('Footer BG Image', 'atroly'),
            'description' => esc_html__('Footer Image add/remove', 'atroly'),
            'section' => 'footer_layout_section',
        ]
    );

    // footer_layout_section section 

    new \Kirki\Field\Color(
        [
            'settings' => 'footer_bg_color',
            'label' => __('Footer BG Color', 'atroly'),
            'description' => esc_html__('You can change footer bg color from here.', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => '#1D1E20',
        ]
    );
    
    new \Kirki\Field\Slider(
        [
            'settings' => 'footer_bg_opacity',
            'label'    => __('Footer BG Opacity', 'atroly'),
            'section'  => 'footer_layout_section',
            'default'  => 1,
            'choices'  => [
                'min'  => 0.1,
                'max'  => 1,
                'step' => 0.1,
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'footer_layout_2_switch',
            'label' => esc_html__('Footer Style 2 Switch', 'atroly'),
            'description' => esc_html__('Footer Style 2 On/Off', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'footer_layout_3_switch',
            'label' => esc_html__('Footer Style 3 Switch', 'atroly'),
            'description' => esc_html__('Footer Style 3 On/Off', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'footer_layout_4_switch',
            'label' => esc_html__('Footer Style 4 Switch', 'atroly'),
            'description' => esc_html__('Footer Style 4 On/Off', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => 'off',
            'choices' => [
                'on' => esc_html__('Enable', 'atroly'),
                'off' => esc_html__('Disable', 'atroly'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'footer_copyright_switch',
            'label' => esc_html__('Footer Copyright On/Off', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => true,
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label' => esc_html__('Footer Copyright', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => esc_html__('Copyright &copy; 2025 Atroly. All Rights Reserved', 'atroly'),
            'priority' => 10,
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'footer_social_switch',
            'label' => esc_html__('Footer Social On / Off', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => false,
            'priority' => 10,
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'footer_bottom_copyright_area_switch',
            'label' => esc_html__('Footer Bottom  Copyright Area On/Off', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => true,
            'priority' => 10,
        ]
    );
    new \Kirki\Field\textarea(
        [
            'settings' => 'footer_bottom_menu',
            'label' => esc_html__('Footer Bottom Menu', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => esc_html__('Footer Bottom menu', 'atroly'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'footer_cta_switch',
            'label' => esc_html__('Footer Cta On / Off', 'atroly'),
            'section' => 'footer_layout_section',
            'default' => false,
            'priority' => 10,
        ]
    );


}
footer_layout_section();

// blog_section
function blog_section()
{
    // blog_section section 
    new \Kirki\Section(
        'blog_section',
        [
            'title' => esc_html__('Blog Section', 'atroly'),
            'description' => esc_html__('Blog Section Settings.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 150,
        ]
    );


    // blog_section BTN 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'atroly_blog_cat',
            'label' => esc_html__('Blog Category Meta On/Off', 'atroly'),
            'section' => 'blog_section',
            'default' => false,
            'priority' => 10,
        ]
    );

    // blog_section Author Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'atroly_blog_author',
            'label' => esc_html__('Blog Author Meta On/Off', 'atroly'),
            'section' => 'blog_section',
            'default' => true,
            'priority' => 10,
        ]
    );
    // blog_section Date Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'atroly_blog_date',
            'label' => esc_html__('Blog Date Meta On/Off', 'atroly'),
            'section' => 'blog_section',
            'default' => true,
            'priority' => 10,
        ]
    );

    // blog_section Comments Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'atroly_blog_comments',
            'label' => esc_html__('Blog Comments Meta On/Off', 'atroly'),
            'section' => 'blog_section',
            'default' => true,
            'priority' => 10,
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'atroly_blog_btn_switch',
            'label' => esc_html__('Blog BTN On/Off', 'atroly'),
            'section' => 'blog_section',
            'default' => true,
            'priority' => 10,
        ]
    );
    // blog_section Blog BTN text 
    new \Kirki\Field\Text(
        [
            'settings' => 'atroly_blog_btn',
            'label' => esc_html__('Blog Button Text', 'atroly'),
            'section' => 'blog_section',
            'default' => "Read More",
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'atroly_singleblog_social',
            'label' => esc_html__('Single Blog Social Share', 'atroly'),
            'section' => 'blog_section',
            'default' => false,
            'priority' => 10,
        ]
    );

}
blog_section();


// 404 section
function error_404_section()
{
    // 404_section section 
    new \Kirki\Section(
        'error_404_section',
        [
            'title' => esc_html__('404 Page', 'atroly'),
            'description' => esc_html__('404 Page Settings.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 150,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings' => 'atroly_404_image',
            'label' => esc_html__('404 Image', 'atroly'),
            'description' => esc_html__('404 Image Here', 'atroly'),
            'section' => 'error_404_section',
            'default' => get_template_directory_uri() . '/assets/images/common/404-portal.svg',
        ]
    );

    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'atroly_error_404',
            'label' => esc_html__('Not Found 404', 'atroly'),
            'section' => 'error_404_section',
            'default' => "404",
            'priority' => 10,
        ]
    );
    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'atroly_error_text',
            'label' => esc_html__('Not Found 404', 'atroly'),
            'section' => 'error_404_section',
            'default' => "Oops! The page you are looking for does not exist. It might have been moved or deleted.",
            'priority' => 10,
        ]
    );




    // 404_section description
    new \Kirki\Field\Text(
        [
            'settings' => 'atroly_error_link_text',
            'label' => esc_html__('Error Link Text', 'atroly'),
            'section' => 'error_404_section',
            'default' => "Back To Home",
            'priority' => 10,
        ]
    );


}
error_404_section();

// theme color section
function theme_color_section()
{
    new \Kirki\Section(
        'theme_color_section',
        [
            'title' => esc_html__('Theme Color', 'atroly'),
            'description' => esc_html__('Atroly theme color Settings.', 'atroly'),
            'panel' => 'panel_id',
            'priority' => 150,
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings' => 'atroly_color_1',
            'label' => __('Theme Color 1', 'atroly'),
            'description' => esc_html__('this is theme color 1 control.', 'atroly'),
            'section' => 'theme_color_section',
            'default' => '#B98844',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings' => 'atroly_color_2',
            'label' => __('Theme Color 2', 'atroly'),
            'description' => esc_html__('this is theme color 2 control.', 'atroly'),
            'section' => 'theme_color_section',
            'default' => '##003E42',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings' => 'atroly_gra_color_1',
            'label' => __('Gradient Color 1', 'atroly'),
            'description' => esc_html__('this is theme gradient 1 color control.', 'atroly'),
            'section' => 'theme_color_section',
            'default' => '#004D6E',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings' => 'atroly_gra_color_2',
            'label' => __('Gradient Color 2', 'atroly'),
            'description' => esc_html__('this is theme gradient 2 color control.', 'atroly'),
            'section' => 'theme_color_section',
            'default' => '#00ACCC',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings' => 'atroly_body',
            'label' => __('Body Text Color', 'atroly'),
            'description' => esc_html__('this is theme body text color control.', 'atroly'),
            'section' => 'theme_color_section',
            'default' => '#333F4D',
        ]
    );
}
theme_color_section();