<?php

/**
 * Template Name: Contacto (Contacto)
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
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-informacion" id="section-informacion">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="informacion-title text-center"><?php the_field('contacto-title'); ?></h2>
			</div>
			<div class="col-12">
				<div class="informacion-content d-flex justify-content-center align-items-center flex-wrap">
					<div class="col-12 col-lg-6">
						<ul class="informacion-list">
							<li class="informacion-list-item"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/localizador.png" alt="localizador" /><?php the_field('contacto-address'); ?></li>
							<li class="informacion-list-item"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/telefono.png" alt="telefono" /><?php the_field('contacto-tel'); ?></li>
							<li class="informacion-list-item"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/mail.png" alt="mail" /><?php the_field('contacto-mail'); ?></li>
							<li class="informacion-list-item"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tesa-theme/assets/images/link.png" alt="link" /><?php the_field('contacto-site'); ?></li>
						</ul>
					</div>
					<div class="col-12 col-lg-6">
						<!-- 16:9 aspect ratio -->
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95780.46585423182!2d2.070149645558153!3d41.39277549745888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49816718e30e5%3A0x44b0fb3d4f47660a!2sBarcelone!5e0!3m2!1sfr!2ses!4v1633946191154!5m2!1sfr!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-form">
	<div class="container">
		<div class="row">
			<div class="col-12 form-container">
				<h2 class="form-title col-12 text-left"><?php the_field('contacto-form-title'); ?></h2>
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


<div class="section">
	<div class="container">
		<div class="row">

			<?php
			// Check rows exists.
			if (have_rows('contacto-repeater')) :

				// Loop through rows.
				while (have_rows('contacto-repeater')) : the_row();
			?>
					<div class="descargas col-12 col-lg-4">
						<div class="descargas-header col-12">
							<div class="descargas-picture">
								<img src="<?php the_sub_field('contacto-repeater-image'); ?>" alt="<?php the_sub_field('contacto-repeater-title'); ?>">
							</div>
							<div class="descargas-title">
								<h3><?php the_sub_field('contacto-repeater-title'); ?></h3>
							</div>
						</div>
						<div class="descargas-body"><?php the_sub_field('contacto-repeater-text'); ?>
						</div>
						<a href="<?php the_sub_field('contacto-repeater-url'); ?>" class="btn btn-primary"><?php the_sub_field('contacto-repeater-button'); ?></a>
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
