<?php
echo 'here';
function example_scripts() {
    error_log('i am here');
    echo 'inside function';
    // Theme custom styles.
    // $path = '/build/index.css'; // Make sure this is the correct path.
    // $asset_file = get_template_directory_uri() . $path; // Build the full URL for the CSS file.
    
    // // Enqueue the custom style
    // wp_register_style( 'example-custom-style', $asset_file, '', '1.0.0' );
    // wp_enqueue_style( 'example-custom-style' );
}

add_action( 'wp_enqueue_scripts', 'example_scripts' );
