<?php 	

function travel_hub_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'travel_hub_trip_offer_section' , array(
    	'title'      => __( 'Trip Offers Settings', 'travel-hub' ),
		'panel' => 'adventure_travelling_panel_id'
	) );

	$wp_customize->add_setting('travel_hub_offer_section_short_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('travel_hub_offer_section_short_title',array(
		'label'	=> __('Short Title','travel-hub'),
		'section'	=> 'travel_hub_trip_offer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('travel_hub_offer_section_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('travel_hub_offer_section_tittle',array(
		'label'	=> __('Section Title','travel-hub'),
		'section'	=> 'travel_hub_trip_offer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('travel_hub_offer_section_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('travel_hub_offer_section_text',array(
		'label'	=> __('Section Description','travel-hub'),
		'section'	=> 'travel_hub_trip_offer_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$offer_cat[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$offer_cat[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('travel_hub_offer_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'adventure_travelling_sanitize_choices',
	));
	$wp_customize->add_control('travel_hub_offer_section_category',array(
		'type'    => 'select',
		'choices' => $offer_cat,
		'label' => __('Select Category','travel-hub'),
		'section' => 'travel_hub_trip_offer_section',
	));

}
add_action( 'customize_register', 'travel_hub_customize_register' );