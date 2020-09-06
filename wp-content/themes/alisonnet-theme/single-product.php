<?php get_header();

get_template_part( 'template-parts/head-shop', 'product');

?>


	<section class="product">
		<div class="container">
			<div class="row align-items-center animate__animated animate__fadeIn wow">
				<div class="col-md-5">
					<div class="slick-product-images">
						<?php
						if( have_rows('product_images') ):
							while( have_rows('product_images') ) : the_row(); ?>
							
							<div class="image-wrapper">
								<img src="<?php the_sub_field('image')?>" alt="" class="image">
							</div>
							<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
				<div class="col-md-7">
					<div class="product-general-info-wrapper ">
						<h3 class="title animate__fadeInDown animate__animated wow"><?php the_title()?></h3>
						<?php if( get_field('product_price') ): ?>
							<p class="price animate__fadeInDown animate__animated wow">$<?php the_field('product_price')?></p>
						<?php endif; ?>
						<div class="rating">
							<span class="rating-item rating-item--filled"></span>
							<span class="rating-item rating-item--filled"></span>
							<span class="rating-item"></span>
							<span class="rating-item"></span>
							<span class="rating-item"></span>
						</div>
						<p class="info"><?php the_field('product_short_description')?></p>
						<!-- Button trigger modal -->
						<button type="button" class="order-btn btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
							Order now
						</button>
						
						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">Order now</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<?php get_template_part( 'template-parts/form', 'order' )?>
								</div>
							</div>
							</div>
						</div>
						<!-- <div class="short-info-items">
							<div class="item">
								<span class="item-title">Categories:</span>
								<span class="item-body">Beauty, Diet, Diet & Fitness, Medicine & Health, Vitamins & Supplements</span>
							</div>
							<hr class="separator">
						</div> -->
					</div>
				</div>
			</div>

			<?php
			if( have_rows('about_items') ):?>
			<div class="product-descr">
				<?php while( have_rows('about_items') ) : the_row(); ?>
				<div class="product-descr-section animate__animated animate__fadeIn wow">
					<div class="row">
						<div class="col-md-5">
							<h4 class="title"><?php the_sub_field('title')?></h4>
						</div>
						<div class="col-md-7"><?php the_sub_field('description')?></div>
					</div>
				</div>
				<?php endwhile;?>
			</div>
			<?php
			endif;
			?>
				
			
				<?php
				if( have_rows('documents') ):
					?> 
					<div class="product-section documents-section">
						<h2 class="product-section-title">Documents</h2>
						<div class="row row-items">
					
					<?php
					while( have_rows('documents') ) : the_row(); ?>
					
						<div class="col-md-3">
							<div class="tile zoom-on-hover custom-shadow-on-hover animate__animated animate__fadeIn wow">
								<div class="tile-icon">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/icons/paper.svg" alt="">
								</div>
								<div class="tile-meta"><a href="<?php the_sub_field('link')?>"
										class="tile-link"><?php the_sub_field('title')?></a></div>
							</div>
						</div>
					<?php
					endwhile;?>
						</div>
					</div>
					<?php
				endif;
				?>
				


				<?php
					$recomm_posts = get_field('recommendations_products');
					if( $recomm_posts ): ?>

					<div class="product-section recommends-section">
						<h2 class="product-section-title">We recommend</h2>
						<div class="row row-items">


					<?php foreach( $recomm_posts as $post ): 
						setup_postdata( $post );
						get_template_part( 'template-parts/card', 'product' );
						endforeach; 
					wp_reset_postdata();?>
					</div>
				</div>
				<?php endif; ?>
		</div>
	</section>

<?php

// Connect with us
get_template_part( 'template-parts/connect-with-us' );

// Footer
get_footer();
?>
