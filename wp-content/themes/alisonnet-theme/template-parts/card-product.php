<?php 
/**
 * Template for product card
 */
?>

<div class="col-md-3">
	<div class="product-entry">
		<div class="image-wrapper">
			<img src="<?php the_post_thumbnail_url()?>"
				alt="" class="image">
		</div>		
		<div class="product-entry-content">
			<div class="category">Some category</div>
			<div class="title"><?php the_title()?></div>
			<hr>
			<div class="d-flex justify-content-between">
				<div class="rating-price-wrapper">
					<!--<div class="rating">
						<span class="rating-item rating-item--filled"></span>
						<span class="rating-item rating-item--filled"></span>
						<span class="rating-item"></span>
						<span class="rating-item"></span>
						<span class="rating-item"></span>
					</div>-->
					<?php if( get_field('product_price') ): ?>
						<div class="price">$<?php the_field('product_price')?></div>
					<?php endif; ?>
				</div> 
				<div class="more-link-wrapper">
					<a href="<?php the_permalink()?>" class="more-link"></a>
				</div>
			</div>
		</div>
	</div>
</div>