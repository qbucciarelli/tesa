<?php

/**
 * Template Name: Home Page (Home)
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
			<div class="col-12 col-md-8 offset-md-2">
				<div class="jumbotron">
					<div class="jumbotron-logo" data-aos="fade-up">
						<?php
						$logo = get_field('logo');
						if (!empty($logo)) : ?>
							<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" data-aos="fade-up" />
						<?php endif; ?>
					</div>
					<h1 class="jumbotron-title text-center" data-aos="fade-up"><?php the_field('title'); ?></h1>
					<a class="jumbotron-down-link smooth-link animate__animated animate__pulse" href="#section-animation"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-tapones" id="section-tapones">
	<div class="container">
		<div class="row accordion" id="accordionExample">

			<div class="col-12 cap-text-main-title">
				<h2><?php the_field('tapon-title'); ?></h2>
			</div>

			<div class="col-4">
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading1">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/seguridad.png" />
								<?php the_field('tapon-item-title-1'); ?>
							</button>
						</h2>
						<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-1'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading2">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/granulado_alta_calidad.png" />
								<?php the_field('tapon-item-title-2'); ?>
							</button>
						</h2>
						<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-2'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading3">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/personalizacion.png" />
								<?php the_field('tapon-item-title-3'); ?>
							</button>
						</h2>
						<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-3'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="col-12 column-img">
					<div class="cap-gif"></div>
				</div>
			</div>

			<div class="col-4">
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/precision.png" />
								<?php the_field('tapon-item-title-4'); ?>
							</button>
						</h2>
						<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-4'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading5">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/dos_discos.png" />
								<?php the_field('tapon-item-title-5'); ?>
							</button>
						</h2>
						<div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-5'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 btn-tapon">
				<a href="<?php echo the_field('tapon_button_url'); ?>" class="btn btn-primary"><?php echo the_field('tapon_button_title'); ?></a>
			</div>

		</div>

		<div class="row accordion-mobile" id="accordionExample">

			<div class="col-12 cap-text-main-title">
				<h2><?php the_field('tapon-title'); ?></h2>
			</div>

			<div class="col-12">
				<div class="col-12 column-img">
					<div class="cap-gif"></div>
				</div>

				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading1">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/seguridad.png" />
								<?php the_field('tapon-item-title-1'); ?>
							</button>
						</h2>
						<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-1'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading2">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/granulado_alta_calidad.png" />
								<?php the_field('tapon-item-title-2'); ?>
							</button>
						</h2>
						<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-2'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading3">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/personalizacion.png" />
								<?php the_field('tapon-item-title-3'); ?>
							</button>
						</h2>
						<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-3'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/precision.png" />
								<?php the_field('tapon-item-title-4'); ?>
							</button>
						</h2>
						<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-4'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 cap-text-block">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading5">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/dos_discos.png" />
								<?php the_field('tapon-item-title-5'); ?>
							</button>
						</h2>
						<div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_field('tapon-item-body-5'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 btn-tapon">
				<a href="<?php echo the_field('tapon_button_url'); ?>" class="btn btn-primary"><?php echo the_field('tapon_button_title'); ?></a>
			</div>

		</div>
	</div>
</div>

<div class="section section-ring">

	<div class="container">
		<div class="row">
			<h2 data-aos="fade-up" class="ring-title col-12 text-center"><?php the_field('beneficios-title'); ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('beneficios-repeater')) :

				// Loop through rows.
				while (have_rows('beneficios-repeater')) : the_row();
			?>
					<div class="ring col-12 col-md-4 d-flex flex-column">
						<div class="ring-content">
							<div class="ring-content-text">
								<?php
								if (get_row_index() == "3") {
									echo '<img src="' . get_site_url() . '/wp-content/themes/tesa-theme/assets/images/icono.png" alt="beneficios" class="icon-tca"/>';
								} elseif (get_row_index() == "2") {
									echo '<img src="' . get_site_url() . '/wp-content/themes/tesa-theme/assets/images/icon-tca.png" alt="beneficios" class="icon-tca"/>';
								} else {
									echo '<div class="value" akhi=" ' . get_sub_field('beneficios-repeater-value') . '" >0</div>';
								}
								?>
								<span><?php the_sub_field('beneficios-repeater-symbol'); ?></span>
							</div>
							<?php
							if (get_row_index() == "1") {
								echo '<svg class="progress-ring" width="144" height="144">
											<circle class="progress-ring__circle circle' . get_row_index() . '" stroke="white" stroke-width="4" fill="transparent" r="70" cx="72" cy="72" />
											<circle class="progress-ring__circle" stroke="white" stroke-width="4" fill="transparent" r="70" cx="72" cy="72" style="opacity: 0.2" />
										</svg>';
							}
							?>

						</div>
						<div class="ring-text text-center"><?php the_sub_field('beneficios-repeater-text'); ?></div>
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
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex flex-column text-center beneficios-button">
				<?php
				$button = get_field('beneficios-button');
				if ($button) :
					$button_url = $button['url'];
					$button_title = $button['title'];
				endif
				?>

				<a href="<?php echo esc_url($button_url); ?>" class="btn btn-secondary mx-auto"><?php echo esc_html($button_title); ?></a>
				<?php the_field('beneficios-button-legend') ?>
			</div>
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

<div class="section">
	<div class="container">
		<div class="row">
			<h2 class="testimonios-title col-12 text-center" data-aos="fade-up"><?php the_field('testimonios-title') ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('testimonios-repeater')) :

				// Loop through rows.
				while (have_rows('testimonios-repeater')) : the_row();
			?>

					<div class="testimonio col-12 col-lg-4">
						<div class="testimonio-header col-12">
							<div class="testimonio-picture">
								<?php
								$img_testimonio = get_sub_field_object('testimonios-repeater-image')['value'];
								if (!empty($img_testimonio)) : ?>
									<img src="<?php echo esc_url($img_testimonio['url']); ?>" alt="<?php echo esc_attr($img_testimonio['alt']); ?>" />
								<?php endif; ?>
							</div>
							<div class="testimonio-text">
								<h3><?php the_sub_field('testimonios-repeater-title'); ?></h3>
								<h4><?php the_sub_field('testimonios-repeater-position'); ?></h4>
							</div>
						</div>
						<div class="testimonio-body"><?php the_sub_field('testimonios-repeater-body'); ?></div>
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



<?php

get_footer();
