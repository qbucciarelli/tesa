<?php

/**
 * The template for displaying the archive loop.
 */




if (is_home() || is_front_page()) {
	global $query_string;
	parse_str($query_string, $args);
	$args['posts_per_page'] = 13;
	query_posts($args);
}

if (have_posts()) :
?>
	<div class="articles">
		<?php
		while (have_posts()) :
			the_post();

			/**
			 * Include the Post-Format-specific template for the content.
			 * If you want to overload this in a child theme then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part('content', 'index'); // Post format: content-index.php
		endwhile;
		?>
	</div>
<?php
endif;

wp_reset_postdata();

?>
<div class="pagination-bar">
	<?php the_posts_pagination(); ?>
</div>
<?php
