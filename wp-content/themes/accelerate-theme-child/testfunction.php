function create_custom_post_types() {
   register_post_type( 'about',
       array(
           'labels' => array(
               'name' => __( 'About' ),
               'singular_name' => __( 'About' )
           ),
           'public' => true,
           'has_archive' => true,
           'rewrite' => array( 'slug' => 'about' ),
       )
   );
}
add_action( 'init', 'create_custom_post_types' );
