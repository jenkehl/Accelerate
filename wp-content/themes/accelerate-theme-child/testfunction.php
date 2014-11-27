function create_custom_post_types() {
   register_post_type( 'case_studies', 'about'
       array(
           'labels' => array(
               'name' => __( 'Case Studies' ),
               'singular_name' => __( 'Case Study' )
           ),
           'public' => true,
           'has_archive' => true,
           'rewrite' => array( 'slug' => 'case-studies' ),
       )
   );
}
add_action( 'init', 'create_custom_post_types' );
