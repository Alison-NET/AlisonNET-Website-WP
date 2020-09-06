<?php get_header('home')?>

	<section class="heroes">
		<!-- Slider -->
		<div class="slick-services">
			<?php
			global $post;
			$args = array(
				'post_type' => 'service'
			);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ){ setup_postdata($post);
			?>
			<div class="slider-item">
				<div class="image-wrapper">
					<img class="slider-item-image" src="<?php the_field('service_home_photo') ?>" />
				</div>

				<div class="slider-content container animate__animated animate__fadeIn wow">
					<?php if( has_excerpt() ): ?>
					<h3 class="slider-item-subtitle"><?php the_field('subtitle')?></h3>
					<?php endif; ?>
					<h2 class="slider-item-title"><?php the_title()?></h2>
					<a href="<?php the_permalink()?>" class="btn btn-primary slider-item-btn">
						Learn more
					</a>
				</div>
			</div>
			<?php
			}
			wp_reset_postdata();
			?>

		</div>
	</section>

	<!-- Strengths / News -->
	<section class="strengths-news">
		<div class="container">
			<div class="row">
				<!-- Strengths -->
				<div class="col-lg-9">

					<?php
					if( have_rows('strength') ):
						while( have_rows('strength') ) : the_row(); ?>
						
						<div class="strength-tile d-flex justify-content-start custom-borders zoom-on-hover custom-shadow-on-hover strengths-card custom-shadow <?php if( get_row_index() > 1 ): echo 'mt-50'; endif; ?>">
						<div class="icon-wrapper d-flex align-items-center">
							<img class="icon" src="<?php the_sub_field('icon'); ?>" alt="">
						</div>
						<div class="texts">
							<h5 class="title"><?php the_sub_field('title'); ?></h5>
							<p class="descr"><?php the_sub_field('description'); ?></p>
						</div>
						</div>
						<?php
						endwhile;
					endif;
					?>

				</div>

				<!-- News -->

				<div
					class="latest-news animate__animated animate__fadeIn wow custom-shadow custom-borders col-lg-3 zoom-on-hover">
					<h5 class="latest-news-title">Latest news</h5>
					<hr class="latest-news-separator" />

					<div class="news-container">
						<div class="news-item">
							<div class="row">
								<div class="news-item-time-wrapper col-auto">
									<img class="news-item-time-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/icons/time.svg" />
									<h6 class="news-item-time">3H</h6>
								</div>
								<p class="news-item-title col">
									Lorem ipsum dolor sit amet,<br />
									consectetur adipiscing elit
								</p>
							</div>
							<hr />
						</div>

						<div class="news-item">
							<div class="row">
								<div class="news-item-time-wrapper col-auto">
									<img class="news-item-time-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/icons/time.svg" />
									<h6 class="news-item-time">3H</h6>
								</div>
								<p class="news-item-title col">
									Lorem ipsum dolor sit amet,<br />
									consectetur adipiscing elit
								</p>
							</div>
							<hr />
						</div>

						<div class="news-item">
							<div class="row">
								<div class="news-item-time-wrapper col-auto">
									<img class="news-item-time-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/icons/time.svg" />
									<h6 class="news-item-time">3H</h6>
								</div>
								<p class="news-item-title col">
									Lorem ipsum dolor sit amet,<br />
									consectetur adipiscing elit
								</p>
							</div>
							<hr />
						</div>

						<div class="news-item">
							<div class="row">
								<div class="news-item-time-wrapper col-auto">
									<img class="news-item-time-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/icons/time.svg" />
									<h6 class="news-item-time">3H</h6>
								</div>
								<p class="news-item-title col">
									Lorem ipsum dolor sit amet,<br />
									consectetur adipiscing elit
								</p>
							</div>
							<hr />
						</div>

						<div class="news-item">
							<div class="row">
								<div class="news-item-time-wrapper col-auto">
									<img class="news-item-time-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/icons/time.svg" />
									<h6 class="news-item-time">3H</h6>
								</div>
								<p class="news-item-title col">
									Lorem ipsum dolor sit amet,<br />
									consectetur adipiscing elit
								</p>
							</div>
							<hr />
						</div>

						<div class="news-item">
							<div class="row">
								<div class="news-item-time-wrapper col-auto">
									<img class="news-item-time-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/icons/time.svg" />
									<h6 class="news-item-time">3H</h6>
								</div>
								<p class="news-item-title col">
									Lorem ipsum dolor sit amet,<br />
									consectetur adipiscing elit
								</p>
							</div>
							<hr />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About us -->

	<section id="about-us" class="about-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 nopadding animate__animated animate__fadeIn wow">
					<img src="<?php the_field('about_us_image')?>" alt="" class="about-us-image" />
				</div>
				<div class="col-md-6 about-us-content-container animate__animated animate__fadeIn wow">
					<div class="about-us-content">
						<h3 class="about-us-title animate__fadeInRight animate__animated wow"><?php the_field('about_us_title')?></h3>
						<hr />
						<p class="about-us-desc">
						<?php the_field('about_us_description')?>
						</p>
					</div>
					<img class="about-us-dots-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/dots/cells.svg" alt="">
					<img class="about-us-dots-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/dots/cells.svg" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->

	<section id="services" class="services d-flex align-items-md-center">
		<div class="container">
			<div class="services-texts text-center text-white animate__animated animate__fadeIn wow">
				<div class="animate__animated animate__zoomIn wow">
					<h4 class="services-subtitle"><?php the_field('services_subtitle')?></h4>
					<h3 class="services-title"><?php the_field('services_title')?></h3>
				</div>
				<hr class="services-texts-separator" />
				<p class="services-desc mt-25 mb-50"><?php the_field('services_description')?></p>
			</div>

			<div class="services-cards animate__animated animate__fadeInUp wow">
				<div class="row row-items">

				<?php
				$query = new WP_Query( array('post_type' => 'service') );
				if ( $query->have_posts() ) :
					$arrSize = count($query);
					while ( $query->have_posts() ):
						$query->the_post();
				?>
						<div class="col-md-6 col-lg-4">
							<div
								class="tile zoom-on-hover custom-borders custom-shadow-dark-1 d-flex flex-column justify-content-between">
								<img src="<?php the_field('service_icon')?>" alt="" class="tile-icon">
								<h4 class="tile-title"><?php the_title()?></h4>
								<p class="tile-descr">
								<?php echo wp_trim_words( get_field('info_description'), $num_words = get_field('service_card_max_length', 2), $more = null );
								?>
								</p>
								<div class="">
									<hr class="tile-separator">
									<a class="tile-link" href="<?php the_permalink()?>">Read more</a>
								</div>
							</div>
						</div>
				<?php
					endwhile;
				else :
				endif;
				wp_reset_query();
				// $query = new WP_Query('page_id=196');
				// $query->the_post();
				?>	
				
			</div>
		</div>
	</section>

<?php 

//  Location
get_template_part('template-parts/location');

//  Connect with us
get_template_part('template-parts/connect-with-us');

//  Footer
get_footer();

?>
