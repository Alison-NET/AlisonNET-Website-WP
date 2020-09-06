<section class="connect-with-us">
	<div class="container">
		<div class="row">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dest/dots/gradient dots.svg" alt="" class="gradient-dots">
			<div class="col-md-8">
				<p class="animate__animated animate__fadeInLeft wow"><?php the_field('connect_text', 'option')?></p>
			</div>

			<div class="col-md-4 text-center text-lg-left">
				<a type="button" href = "<?php the_permalink( 8 )?>"
					class="btn btn-light animate__animated animate__bounceIn wow"
					data-wow-delay="0.5s">
					<?php the_field('connect_button_label', 'option')?>
				</a>
			</div>
		</div>
	</div>
</section>