<?php 
/*Template Name: Shop*/

get_header();

get_template_part( 'template-parts/head-shop');
?>


<div class="container">
	<div class="row row-items">
	<?php
	$query = new WP_Query(array('post_type' => 'product'));

	if ( $query->have_posts() ) :
		while ( $query->have_posts() ):
			$query->the_post();
			get_template_part( 'template-parts/card', 'product' );
		endwhile;
		wp_reset_postdata();

		else :
		// Постов не найдено
	endif;
	?>
	</div>
</div>


<?php 
//  Footer
get_footer();
?>
