<?php

// Creates the menus
function gymfitness_menu() {
    // Wordpress Function
    register_nav_menus( array(
        'main-menu' => 'Main Menu'
    ));
}

// Hook
add_action('init', 'gymfitness_menu');

?>