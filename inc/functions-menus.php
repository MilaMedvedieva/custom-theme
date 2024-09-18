<?php
add_action('after_setup_theme', 'theme_register_nav_menu');
add_filter('wp_nav_menu_args', 'theme_wp_nav_menu_args');

function theme_register_nav_menu()
{
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu( 'footer-menu', 'Footer Menu' );
}

# Header Menu
function header_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'menu' => '',
            'container' => '',
            'container_class' => 'menu-{menu slug}-container',
            'container_id' => '',
            'menu_class' => 'menu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        )
    );
}
function footer_nav(){
    wp_nav_menu(
        array(
            'theme_location'  => 'footer-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
}


function theme_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}
