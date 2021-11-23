<?php

/**
 * Template Name: Blog Page (Blog Page)
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();
$image = get_field('image', 17)
?>

<div class="section section-jumbotron" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12  col-md-8 offset-md-2">
				<div class="jumbotron">
					<h1 class="jumbotron-title text-left text-md-center" data-aos="fade-up"><?php echo get_field('title', 17); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$page_id = get_option('page_for_posts');
?>
<section class="section-articles" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-articles-title d-flex justify-content-center">
					<h2 class="col-12 col-md-10 text-left text-md-center">
						<?php echo get_field('blog-title', 17); ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php
		get_template_part('archive', 'loop');
		?>
	</div><!-- /.container -->
</section>
<?php
get_footer();
