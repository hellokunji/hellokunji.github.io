<?php
    function km_some_script(){
        wp_enqueue_style('common-css', get_template_directory_uri(). '/public/css/common.css' ,array(), '1.0.0', 'all');
        wp_enqueue_style('blog-css', get_template_directory_uri(). '/public/css/blog.css' ,array(), '1.0.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'km_some_script');


    function km_theme_setup(){
        add_theme_support('menus');

        register_nav_menu('category', 'Blog Category');
    }

    add_action('init', 'km_theme_setup');

    add_theme_support( 'post-thumbnails' );
    add_theme_support('post-formats', array('aside', 'image', 'video'));


    ###sidebar function
    function km_widget_setup(){
        register_sidebar(
            array(
                'name'	=> 'Sidebar',
                'id'	=> 'sidebar-1',
                'class'	=> 'custom',
                'description' => 'Standard Sidebar',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h5 class="widget-title">',
                'after_title'   => '</h5>',
            )
        );
    }

    add_action('widgets_init','km_widget_setup');
?>
