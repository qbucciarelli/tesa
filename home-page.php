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

<div class="section section-animation" id="section-animation">
	<div class="cap-mobile d-block d-lg-none">
		<div class="container">
			<div class="row">
				<div class="col-12 cap-text-main-title">
					<h2><?php the_field('tapon-title'); ?></h2>
				</div>
				<?php
				// Check rows exists.
				if (have_rows('tapon-repeater')) :

					// Loop through rows.
					while (have_rows('tapon-repeater')) : the_row();
				?>
						<div class="cap-text">
							<div class="col-12 cap-text-block">
								<h3><?php the_sub_field('tapon-item-title'); ?></h3>
								<?php the_sub_field('tapon-item-body'); ?>

								<?php $tapon_item_image = get_sub_field('tapon-item-image');
								if (!empty($tapon_item_image)) : ?>
									<img class="col-12 col-sm-8 offset-sm-2" src="<?php echo $tapon_item_image['url'] ?>" alt="<?php echo $tapon_item_image['alt'] ?>" />
								<?php endif; ?>

								<?php
								$link = get_sub_field_object('tapon-item-button')['value'];
								if ($link) :
									$link_url = $link['url'];
									$link_title = $link['title'];
								?>
									<a href="<?php echo esc_url($link_url); ?>" class="btn btn-primary"><?php echo esc_html($link_title); ?></a>
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
	<div class="cap-animation d-none d-lg-block">
		<div class="cap-titles">
			<div class="container">
				<div class="row">
					<div data-aos="fade-up" class="col-12 cap-text-main-title">
						<h2><?php the_field('tapon-title'); ?></h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="cap-text cap-text--1">

					<?php
					// Check rows exists.
					if (have_rows('tapon-repeater')) :

						// Loop through rows.
						while (have_rows('tapon-repeater')) : the_row();
					?>
							<div class="col-5 cap-text-block cap-text-block--<?php echo get_row_index(); ?>">
								<h3><?php the_sub_field('tapon-item-title'); ?></h3>
								<?php the_sub_field('tapon-item-body'); ?>
								<?php
								$link = get_sub_field_object('tapon-item-button')['value'];
								if ($link) :
									$link_url = $link['url'];
									$link_title = $link['title'];
								?>
									<a href="<?php echo esc_url($link_url); ?>" class="btn btn-primary"><?php echo esc_html($link_title); ?></a>
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
					<div class="caps d-none d-lg-flex">
						<div class="col-6 offset-6 d-flex justify-content-center align-items-center">

							<div class="cap cap-1" style="position: relative;">
								<div class="cap-icon cap-icon-1"></div>
								<div class="cap-icon cap-icon-2"></div>
								<div class="cap-icon cap-icon-3"></div>
								<div class="cap-icon cap-icon-4"></div>
								<div class="cap-icon cap-icon-5"></div>
								<div class="cap-icon cap-icon-6"></div>
								<div class="cap-icon cap-icon-7"></div>
								<div class="cap-icon cap-icon-8"></div>
								<div class="cap-icon cap-icon-9"></div>
								<div class="cap-icon cap-icon-10"></div>
								<div class="cap cap-2"></div>
								<div class="cap cap-3"></div>
							</div>
						</div>
					</div>

				</div>
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
									echo '<img src="' . get_site_url() . '/wp-content/themes/tesa-theme/assets/images/beneficios_03.png" alt="beneficios"/>';
								} else {
									echo '<div class="value" akhi=" ' . get_sub_field('beneficios-repeater-value') . '" >0</div>';
								}
								?>
								<span><?php the_sub_field('beneficios-repeater-symbol'); ?></span>
							</div>
							<svg class="progress-ring" width="144" height="144">
								<circle class="progress-ring__circle circle<?php echo get_row_index(); ?>" stroke="white" stroke-width="4" fill="transparent" r="70" cx="72" cy="72" />
								<circle class="progress-ring__circle" stroke="white" stroke-width="4" fill="transparent" r="70" cx="72" cy="72" style="opacity: 0.2" />
							</svg>
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
