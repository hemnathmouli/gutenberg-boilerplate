<?php
/**
 * Plugin Name: Sparq Blocks
 * Plugin URL: https://sparqdesigns.com
 * Author: Hemnath Mouli
 * Author URI: https://sparqdesigns.com
 * Description: React Gutenberg Blocks
 */

add_action( 'enqueue_block_editor_assets', 'load_snack_blocks' );

function load_snack_blocks() {
    wp_register_script( 
        'snack_blocks_bundle', 
        plugins_url( '/stage-blocks/dist/build.js', 'snack' ),  
        [ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor', 'wp-api' ],
        '2020'
    );

    wp_enqueue_script( 'snack_blocks_bundle' );
}
?>