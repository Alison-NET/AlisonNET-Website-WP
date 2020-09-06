<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="css/app.min.css" />

	<title>Home</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="header">
		<div class="header-container">
			<!-- Top info -->
			<?php get_template_part( 'template-parts/top-information' );?>

			<!-- Navigation -->
			<?php get_template_part( 'template-parts/nav' );?>
		</div>
	</header>
