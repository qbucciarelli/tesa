<?php

/**
 * Template Name: Producto (Producto)
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

<div class="section section-mt" id="section-mt">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-10 offset-0 offset-md-1">
				<h1>
					<?php the_field('mt-title'); ?>
				</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-5">
				<?php the_field('mt-text'); ?>
			</div>
			<div class="col-12 col-md-6 offset-0 offset-md-1">
				<img src="<?php echo esc_url(get_field('mt-image')['url']); ?>" alt="<?php echo esc_url(get_field('mt-image')['alt']); ?>" />
			</div>
		</div>
	</div>
</div>

<div class="section section-corchos" id="section-corchos" style="background-image: url(<?php echo esc_url(get_field('corchos-images')['url']); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 offset-0 offset-md-5">
				<h2><?php the_field('corchos-title'); ?></h2>
				<?php the_field('corchos-text'); ?>
			</div>
		</div>
	</div>
</div>

<div class="section section-pareja" id="section-pareja">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-10 offset-0 offset-md-1">
				<h2><?php the_field('pareja-title'); ?></h2>
			</div>
		</div>

		<ul class="nav nav-tabs row">
			<?php
			// Check rows exists.
			if (have_rows('pareja-repeater')) :

				// Loop through rows.
				while (have_rows('pareja-repeater')) : the_row();
			?>
					<?php $active = (1 == get_row_index()) ? 'active' : null;
					?>
					<li class="col-12 col-md-2 d-flex"><a data-toggle="tab" href="#tab<?php echo get_row_index(); ?>" class="<?php echo $active; ?>"><?php the_sub_field('pareja-repeater-section'); ?></a></li>
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

<div class="tab-content container">
	<?php
	// Check rows exists.
	if (have_rows('pareja-repeater')) :

		// Loop through rows.
		while (have_rows('pareja-repeater')) : the_row();
	?>
			<?php $activeTab = (1 == get_row_index()) ? ' in active show' : null;
			?>
			<?php $currentTab = get_row_index();
			?>
			<div id="tab<?php echo get_row_index() ?>" class="tab-pane fade row <?php echo $activeTab ?>">
				<div class="col-12 col-md-3 offset-0 offset-md-1 d-flex justify-content-center align-items-center">
					<img src="<?php the_sub_field('pareja-repeater-image'); ?>" alt="<?php the_sub_field('pareja-repeater-title'); ?>" />
				</div>
				<div class="col-12 col-md-7">
					<h3><?php the_sub_field('pareja-repeater-title'); ?></h3>
					<p><?php the_sub_field('pareja-repeater-text'); ?></p>
					<div class="accordion" id="accordionExample">
						<?php
						// Check rows exists.
						if (have_rows('pareja-repeater-repeater')) :

							// Loop through rows.
							while (have_rows('pareja-repeater-repeater')) : the_row();
						?>
								<div class="card">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $currentTab ?><?php echo get_row_index() ?>" aria-expanded="true" aria-controls="collapse<?php echo $currentTab ?><?php echo get_row_index() ?>">
												<?php the_sub_field('pareja-repeater-repeater-title') ?>
											</button>
										</h5>
									</div>

									<div id="collapse<?php echo $currentTab ?><?php echo get_row_index() ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<?php the_sub_field('pareja-repeater-repeater-text') ?>
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
					<a class="btn btn-primary" href="<?php the_sub_field('pareja-repeater-link') ?>"><?php the_sub_field('pareja-repeater-button') ?></a>
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

<div class="section section-cualidad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php the_field('cualidad-title') ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('cualidad-repeater')) :

				// Loop through rows.
				while (have_rows('cualidad-repeater')) : the_row();
			?>
					<div class="col-12 col-md-4">
						<img src="<?php the_sub_field('cualidad-repeater-image') ?>" alt="<?php the_sub_field('cualidad-repeater-title') ?>" />
						<h4><?php the_sub_field('cualidad-repeater-title') ?></h4>
						<p><?php the_sub_field('cualidad-repeater-text') ?></p>
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

<div class="section section-metodologia" id="section-mt">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-10 offset-0 offset-md-1">
				<h1><?php the_field('metodologia-title') ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-5">
				<img src="<?php the_field('metodologia-image') ?>" />
			</div>
			<div class="col-12 col-md-6 offset-0 offset-md-1">
				<?php the_field('metodologia-text') ?>
			</div>
		</div>
	</div>
</div>

<div class="section section-proceso">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-10 offset-0 offset-md-1">
				<h2><?php the_field('proceso-title') ?></h2>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-6">
				<ul>
					<?php
					// Check rows exists.
					if (have_rows('proceso-repeater')) :

						// Loop through rows.
						while (have_rows('proceso-repeater')) : the_row();

							$activeProceso = (1 == get_row_index()) ? 'active' : null;
					?>
							<li class="proceso-listlitem <?php echo $activeProceso ?>"><span><?php echo get_row_index() ?></span><?php the_sub_field('proceso-repeater-title') ?></li>
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
			<div class="col-12 col-md-5 offset-0 offset-md-1 proceso-caroussel">
				<?php
				// Check rows exists.
				if (have_rows('proceso-repeater')) :

					// Loop through rows.
					while (have_rows('proceso-repeater')) : the_row();

						$activeProcesoImg = (1 == get_row_index()) ? 'active' : null;
				?>
						<div class="proceso-image <?php echo $activeProcesoImg ?>" id="<?php echo get_row_index() ?>">
							<img src="<?php the_sub_field('proceso-repeater-image') ?>" alt="<?php the_sub_field('proceso-repeater-title') ?>" />
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
</div>

<div class="section section-client">
	<div class="container">
		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('client-repeater')) :

				// Loop through rows.
				while (have_rows('client-repeater')) : the_row();
			?>

					<div class="client-item col-12 col-sm-4 col-md-2">
						<div class="client-item-img">
							<img src="<?php the_sub_field('client-repeater-image') ?>" />
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
			<div class="col-12 form-container">
				<h2 class="form-title col-12 text-left">Escríbenos</h2>
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

<?php

get_footer();
