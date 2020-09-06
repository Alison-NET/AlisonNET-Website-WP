<?php get_header()?>


	<!-- Service Head -->
	<?php get_template_part( 'template-parts/head','service' );?>

	<section class="service-info">
		<div class="container">
			<div class="row align-items-center animate__animated animate__fadeIn wow">
				<div class="col-lg-5 d-flex justify-content-center">
					<div class="service-info-number">
						<span class="value animate__fadeInLeft animate__animated wow"><?php the_field('number')?></span>
						<span class="desc"><?php the_field('number_description')?></span>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="service-info-intro">
						<h3 class="title"><?php the_field('info_title')?></h3>
						<p class="desc"><?php the_field('info_description')?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="service-items">
		<div class="container">
			<h4 class="service-items-header animate__animated animate__fadeInDown wow"><?php the_field('include_title')?></h4>
			<hr class="service-items-separator animate__animated animate__fadeIn wow">

			<div class="row row-items">
					<?php
					if( have_rows('include_items') ):
						while( have_rows('include_items') ) : the_row(); ?>
						
						<div class="col-md-6">
							<div class="tile zoom-on-hover custom-shadow-on-hover animate__animated animate__fadeIn wow">
								<div class="tile-header d-flex align-items-center">
									<img src="<?php the_sub_field('icon')?>" alt="" class="tile-img">
									<h3 class="tile-title"><?php the_sub_field('title')?></h3>
								</div>
								<p class="tile-descr"><?php the_sub_field('description')?></p>
							</div>
						</div>
						<?php
						endwhile;
					endif;
					?>
			</div>
		</div>
	</section>

<?php

//  Connect with us
get_template_part('template-parts/connect-with-us');

get_footer();

?>
