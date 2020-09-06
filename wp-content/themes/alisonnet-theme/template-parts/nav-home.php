<div class="nav-home nav-wrapper">
	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light bg-light nopadding" role="navigation">
			<div class="nav-branding  nopadding">
				<a href="<?php echo home_url( )?>">
					<div class="d-flex align-items-center">
						<img class="navbar-logo" src="<?php the_field('white_logo', 'option') ?>" />
						<div class="navbar-brand">	
							<p class="brand-title"><?php the_field('brand_title', 'option') ?></p>
							<p class="brand-subtitle"><?php the_field('brand_subtitle', 'option') ?></p>
						</div>
					</div>
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
			wp_nav_menu( array(
				'theme_location'    => 'top_menu',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse justify-content-end nopadding',
				'container_id'      => 'navbarNavAltMarkup',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
		</nav>
	</div>
</div>