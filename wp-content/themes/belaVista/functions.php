<?php
if (function_exists ( 'register_sidebar' ))
	register_sidebar ( array (
			'before_widget' => '<div class="widgets">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
			'before_link' => '<a>',
			'after_link' => '</a>' 
	) );
?>

<?php
add_theme_support ( 'post-thumbnails' );
?>
