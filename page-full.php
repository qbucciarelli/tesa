<?php

/**
 * Template Name: Page (Full width)
 * Description: Page template full width.
 *
 */

get_header();

the_post();
$image = get_field('image')
?>

<div class="section section-jumbotron" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12  col-md-8 offset-md-2">
				<div class="jumbotron">
					<div class="jumbotron-title text-center"><?php the_field('title'); ?></div>
					<div class="jumbotron-text text-left text-md-center"><?php the_field('text'); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="date-publish"><?php echo __('Fecha de publicación: ', 'tesa-theme') ?><?php the_date() ?></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				the_content();

				wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'tesa-theme'),
					'after'  => '</div>',
				));
				edit_post_link(__('Edit', 'tesa-theme'), '<span class="edit-link">', '</span>');
				?>
			</div><!-- /#post-<?php the_ID(); ?> -->
		</div>
	</div>
</div>
<?php
get_footer();
