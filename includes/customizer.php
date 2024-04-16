<?php
/*
* Customization of complete site includes here
*
* @package Carserv
*/

function carserv_customization($arg){

    // @include Topbar dynamic display
    require_once 'custom_parts/topbar_d.php';
    // @include About dynamic display
    require_once 'lib/about_d.php';
    // @include Services dynamic display
    require_once 'lib/services_d.php';
    // @include Footer dynamic display
    require_once 'lib/footer_d.php';
    // @include Calculation/ Progress bar
    require_once 'lib/calculation_d.php';
}

add_action('customize_register', 'carserv_customization');