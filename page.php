<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header();
?>

<?php

// Start the Loop.
while ( have_posts() ) : the_post();
	the_content();
endwhile;
?>

<?php

get_footer();
