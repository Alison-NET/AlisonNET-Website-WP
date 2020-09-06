<?php 

/* Template Name: Contact Us*/

get_header();

get_template_part( 'template-parts/head', 'contact' );

?>

<section class="contact-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contact-us-texts-wrapper">
					<div class="texts">
						<p class="title"><?php the_field('info_title');?></p>
						<p class="descr"><?php the_field('info_description');?></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-us-form-wrapper">
					<?php get_template_part( 'template-parts/form', 'feedback' );?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php

//  Location
get_template_part('template-parts/location');

get_footer();
?>