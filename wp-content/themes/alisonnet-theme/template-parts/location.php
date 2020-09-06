<section id="location" class="location-map <?php if(is_front_page()): echo 'custom-shadow-dark-2'; else: echo 'custom-shadow-2'; endif; ?>">
	<div class="container-fluid">
		<div class="container location">
			<div class="row">
				<div class="col-md-5 animate__animated animate__fadeInLeft wow">
					<h5 class="location-subtitle"><?php the_field('location_subtitle', 'option')?></h5>
					<h3 class="location-title"><?php the_field('location_title', 'option')?></h3>
				</div>
				<div class="col-md-7 d-flex justify-content-start">
					<div class="location-separator"></div>
					<h4 class="location-text align-self-center animate__animated animate__fadeIn wow">
						<?php the_field('location', 'option')?>
					</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<iframe class="map-iframe" frameborder="0" scrolling="no" marginheight="0"
			marginwidth="0" id="gmap_canvas"
			src="<?php the_field('map_link', 'option')?>"></iframe>
	</div>
</section>