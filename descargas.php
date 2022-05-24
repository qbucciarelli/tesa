<?php

/**
 * Template Name: Descargas (Descargas)
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

<div class="section section-guia" id="section-guia">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="guia-main-title text-left"><?php the_field('descargas-title-guia'); ?></h2>
			</div>
		</div>

		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('repeater-descargas')) :

				// Loop through rows.
				while (have_rows('repeater-descargas')) : the_row();
			?>
					<div class="guias col-12 col-lg-4" data-aos="fade-up">
						<div class="guia-cta col-12">
							<div class="guia-picture">

								<?php $guia_picture = get_sub_field('image');
								if (!empty($guia_picture)) : ?>
									<img src="<?php echo $guia_picture['url'] ?>" alt="<?php echo $guia_picture['alt'] ?>" />
								<?php endif; ?>

							</div>
							<div class="guia-title">
								<h3><?php the_sub_field('title'); ?></h3>
							</div>
							<div class="guia-body">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
							if (get_sub_field('link') != null) :
							?>
								<a href="<?php the_sub_field('link'); ?>" class="guia-link" target="_blank"><?php esc_html_e('Descargar', 'tesa-theme'); ?></a>
							<?php
							endif;
							?>
							<?php
							if (get_sub_field('url') != null) :
							?>
								<a href="<?php the_sub_field('url'); ?>" class="guia-link" target="_blank"><?php esc_html_e('Descargar', 'tesa-theme'); ?></a>
							<?php
							endif;
							?>
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
			<div class="col-12">
				<h2 class="guia-main-title text-left"><?php the_field('descargas-title-fichas'); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('repeater-descargas-fichas')) :

				// Loop through rows.
				while (have_rows('repeater-descargas-fichas')) : the_row();
			?>
					<div class="guias col-12 col-lg-4" data-aos="fade-up">
						<div class="guia-cta col-12">
							<div class="guia-picture">

								<?php $guia_picture = get_sub_field('image');
								if (!empty($guia_picture)) : ?>
									<img src="<?php echo $guia_picture['url'] ?>" alt="<?php echo $guia_picture['alt'] ?>" />
								<?php endif; ?>

							</div>
							<div class="guia-title">
								<h3><?php the_sub_field('title'); ?></h3>
							</div>
							<div class="guia-body">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
							if (get_sub_field('link') != null) :
							?>
								<a href="<?php the_sub_field('link'); ?>" class="guia-link" target="_blank"><?php esc_html_e('Descargar', 'tesa-theme'); ?></a>
							<?php
							endif;
							?>
							<?php
							if (get_sub_field('url') != null) :
							?>
								<a href="<?php the_sub_field('url'); ?>" class="guia-link" target="_blank"><?php esc_html_e('Descargar', 'tesa-theme'); ?></a>
							<?php
							endif;
							?>
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
			<div class="col-12">
				<h2 class="guia-main-title text-left"><?php the_field('descargas-title-certificados'); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('repeater-descargas-certificados')) :

				// Loop through rows.
				while (have_rows('repeater-descargas-certificados')) : the_row();
			?>
					<div class="guias col-12 col-lg-4" data-aos="fade-up">
						<div class="guia-cta col-12">
							<div class="guia-picture">

								<?php $guia_picture = get_sub_field('image');
								if (!empty($guia_picture)) : ?>
									<img src="<?php echo $guia_picture['url'] ?>" alt="<?php echo $guia_picture['alt'] ?>" />
								<?php endif; ?>

							</div>
							<div class="guia-title">
								<h3><?php the_sub_field('title'); ?></h3>
							</div>
							<div class="guia-body">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
							if (get_sub_field('link') != null) :
							?>
								<a href="<?php the_sub_field('link'); ?>" class="guia-link" target="_blank"><?php esc_html_e('Descargar', 'tesa-theme'); ?></a>
							<?php
							endif;
							?>
							<?php
							if (get_sub_field('url') != null) :
							?>
								<a href="<?php the_sub_field('url'); ?>" class="guia-link" target="_blank"><?php esc_html_e('Descargar', 'tesa-theme'); ?></a>
							<?php
							endif;
							?>
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
					<div class="col-md-10 offset-md-1">
						<h2 class="form-title col-12 text-left"><?php the_field('contact-title'); ?></h2>
						<p class="form-text col-12 text-left"><?php the_field('contact-text'); ?></p>
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
