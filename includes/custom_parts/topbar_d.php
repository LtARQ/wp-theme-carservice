<?php
/*
* Topbar Dynamic input panel for Admin 
* @includes customizer -> functions.php
* @package Carserv
*/
// Topbar Section in admin customization sidebar

$arg->add_section('topbar', array(
    'title' => 'TopBar',
    'description' => 'Here you can change the Content of the Topbar.',
    'priority' => 107,
));
// Address
$arg->add_setting('topbar_address', array(
    'default' => '123 Street, New York, USA',
    'type' => 'theme_mod',
));
$arg->add_control('topbar_address', array(
    'label' => 'Address',
    'section' => 'topbar',
    'type' => 'text',
    'priority' => 3,
));
// Days and Time
$arg->add_setting('topbar_time', array(
    'default' => 'Mon - Fri : 09.00 AM - 09.00 PM',
    'type' => 'theme_mod',
));
$arg->add_control('topbar_time', array(
    'label' => 'Time',
    'section' => 'topbar',
    'type' => 'text',
    'priority' => 3,
));
// Phone Number
$arg->add_setting('topbar_phone', array(
    'default' => '+012 345 6789',
    'type' => 'theme_mod',
));
$arg->add_control('topbar_phone', array(
    'label' => 'Phone Number',
    'section' => 'topbar',
    'type' => 'text',
    'priority' => 3,
));