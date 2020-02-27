<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tech Theme</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$tech_classes = array( 'tech-class', 'my-class' );
		else:
			$tech_classes = array( 'no-tech-class' );
		endif;

	?>

	<body <?php body_class( $tech_classes ); ?>>

		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
