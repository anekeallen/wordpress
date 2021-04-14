<?php  


function wpcurso_customizer( $wp_customize ){

	// Copyright

	$wp_customize->add_section(
		'sec_copyright', array(
			'title' => __('Copyright', 'wpcurso'),
			'description' => __('Copyright Section', 'wpcurso')

		)

	);

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __('Copyright X - All rights reserved','wpcurso'),
			'sanitize_callback' => 'wp_filter_nohtml_kses' 


		)

	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __('Copyright','wpcurso'),
			'description' => __('Choose whether to show the Services section or not','wpcurso'),
			'section' => 'sec_copyright',
			'type' => 'text'


		)

	);

	//Map

	$wp_customize->add_section(
		'sec_map', array(
			'title' => __('Map', 'wpcurso'),
			'description' => __('Map Section', 'wpcurso')

		)

	);

	//API Key

	$wp_customize->add_setting(
		'set_map_apikey', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses' 


		)

	);

	$wp_customize->add_control(
		'set_map_apikey', array(
			'label' => __('API Key', 'wpcurso'),
			'description' => sprintf(
				__('Get your key <a target="_black" href="%s">Here</a>', 'wpcurso'),
				'https://console.cloud.google.com/flows/enableapi?apiid=maps_backend'

			) ,
			'section' => 'sec_map',
			'type' => 'text'


		)

	);

		//Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea' 


		)

	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => __('Type your address here', 'wpcurso'),
			'description' => __('No special characters allowed', 'wpcurso'),
			'section' => 'sec_map',
			'type' => 'textarea'


		)

	);

	//Slider

	$wp_customize->add_section(
		'sec_slider', array(
			'title' => __('Slider', 'wpcurso'),
			'description' => 'Slider Section'

		)

	);

	//Design 

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'wpcurso_sanitize_select' 


		)

	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __('Chose your design type here', 'wpcurso'),
			'description' => __('Chose your design type','wpcurso'),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => 'Design Type 1',
				'2' => 'Design Type 2',
				'3' => 'Design Type 3',
				'4' => 'Design Type 4'

			)


		)

	);

		//Limit

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint' 


		)

	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __('Number of posts to display', 'wpcurso'),
			'description' => __('Chose the number of posts to be displayed', 'wpcurso'),
			'section' => 'sec_slider',
			'type' => 'number',

		)

	);

	// Front Page Loops

	$wp_customize->add_section( 
		'sec_loops', array(
			'title' => __('Front Page Loops', 'wpcurso'),
			'description' => __('Controls the loops in front page', 'wpcurso')
		)
	);

	$wp_customize->add_setting(
		'set_loop1_categories', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop1_categories', array(
			'label' => 'Categories to include in first loop',
			'description' => 'Choose the categories to include in the first loop. Use commas to separate the categories. For example 4,5,8,20',
			'section' => 'sec_loops',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'set_loop2_posts_per_page', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_loop2_posts_per_page', array(
			'label' => 'Number of posts to display in second loop',
			'description' => 'Choose the number of posts to display in second loop',
			'section' => 'sec_loops',
			'type' => 'number'
		)
	);


	$wp_customize->add_setting(
		'set_loop2_categories_to_exclude', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop2_categories_to_exclude', array(
			'label' => 'Categories to exclude in second loop',
			'description' => 'Choose the categories to exclude in the second loop. Use commas to separate the categories. For example 4,5,8,20',
			'section' => 'sec_loops',
			'type' => 'text'
		)
	);


	$wp_customize->add_setting(
		'set_loop2_categories_to_include', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop2_categories_to_include', array(
			'label' => 'Categories to include in second loop',
			'description' => 'Choose the categories to include in the second loop. Use commas to separate the categories. For example 4,5,8,20',
			'section' => 'sec_loops',
			'type' => 'text'
		)
	);


}

add_action('customize_register', 'wpcurso_customizer');

function wpcurso_sanitize_select( $input, $setting ){

            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
	$input = sanitize_key($input);

            //get the list of possible select options 
	$choices = $setting->manager->get_control( $setting->id )->choices;

            //return input if valid or return default option
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                

}