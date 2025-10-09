<?php

// tp metabox 
add_filter( 'tp_meta_boxes', 'themepure_metabox' );

function themepure_metabox( $meta_boxes ) {
	
	$prefix     = 'atroly';
	
	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_page_meta_box',
		'title'    => esc_html__( 'TP Page Info', 'atroly' ),
		'post_type'=> 'page',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
			array(
				'label'    => esc_html__( 'Show Breadcrumb?', 'atroly' ), 
				'id'      => "{$prefix}_check_bredcrumb",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			),		
			array(
				'label'    => esc_html__( 'Show Breadcrumb Image?', 'atroly' ),
				'id'      => "{$prefix}_check_bredcrumb_img",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			), 

            array(
				'label'    => esc_html__( 'Enable Secondary Logo', 'atroly' ),
				'id'      => "{$prefix}_en_secondary_logo",
				'type'    => 'switch',
				'default' => 'off',
				'conditional' => array()
			), 

            array(
				
				'label'    => esc_html__( 'Breadcrumb Background', 'atroly' ),
				'id'      => "{$prefix}_breadcrumb_bg",
				'type'    => 'image',
				'default' => '',
				'conditional' => array(
					"{$prefix}_check_bredcrumb_img", "==", "on"
				)
			),

            array(
				
				'label'    => esc_html__( 'Footer BG', 'atroly' ),
				'id'      => "{$prefix}_footer_bg_image",
				'type'    => 'image',
				'default' => '',
				'conditional' => array()
			),


			array(
				'label' => 'Footer Background Color',
				'id'   	=> "{$prefix}_footer_bg_color",
				'type' 	=> 'colorpicker',
				'placeholder' => '',
				'default' 	  => '#1C1E21',
				'conditional' => array()
			),
			
			array(
				'label' => 'Footer Background Opacity',
				'id'   	=> "{$prefix}_footer_bg_opacity",
				'type' 	=> 'text',
				'default' 	  => '',
				'conditional' => array()
			),

            // multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__( 'Header', 'atroly' ),
				'id'      => "{$prefix}_header_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__( 'Default', 'atroly' ),
					'custom' => esc_html__( 'Custom', 'atroly' ),
				),
				'default' => 'default',
				'conditional' => array()
			), 

            // select field dropdown 
			array(
				
				'label'           => esc_html__('Select Header Style', 'atroly'),
				'id'              => "{$prefix}_header_style",
				'type'            => 'select',
				'options'         => array(
					'header_1' => esc_html__( 'Header 1', 'atroly' ),
					'header_2' => esc_html__( 'Header 2', 'atroly' ),
					'header_3' => esc_html__( 'Header 3', 'atroly' ),
					'header_4' => esc_html__( 'Header 4', 'atroly' ),
				),
				'placeholder'     => esc_html__( 'Select a header', 'atroly' ),
				'conditional' => array(
					"{$prefix}_header_tabs", "==", "custom"
				),
				'default' => 'header_1',
				'parent' => "{$prefix}_header_tabs",
				'context'  => 'normal' 
			),

            // select field dropdown
			array(
				
				'label'           => esc_html__('Select Header Template', 'atroly'),
				'id'              => "{$prefix}_header_templates",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__( 'Select a template', 'atroly' ),
                'post_type'       => 'atroly-header',
				'conditional' => array(
					"{$prefix}_header_tabs", "==", "elementor"
				),
				'default' => '',
			),


            // multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__( 'Footer', 'atroly' ),
				'id'      => "{$prefix}_footer_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__( 'Default', 'atroly' ),
					'custom' => esc_html__( 'Custom', 'atroly' ),
				),
				'default' => 'default',
				'conditional' => array()
			), 

            // select field dropdown
			array(
				
				'label'           => esc_html__('Select Footer Style', 'atroly'),
				'id'              => "{$prefix}_footer_style",
				'type'            => 'select',
				'options'         => array(
					'footer_1' => esc_html__( 'Footer 1', 'atroly' ),
					'footer_2' => esc_html__( 'Footer 2', 'atroly' ),
					'footer_3' => esc_html__( 'Footer 3', 'atroly' ),
					'footer_4' => esc_html__( 'Footer 4', 'atroly' ),
				),
				'placeholder'     => esc_html__( 'Select a footer', 'atroly' ),
				'conditional' => array(
					"{$prefix}_footer_tabs", "==", "custom"
				),
				'default' => 'footer_1',
				'parent' => "{$prefix}_footer_tabs"
			),

            // select field dropdown
			array(
				
				'label'           => esc_html__('Select Footer Template', 'atroly'),
				'id'              => "{$prefix}_footer_template",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__( 'Select a template', 'atroly' ),
                'post_type'       => 'atroly-footer',
				'conditional' => array(
					"{$prefix}_footer_tabs", "==", "elementor"
				),
				'default' => '',
			),
		),
	);

    $meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_gallery_meta',
		'title'    => esc_html__( 'TP Gallery Post', 'atroly' ),
		'post_type'=> 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
            array(
				'label'    => esc_html__( 'Gallery', 'atroly' ),
				'id'      => "{$prefix}_post_gallery",
				'type'    => 'gallery',
				'default' => '',
				'conditional' => array(),
			),
		),
		'post_format' => 'gallery'
	);    

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_video_meta',
		'title'    => esc_html__( 'TP Video Post', 'atroly' ),
		'post_type'=> 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
			array(
				'label'    => esc_html__( 'Video', 'atroly' ),
				'id'      => "{$prefix}_post_video",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__( 'Place your video url.', 'atroly' ),
			),
		),
		'post_format' => 'video'
	);	

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_audio_meta',
		'title'    => esc_html__( 'TP Audio Post', 'atroly' ),
		'post_type'=> 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
			array(
				'label'    => esc_html__( 'Audio', 'atroly' ),
				'id'      => "{$prefix}_post_audio",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__( 'Place your audio url..', 'atroly' ),
			),
		),
		'post_format' => 'audio'
	);
	return $meta_boxes;
}