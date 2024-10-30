<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<?php if (is_home() || is_front_page()) : ?>
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<?php else: ?>
		<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php endif; ?>

	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<?php /*?><link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?><?php */?>

	<?php wp_head(); ?>
	<meta name = "Viewport" content = "width=device-width, initial-scale=1.0" >
</head>
<body <?php body_class(); ?>>
<div id="pagewrapper">
	<div id="headerwrapper">
		<div id="headerimg">
			<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a></h1>
			<div id="description"><?php bloginfo('description'); ?></div>
		</div>
	</div>
	<?php if ( has_nav_menu( 'iwphone-menu' ) ) : ?>
		<div id="navwrapper">
			<div class="clearfix" id="navigation">
				<a href="<?php echo home_url( '/' ); ?>">
					<span id="homeicon" class="icon-stack">
					 	 <i class="icon-circle icon-stack-base"></i>
					 	 <i class="icon-home icon-light"></i>
					</span>
				</a>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'iwphonemenu', 'theme_location' => 'iwphone-menu', 'depth' => 1 ) ); ?>
			</div>
		</div><!-- #navwrapper -->
	<?php endif; ?>