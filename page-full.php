<?php

/**
 * Template Name: Page (Pillar page)
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
			<div class="col-12  col-md-8 offset-md-2" data-aos="fade-up">
				<div class="jumbotron">
					<h1 class="jumbotron-title text-center"><?php the_field('title'); ?></h1>
				</div>
				<div class="jumbotron-text text-left text-md-center"><?php the_field('text'); ?></div>
			</div>
		</div>
	</div>
</div>

<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	<div class="section">
		<div class="anchor-menu">
			<div class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
					+
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-toggle close" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=""></a>
					<ul class="anchor-menu-container">
						<?php
						// Check rows exists.
						if (have_rows('anchor-menu')) :

							// Loop through rows.
							while (have_rows('anchor-menu')) : the_row();
						?>

								<li class="anchor-menu-item">
									<a class="anchor-menu-link" href="#<?php the_sub_field('anchor-menu-id'); ?>"><?php the_sub_field('anchor-menu-text'); ?></a>
								</li>
						<?php
							// End loop.
							endwhile;

						// No value.
						else :
						// Do something...
						endif;
						?>
					</ul>
				</div>
			</div>
		</div>






		<div class="container">
			<div class="row">
				<div class="col-12 offset-md-1 col-md-10">

					<div class="date-publish"><?php echo __('Fecha de publicación: ', 'tesa-theme') ?><?php the_date() ?></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 offset-md-1 col-md-10">
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
</div>
<?php
get_footer();
