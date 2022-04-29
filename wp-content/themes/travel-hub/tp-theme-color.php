<?php

	$adventure_travelling_tp_color_option = get_theme_mod('adventure_travelling_tp_color_option');
	$adventure_travelling_tp_color_option_link = get_theme_mod('adventure_travelling_tp_color_option_link');

	$adventure_travelling_tp_theme_css = '';

	if($adventure_travelling_tp_color_option != false){
		$adventure_travelling_tp_theme_css .='.top-header, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .page-numbers, .prev.page-numbers, .next.page-numbers, .more-btn a, .blog-info, .read-more-btn a, .cat-inner-box a, .search-box i, #comments input[type="submit"], .wp-block-file .wp-block-file__button, .wp-block-button .wp-block-button__linkm, #footer button[type="submit"],#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover{';
			$adventure_travelling_tp_theme_css .='background-color: '.esc_attr($adventure_travelling_tp_color_option).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	if($adventure_travelling_tp_color_option != false){
		$adventure_travelling_tp_theme_css .='#travel-offer h6,a, .call i, .email i, .main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, p.infotext, a:hover{';
			$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_tp_color_option).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	if($adventure_travelling_tp_color_option != false){
		$adventure_travelling_tp_theme_css .='#travel-offer h2,#slider .inner_carousel h2,#static-blog h3, .search_inner form.search-form,.entry-content blockquote{';
			$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($adventure_travelling_tp_color_option).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	if($adventure_travelling_tp_color_option_link != false){
		$adventure_travelling_tp_theme_css .='a:hover,#theme-sidebar a:hover{';
			$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_tp_color_option_link).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	