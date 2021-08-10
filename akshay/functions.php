<?php

function followakshay_menus(){
$locations = array(

    'primary'=>"Desktop Primary Left Sidebar",
    'footer'=>"Footer Menu Items",
    'secondary' => "mobile sidebar menu"

);

register_nav_menus($locations);

}

add_action('init','followakshay_menus');




function followakshay_theme_support(){


    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','followakshay_theme_support');
function followakshay_register_styles(){
$version = wp_get_theme()->get('version');
wp_enqueue_style('followakshay-bootstrap',get_template_directory_uri() . "/style.css",array('followakshay-style'),$version,'all');
wp_enqueue_style('followakshay-style', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
wp_enqueue_style('followakshay-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');

}
add_action('wp_enqueue_scripts','followakshay_register_styles');



function followakshay_register_scripts(){
    $version = wp_get_theme()->get('version');
    wp_enqueue_script('followakshay-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);
    wp_enqueue_script('followakshay-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'1.16.0',true);
    wp_enqueue_script('followakshay-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'4.4.1',true);
    wp_enqueue_script('followakshay-javascript',get_template_directory_uri()."assets/js/main.js",array(),'3.4.1',true);
    
    }

    add_action('wp_enqueue_scripts','followakshay_register_scripts');

function followakshay_widget_areas(){

    register_sidebar(

        array(

            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'',
            'after_widget'=>'',
            'name'=>'Sidebar Area',
            'id'=>'sidebar-1',
            'description'=>'Sidebar Widget Area'

        )
    
        );

        register_sidebar(

            array(
    
                'before_title'=>'',
                'after_title'=>'',
                'before_widget'=>'',
                'after_widget'=>'',
                'name'=>'Footer Area',
                'id'=>'footer-1',
                'description'=>'Footer Widget Area'
    
            )
        
            );




}

add_action('widgets_init','followakshay_widget_areas');