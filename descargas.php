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
			<div class="col-12  col-md-8 offset-md-2">
				<div class="jumbotron">
					<div class="jumbotron-title text-center"><?php the_field('title'); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-guia" id="section-guia">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2">
				<h2 class="guia-main-title text-center"><?php the_field('descargas-title'); ?></h2>
				<p class="guia-main-text text-center"><?php the_field('descargas-description'); ?></p>
			</div>





			<?php
			// Check rows exists.
			if (have_rows('repeater-descargas')) :

				// Loop through rows.
				while (have_rows('repeater-descargas')) : the_row();
			?>
					<div class="guias col-12 col-lg-4">
						<div class="guia-cta col-12">
							<div class="guia-picture">
								<img src="<?php the_sub_field('image'); ?>" alt="guia-picture" />
							</div>
							<div class="guia-title">
								<h3><?php the_sub_field('title'); ?></h3>
							</div>
							<div class="guia-body">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
							$link = get_sub_field_object('link')['value'];
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title'];
							?>
								<a href="<?php echo esc_url($link_url); ?>" class="guia-link" download><?php esc_html_e('Descargas', 'tesa-theme'); ?></a>
							<?php endif; ?>
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
								portalId: "20213022",
								formId: "4a9d00ec-c7a4-41be-9609-42a780735762",
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
