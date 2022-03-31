<?php
add_theme_support("title-tag");

function montheme_register_assets(){
    wp_register_style("coco","style.css");
    wp_enqueue_style("coco");
}
add_action('wp_head','montheme_register_assets',0);

?>