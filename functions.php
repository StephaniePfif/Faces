<?php

// Ajouter des images à la une ("thumbnail")
add_theme_support( 'post-thumbnails' );

function register_my_menus() { 
  register_nav_menus (
    array(
    'primary-nav' => __( 'Primary Menu', 'THEMENAME' ),
    'secondary-nav' => __( 'Secondary Menu', 'THEMENAME' ),
    ) 
  );
}

add_action( 'init', 'register_my_menus' );

// Utiliser un menu avec Bootstrap -- https://github.com/twittem/wp-bootstrap-navwalker
require_once('wp_bootstrap_navwalker.php');