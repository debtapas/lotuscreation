<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Designs Ninja">
		
	   <!-- description -->
	   <meta name="description" content="">
	   <!-- keywords -->
	   <meta name="keywords" content="">
		<title><?php echo get_bloginfo(); ?></title>
		<link rel="shortcut icon" href="<?php 
		$favicon = get_field('favicon', 'option');
		echo $favicon['url'];
		?>">

		<?php wp_head();?>
	</head>
<body>
	<?php get_template_part('/template-parts/navigation', 'navigation'); ?>

