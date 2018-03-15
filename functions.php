<?php

function sd_porfolio_files(){
	wp_enqueue_script('sd_portfolio_main_script',get_theme_file_uri('/js/functions.js'),NULL, '1.0', true);//name,filepath,dependancies,version,bottom of page
	wp_enqueue_style('sd_portfolio_google_font_style', '//fonts.googleapis.com/css?family=Alegreya Sans');
	wp_enqueue_style('sd_portfolio_font_style', '////cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('sd_portfolio_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','sd_porfolio_files');


