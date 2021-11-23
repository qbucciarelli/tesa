<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<span>
		&lt; <a class="back-to-blog" href="<?php echo get_post_type_archive_link('post'); ?>"><?php echo esc_html__('Volver al blog', 'tesa-theme') ?></a>
	</span>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<?php
		if (has_post_thumbnail()) :
			echo '<div class="post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>';
		endif;
		?>
		<div class="date-publish"><?php echo __('Fecha de publicación: ', 'tesa-theme') ?><?php the_date() ?></div>
		<?php

		the_content();

		wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'tesa-theme') . '</span>', 'after' => '</div>'));
		?>
	</div><!-- /.entry-content -->
</article><!-- /#post-<?php the_ID(); ?> -->