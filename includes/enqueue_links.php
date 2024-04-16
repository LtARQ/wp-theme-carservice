<?php
// Register all stylesheets and javascritpts here
function carser_enqueue_script(){
    //Register Stylesheets
    wp_register_style('google-font','https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap',[],'','all');
    wp_register_style('font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',[],'','all');
    wp_register_style('icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',[],'','all');
    wp_register_style('stylesheet-animate', get_template_directory_uri() . '/lib/animate/animate.min.css',[],'','all');
    wp_register_style('stylesheet-owlcarosel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css',[],'','all');
    wp_register_style('stylesheet-tempusdomain', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',[],'','all');
    wp_register_style('stylesheet-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',[],'','all');
    wp_register_style('stylesheet-custom', get_template_directory_uri() . '/css/style.css',[],'','all');

    //Register Scripts
    wp_register_script('jquery','https://code.jquery.com/jquery-3.4.1.min.js',[],false,true);
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', ['jquery'],false,true);
    wp_register_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', [],false,true);
    wp_register_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', ['jquery'],false,true);
    wp_register_script('waypoint', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', ['jquery'],false,true);
    wp_register_script('counter', get_template_directory_uri() . '/lib/counterup/counterup.min.js', ['jquery'],false,true);
    wp_register_script('carousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', ['jquery'],false,true);
    wp_register_script('timez', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', ['jquery'],false,true);
    wp_register_script('tempusdomain', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', ['jquery'],false,true);
    wp_register_script('tempboot', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', ['jquery'],false,true);
    wp_register_script('customjs', get_template_directory_uri() . '/js/main.js', ['jquery'],false,true);

    // Enqueue Stylesheets
    wp_enqueue_style('google-font');
    wp_enqueue_style('font-awsome');
    wp_enqueue_style('icon');
    wp_enqueue_style('stylesheet-animate');
    wp_enqueue_style('stylesheet-owlcarosel');
    wp_enqueue_style('stylesheet-tempusdomain');
    wp_enqueue_style('stylesheet-bootstrap');
    wp_enqueue_style('stylesheet-custom');

    //Enqueue Sripts
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('wow');
    wp_enqueue_script('easing');
    wp_enqueue_script('waypoint');
    wp_enqueue_script('counter');
    wp_enqueue_script('carousel');
    wp_enqueue_script('timez');
    wp_enqueue_script('tempusdomain');
    wp_enqueue_script('tempboot');
    wp_enqueue_script('customjs');    
}   
// Hook for add these scrips and stylesheets in core files
add_action('wp_enqueue_scripts','carser_enqueue_script');