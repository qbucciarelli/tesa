<?php

/**
 * Template Name: Metodo (Metodo)
 * Description: Page template full width.
 *
 */

get_header();
?>


<?php
$image = get_field('image')
?>
<div class="section section-jumbotron" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12  col-md-8 offset-md-2">
				<div class="jumbotron">
					<div class="jumbotron-title v-centered text-left text-md-center"><?php the_field('title'); ?></div>
					<div class="jumbotron-text text-left text-md-center"><?php the_field('text'); ?></div>
					<a class="jumbotron-link modal-link text-left text-md-center modal-open"><?php the_field('button-video'); ?></a>
					<a class="jumbotron-down-link smooth-link" href="#section-controles"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-controles" id="section-controles">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h2 class="controles-title text-left"><?php the_field('controles-title'); ?></h2>
				<?php
				$controles_image = get_field('controles-image');
				if (!empty($controles_image)) : ?>
					<img src="<?php echo esc_url($controles_image['url']); ?>" alt="<?php echo esc_attr($controles_image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-12 col-md-6">
				<ul class="controles-list">
					<?php
					// Check rows exists.
					if (have_rows('controles-repeater')) :

						// Loop through rows.
						while (have_rows('controles-repeater')) : the_row();
					?>

							<li class="controles-list-item">
								<span class="controle-list-item-title"><?php the_sub_field('controles-repeater-title'); ?></span>
								<?php the_sub_field('controles-repeater-body'); ?>
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
</div>

<div class="section section-proceso">
	<div class="container">
		<div class="row">
			<div class="offset-0 offset-md-2 col-md-8 col-12">
				<h2 class="proceso-title text-left text-md-center"><?php the_field('proceso-title'); ?></h2>
			</div>
		</div>
	</div>
	<div class="container">
		<?php
		// Check rows exists.
		if (have_rows('proceso-repeater')) :

			// Loop through rows.
			while (have_rows('proceso-repeater')) : the_row();
		?>

				<div class="row proceso-row justify-content-between">
					<div class="col-12 col-md-6 text">
						<h3 class="proceso-item-title text-left"><span class="proceso-item-title-number"><?php echo get_row_index(); ?></span><?php the_sub_field('proceso-repeater-title'); ?></h2>
							<div class="proceso-text text-left">
								<?php the_sub_field('proceso-repeater-body'); ?>
							</div>
					</div>
					<div class="col-12 col-md-5 img">
						<img src="<?php the_sub_field('proceso-repeater-image') ?>" alt="<?php the_sub_field('proceso-repeater-title'); ?>" />
					</div>
				</div>
		<?php
			// End loop.
			endwhile;

		// No value.
		else :
		// Do something...
		endif;
		?>
	</div>
</div>

<div class="section section-form">
	<div class="container">
		<div class="row">
			<div class="col-12 form-container">
				<h2 class="form-title col-12 text-left"><?php the_field('contact-title'); ?></h2>
				<h2 class="form-text col-12 text-left"><?php the_field('contact-text'); ?></h2>
				<!--[if lte IE 8]>
							<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
							<![endif]-->
				<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
				<script>
					hbspt.forms.create({
						region: "na1",
						portalId: "20213022",
						formId: "4a9d00ec-c7a4-41be-9609-42a780735762",
						css: ""
					});
				</script>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<a class="close modal-close">
				<span aria-hidden="true">&times;</span>
			</a>
			<!-- 16:9 aspect ratio -->
			<div id="video" class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LXb3EKWsInQ?rel=0&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();