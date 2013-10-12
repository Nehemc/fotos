<?php
/**
 	* Global Options
 	*
 	* @package     Fotos Theme
 	* @subpackage  Functions
 	* @copyright   Copyright (c) 2013, Nick Haskins & CO
 	* @since       1.0
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class fotosGlobalOptions {

	function __construct(){

		$this->theme_options();
	}

	function theme_options(){

		$options = array();

		$options[] = array(
			'pos'            					=> 20,
			'key'								=> 'fotos_skins_setup',
		   	'name'           					=> __('Fotos - Skins','fotos'),
		   	'icon'           					=> 'icon-circle',
	        'type'      						=> 'multi',
	        'opts'          					=> array(
	        	array(
	        		'key' 						=> 'fotos_theme_skins',
	        		'type' 						=> 'template',
	        		'template'					=> 'coming soon!',
	        		'title' 					=> 'Available Skins',
		        ),
	        ),
	       	'help'         						=> 'Choose a skin for your site.'
	    );


	    $options[] = array(
			'pos'            					=> 21,
		   	'name'           					=> __('Fotos - Blog Options','fotos'),
		   	'icon'           					=> 'icon-circle',
			'type' 								=> 'multi',
			'opts' 								=> array(
				array(
					'title'   					=> __('Social Links Mode', 'fotos'),
				    'type'    					=> 'select',
				    'key'						=> 'ba_fotos_social_mode',
				    'default'					=> 'icon',
				    'opts'						=> array(
				    	'icon' 					=> array('name' => __('Icons','fotos')),
				    	'image' 				=> array('name' => __('Custom Image','fotos')),
				    	'plain' 				=> array('name' => __('Plain Button','fotos')),
				    ),
					'help' 						=> __('' , 'fotos'),
				),
				array(
					'title'   					=> __('Social Links Alignment', 'fotos'),
				    'type'    					=> 'select',
				    'key'						=> 'ba_fotos_social_align',
				    'opts'						=> array(
				    	'tal' 					=> array('name' => __('Align Left','fotos')),
				    	'center' 				=> array('name' => __('Centered','fotos')),
				    	'tar' 					=> array('name' => __('Align Right','fotos')),
				    ),
					'help' 						=> __('' , 'fotos'),
				),
				array(
					'title'						=> __('Custom Social Images', 'fotos'),
					'type'						=> 'multi',
					'key'						=> 'ba_fotos_custom_social',
					'opts'						=> array(
						array(
							'type' 				=> 'image_upload',
							'key'				=> 'ba_fotos_twitter_img',
							'title'				=> 'Custom Twitter Button'
						),
						array(
							'type' 				=> 'image_upload',
							'key'				=> 'ba_fotos_fb_img',
							'title'				=> 'Custom Facebook Button'
						),
						array(
							'type' 				=> 'image_upload',
							'key'				=> 'ba_fotos_pinterest_img',
							'title'				=> 'Custom Pinterest Button'
						),
					)

				),
				array(
					'title'						=> __('Separator Images (optional)', 'fotos'),
					'type'						=> 'image_upload',
					'key'						=> 'ba_fotos_social_separator',
				),
				array(
					'title'                   	=> __( 'Date Format', 'fotos' ),
					'type'	                  	=> 'select',
					'key' 						=> 'ba_fotos_post_date_style',
					'default'					=> 'fotos-date-default',
					'opts'						=> array(
						'fotos-date-default' 	=> array('name' => __( 'Full Date', 'fotos' ) ),
						'fotos-date-block'		=> array('name' => __( 'Block Style Date', 'fotos' ) ),
						'fotos-date-stacked'	=> array('name' => __( 'Stacked', 'fotos' ) ),
						'fotos-date-minimal'	=> array('name' => __( 'Minimal Style Date', 'fotos' ) ),
					),
				)
			),
			'help' => ''
		);


		$options[] = array(
		   	'name'           					=> __('Fotos - Nav Options','fotos'),
		   	'icon'           					=> 'icon-circle',
			'type' 								=> 'multi',
	        'pos'   							=> 22,
	        'opts'  							=> array(
	        	array(
	            	'title' 					=> __('Navigation Options', 'fotos'),
	            	'key'						=> 'ba_fotos_nav_colors',
	            	'type'						=> 'multi',
	            	'opts'						=> array(
	            		array(
	            			'key'				=> 'ba_fotos_nav_font_color',
	            			'title'				=> __('Font Color', 'fotos'),
	            			'type'				=> 'color',
	            			'default'			=> '#F8F8F8',
	            			'help'				=> __('Set a font color.', 'fotos')
	            		),
	            		array(
	            			'key'				=> 'ba_fotos_nav_base_color',
	            			'title'				=> __('Base Color', 'fotos'),
	            			'type'				=> 'color',
	            			'default'			=> '#333',
	            			'help'				=> __('Set a base color.', 'fotos')
	            		),
	            	),
	            ),
	        	array(
	            	'title' 					=> __('Nav Font Options', 'fotos'),
	            	'key'						=> 'ba_fotos_nav_options',
	            	'type'						=> 'multi',
	            	'opts'						=> array(
	            		array(
	            			'key'				=> 'ba_fotos_nav_font_size',
	            			'title'				=> __('Font Size', 'fotos'),
	            			'type'				=> 'text',
	            			'help'				=> __('Set a font size.', 'fotos')
	            		),
	            		array(
	            			'key'				=> 'ba_fotos_nav_font_family',
	            			'title'				=> __('Font Family', 'fotos'),
	            			'default'			=> 'open_sans',
	            			'type'				=> 'type',
	            			'help'				=> __('Set a base color.', 'fotos')
	            		),
	            	),
	            ),
	        )
		);

		$options[] = array(
		   	'name'           					=> __('Fotos - Post Top','fotos'),
		   	'icon'           					=> 'icon-circle',
			'type' 								=> 'multi',
	        'pos'   							=> 23,
	        'opts'  							=> array(
				array(
					'title'                   	=> __( 'Post Header Layout', 'fotos' ),
					'type'	                  	=> 'select',
					'key' 						=> 'ba_fotos_post_header_layout',
					'default'					=> 'title-left',
					'opts'						=> array(
						'title-left' 			=> array('name' => __( 'Title Left - Date Right', 'fotos' ) ),
						'title-right'			=> array('name' => __( 'Date Left - Title Right', 'fotos' ) ),
						'title-center'			=> array('name' => __( 'Title & Date Centered', 'fotos' ) ),
					),
				),
				array(
					'key'			  => 'ba_fotos_post_title_col',
					'type' 			  => 'count_select',
					'count_start'	  => 1,
					'count_number'	  => 11,
					'default'		  => 9,
					'label' 	      => __( 'Title Column Span', 'fotos' ),
					'help'			  => __('How wide the title column shoudl be based on a 12-column grid.', 'fotos')
				),
				array(
					'key'			  => 'ba_fotos_post_date_col',
					'type' 			  => 'count_select',
					'count_start'	  => 1,
					'count_number'	  => 11,
					'default'		  => 3,
					'label' 	      => __( 'Date Column Span', 'fotos' ),
					'help'			  => __('How wide the date column should be based on a 12-column grid.', 'fotos')
				),
	        )
		);
		pl_add_theme_tab($options);
	}
}
new fotosGlobalOptions;
