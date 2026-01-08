<?php
// Função para registrar os Scripts e o CSS
function sulivam_assets()
{
    wp_enqueue_style(
        "bootstrap-css",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",
        [],
        "5.3.3"
    );
    wp_enqueue_style(
        "sulivam-style",
        get_template_directory_uri() . "/style.css",
        ["bootstrap-css"],
        filemtime(get_template_directory() . "/style.css")
    );
    wp_enqueue_script(
        "bootstrap-js",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js",
        [],
        "5.3.3",
        true
    );
    if(is_page_template('page-home.php')) {
        wp_enqueue_script(
            "home-script",
            get_template_directory_uri() . "/js/home.js",
            ["bootstrap-js"],
            filemtime(get_template_directory() . "/js/home.js"),
            true
        );
    }
}
add_action("wp_enqueue_scripts", "sulivam_assets");

// Funções para Limpar o Header
remove_action("wp_head", "rsd_link");
remove_action("wp_head", "wlwmanifest_link");
remove_action("wp_head", "start_post_rel_link", 10, 0);
remove_action("wp_head", "adjacent_posts_rel_link_wp_head", 10, 0);
remove_action("wp_head", "feed_links_extra", 3);
remove_action("wp_head", "wp_generator");
remove_action("wp_head", "print_emoji_detection_script", 7);
remove_action("admin_print_scripts", "print_emoji_detection_script");
remove_action("wp_print_styles", "print_emoji_styles");
remove_action("admin_print_styles", "print_emoji_styles");

// Habilitar e Registrar Menu
add_theme_support("menus");
function register_menus()
{
    register_nav_menus([
        "header-menu" => __("Header Menu"),
        "footer-menu" => __("Footer Menu"),
    ]);
}
add_action("init", "register_menus");

// Habilitar suporte a thumbnail
add_theme_support('post-thumbnails', array('post'));

?>