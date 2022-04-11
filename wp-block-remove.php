function wp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); 
    wp_dequeue_style( 'global-styles' ); 
} 
add_action( 'wp_enqueue_scripts', 'wp_remove_wp_block_library_css', 100 );
