	<!-- Footer -->

	<footer class="footer ptb-80">
		<div class="container">
			<div class="row">
				<div class="branding col-12">
					<a href="<?php the_permalink(2)?>">
						<img class="branding-logo" src="<?php the_field('dark_logo', 'option') ?>" />
						<h2 class="branding-name" href="#"><?php the_field('brand_title', 'option') ?></h2>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="section-name">Contact us</div>
					<hr class="section-separator" />
					<div class="section-item"><?php the_field('phone', 'option') ?></div>
					<div class="section-item">
						<?php the_field('location', 'option') ?>
					</div>
					<div class="section-item"><?php the_field('email', 'option') ?></div>
				</div>

				<div class="col-md-4">
					<div class="section-name">Navigate</div>
					<hr class="section-separator" />
					<a href="<?php the_permalink(2)?>">
						<div class="section-item">Home</div>
					</a>
					<a href="<?php the_permalink(2)?>#about-us">
						<div class="section-item">About us</div>
					</a>
					<a href="<?php the_permalink(2)?>#services">
						<div class="section-item">Services</div>
					</a>
					<a href="<?php the_permalink(8)?>">
						<div class="section-item">Contact</div>
					</a>
				</div>

				<div class="col-md-4">
					<div class="section-name">Services</div>
					<hr class="section-separator" />

					<?php
					
					$query = new WP_Query( array('post_type' => 'service') );

					// Цикл
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ):
							$query->the_post();
							?>	
							<a href="<?php the_permalink()?>">
								<div class="section-item"><?php the_title()?></div>
							</a>
							<?php
						endwhile;
					 else :
						// Постов не найдено
					endif;

					// Возвращаем оригинальные данные поста. Сбрасываем $post.
					wp_reset_postdata();

					?>
				</div>
			</div>
			<div class="row mt-50">
				<div class="col-md-6">
					<p class="rights"><?php the_field('copyright_text', 'option') ?></p>
				</div>

				<div class="col-md-6">
					<div class="social-info">
				<?php
					if( have_rows('social_medias', 'option') ):
						while( have_rows('social_medias', 'option') ) : the_row(); ?>
						
						<a href="<?php the_sub_field('url')?>"><img class="icon" src="<?php the_sub_field('icon')?>" alt=""></a>

						<?php
						endwhile;
					endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>


	<script>

	$('.form.contact-form').submit(function() {
		var form = $(this);
		form.find('.form-submit').attr('disabled', 'disabled');
		var msg = form.serialize() + '&messageTitle=' + 'AlisonNET - Service';
		console.log(msg);

		$.ajax({
			type: 'POST',
			url: '<?php echo get_template_directory_uri(); ?>/inc/send-mail.php',
			data: msg,
			success: function(data) {
			$('.notification-card').addClass('animate__animated animate__fadeInRight notification-card--active');
			form.find('.form-submit').removeAttr('disabled');
			// location.href = '/thanks';
			form[0].reset();
			console.log(data);
			},
			error: function(xhr, str){
				alert('Виникла помилка при відправці форми: ' + xhr.responseCode);
			}
		});
		return false;
	});

	</script>

</body>
</html>
