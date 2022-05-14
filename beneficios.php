<?php

/**
 * Template Name: Beneficios (Beneficios)
 * Description: Page template full width.
 *
 */

get_header();
$image = get_field('image')
?>

<div class="section section-jumbotron" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12  col-md-8 offset-md-2" data-aos="fade-up">
				<div class="jumbotron">
					<h1 class="jumbotron-title text-center"><?php the_field('title'); ?></h1>
					<div class="jumbotron-text text-left text-md-center"><?php the_field('text'); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="section section-beneficios-puntos" id="section-beneficios-puntos">
	<div class="container">

		<div class="row">
			<div class="col-12 col-md-10 offset-md-1">
				<p class="beneficios-puntos-main-text text-left text-md-center"><?php the_field('beneficios-puntos-title'); ?></p>
			</div>
		</div>

		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('repeater-beneficios-puntos')) :

				// Loop through rows.
				while (have_rows('repeater-beneficios-puntos')) : the_row();
			?>
					<div class="beneficios-puntos col-12 col-lg-6" data-aos="fade-up">
						<div class="beneficios-puntos-cta col-12">
							<div class="beneficios-puntos-picture">

								<?php $beneficios_puntos_picture = get_sub_field('image');
								if (!empty($beneficios_puntos_picture)) : ?>
									<img src="<?php echo $beneficios_puntos_picture['url'] ?>" alt="<?php echo $beneficios_puntos_picture['alt'] ?>" />
								<?php endif; ?>

							</div>
							<div class="beneficios-puntos-body">
								<?php the_sub_field('beneficios-puntos-body'); ?>
							</div>
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

		<div class="row">
			<a href="<?php echo esc_url(the_field('beneficios-button-url')); ?>" class="btn btn-primary mx-auto"><?php echo esc_html(the_field('beneficios-button')); ?></a>
		</div>

	</div>
</div>



<div class="section section-beneficios-tapon">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="beneficios-tapon-title text-left text-md-center"><?php the_field('beneficios-tapon-title'); ?></h2>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row beneficios-tapon-anchors justify-content-between">
			<div class="col-12 text">
				<?php
				// Check rows exists.
				if (have_rows('beneficios-tapon-repeater')) :

					// Loop through rows.
					while (have_rows('beneficios-tapon-repeater')) : the_row();
				?>

						<a href="#<?php the_sub_field('anchor'); ?>" class="beneficios-tapon-item-anchor text-left"><?php the_sub_field('title'); ?></h3>
					<?php
					// End loop.
					endwhile;

				// No value.
				else :
				// Do something...
				endif;
					?>
					<a href="#section-beneficios-certificados" class="beneficios-tapon-item-anchor text-left"><?php the_field('beneficios-certificados-title'); ?></a></h3>
			</div>
		</div>
	</div>


	<div class="container">
		<?php
		// Check rows exists.
		if (have_rows('beneficios-tapon-repeater')) :

			// Loop through rows.
			while (have_rows('beneficios-tapon-repeater')) : the_row();
		?>

				<div class="row beneficios-tapon-row justify-content-between" id="<?php the_sub_field('anchor'); ?>">
					<div class="col-12 col-md-6 text" data-aos="fade-<?php print (get_row_index() % 2) ? "right" : "left"; ?>">
						<h3 class="beneficios-tapon-item-title text-left"><?php the_sub_field('title'); ?></h3>
						<div class="beneficios-tapon-text text-left">
							<?php the_sub_field('body'); ?>
						</div>
					</div>
					<?php $beneficios_tapon_repeater_image = get_sub_field('image');
					if (!empty($beneficios_tapon_repeater_image)) : ?>
						<div class="col-12 col-md-5 img" data-aos="fade-<?php print (get_row_index() % 2) ? "left" : "right"; ?>">
							<img src="<?php echo $beneficios_tapon_repeater_image['url'] ?>" alt="<?php echo $beneficios_tapon_repeater_image['alt'] ?>" />
						</div>
					<?php endif; ?>
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



<div class="section section-beneficios-certificados" id="section-beneficios-certificados">
	<div class="container">
		<div class="row">
			<div class="offset-0 offset-md-2 col-md-8 col-12">
				<h2 class="beneficios-certificados-title text-left text-md-center"><?php the_field('beneficios-certificados-title'); ?></h2>
			</div>
		</div>
	</div>
	<div class="container">

		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('repeater-beneficios-certificados')) :

				// Loop through rows.
				while (have_rows('repeater-beneficios-certificados')) : the_row();
			?>
					<div class="beneficios-certificados col-6 col-sm-4 col-md-2" data-aos="fade-up">
						<div class="beneficios-certificados-cta col-12">
							<div class="beneficios-certificados-picture">
								<a target="_blank" href="<?php the_sub_field('url') ?>">
									<?php $beneficios_certificados_picture = get_sub_field('image');
									if (!empty($beneficios_certificados_picture)) : ?>
										<img src="<?php echo $beneficios_certificados_picture['url'] ?>" alt="<?php echo $beneficios_certificados_picture['alt'] ?>" />
									<?php endif; ?>
								</a>
							</div>
							<div class="beneficios-certificados-title">
								<?php the_sub_field('title'); ?>
							</div>
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
</div>


<div class="section section-beneficios-propiedades" id="section-beneficios-propiedades">
	<div class="container">

		<div class="row">
			<div class="col-12">
				<h2 class="beneficios-propiedades-title text-left text-md-center"><?php the_field('beneficios-propiedades-title'); ?></h2>
			</div>
		</div>

		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('repeater-beneficios-propiedades')) :

				// Loop through rows.
				while (have_rows('repeater-beneficios-propiedades')) : the_row();
			?>
					<div class="beneficios-propiedades col-12 col-lg-4" data-aos="fade-up">
						<div class="beneficios-propiedades-cta col-12">
							<div class="beneficios-propiedades-picture">

								<?php $beneficios_propiedades_picture = get_sub_field('image');
								if (!empty($beneficios_propiedades_picture)) : ?>
									<img src="<?php echo $beneficios_propiedades_picture['url'] ?>" alt="<?php echo $beneficios_propiedades_picture['alt'] ?>" />
								<?php endif; ?>

							</div>
							<div class="beneficios-propiedades-title">
								<?php the_sub_field('title'); ?>
							</div>
							<div class="beneficios-propiedades-body">
								<?php the_sub_field('text'); ?>
							</div>
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
</div>


<div class="section section-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class=" form-container">
					<div class="col-12 col-md-10 offset-md-1">
						<h2 class="form-title col-12 text-left"><?php the_field('contact-title') ?></h2>
						<!--[if lte IE 8]>
							<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
							<![endif]-->
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
						<script>
							hbspt.forms.create({
								region: "na1",
								portalId: "<?php the_field('portal-id'); ?>",
								formId: "<?php the_field('form-id'); ?>",
								css: ""
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
