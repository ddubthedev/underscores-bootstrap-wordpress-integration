function theme_scripts() {
	wp_register_style( 'underscores', get_template_directory_uri() . '/css/underscores.min.css', array(), '3.0.1', 'all' );

	wp_enqueue_style( 'underscores' );

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.0.1', 'all' );

	wp_enqueue_style( 'bootstrap' );

	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20140423', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
