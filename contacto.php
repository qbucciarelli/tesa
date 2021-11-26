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
				<div class="jumbotron" data-aos="fade-up">
					<h1 class="jumbotron-title v-centered text-left text-md-center"><?php the_field('title'); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-porque" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-12" data-aos="fade-up">
				<h2 class="porque-title text-left text-md-center"><?php the_field('contacto-porque-title'); ?></h2>
			</div>
		</div>
		<ul class="contacto-porque-container row">
			<?php
			// Check rows exists.
			if (have_rows('contacto-porque-repeater')) :

				// Loop through rows.
				while (have_rows('contacto-porque-repeater')) : the_row();
			?>
					<li class="contacto-porque-text col-12 col-lg-6">
						<?php the_sub_field('contacto-porque-text'); ?>
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

<div class="section section-informacion" id="section-informacion">
	<div class="container">
		<div class="row">
			<div class="col-12" data-aos="fade-up">
				<h2 class="informacion-title text-left text-md-center"><?php the_field('contacto-title'); ?></h2>
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
							<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.41542997062!2d3.1567388158744514!3d41.92692377033563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba54681417e423%3A0x3472ed596c99c8d1!2sCarrer%20del%20Gas%2C%2020%2C%2017200%20Palafrugell%2C%20Girona!5e0!3m2!1ses!2ses!4v1637163671600!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
			<div class="col-12">
				<div class=" form-container">
					<div class="col-md-10 offset-md-1">

						<h2 class="form-title col-12 text-left"><?php the_field('contacto-form-title'); ?></h2>
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


<div class="section section-descargas" data-aos="fade-up">
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
