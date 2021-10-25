<?php

/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div class="card mb-4">
		<div class="card-body">
			<div class="card-image">
				<?php
				if (has_post_thumbnail()) :
					echo '<div class="post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>';
				endif;
				?>
			</div>
			<div class="card-text entry-content">
				<h2 class="card-title">
					<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'tesa-theme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				<?php
				if ('post' === get_post_type()) :
				?>
				<?php
				endif;
				?>
				<?php

				if (is_search()) :
					the_excerpt();
				else :
					the_content();
				endif;
				?>
				<a href="<?php echo get_the_permalink(); ?>" class="link-blog"><?php esc_html_e('Leer artículo', 'tesa-theme'); ?></a>
				<?php wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'tesa-theme') . '</span>', 'after' => '</div>')); ?>
			</div><!-- /.card-text -->
		</div><!-- /.card-body -->
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->