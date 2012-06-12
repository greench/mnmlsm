<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
  <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo " - "; bloginfo('name'); } elseif (is_single() || is_page() ) { single_post_title(); } elseif (is_search() ) { bloginfo('name'); echo " search results: "; echo wp_specialchars($s); } else { wp_title('',true); } ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="<?php echo bloginfo('template_url'); ?>/small-device.css">
<meta name="viewport" content="width=device-width">
<link rel="alternate" type="application/rss+xml" title="Blog RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="Blog Atom Feed" href="<?php bloginfo('atom_url'); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
<body>
<header id="simple"> 
	<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	<h2><?php bloginfo('description'); ?></h2>
	<ul id="user_info">
		<?php $blog_options = json_decode(get_option("mnmlsm-theme-options")); ?>
		<li class="website"><a href="<?php bloginfo('home'); ?>">blog</a></li>
		<li class="twitter"><a href="http://twitter.com/<?php echo $blog_options->twitter; ?>">@<?php echo $blog_options->twitter; ?></a></li>
		<li class="email"><a href="<?php echo $blog_options->sayHello; ?>">say hello</a></li>
		<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">rss feed</a></li>
	</ul>
	<p class="copyleft">Theme
		<svg xmlns="http://www.w3.org/2000/svg" style="height:10px;width:10px" viewBox="0 0 980 980"><circle cx="490" cy="490" r="440" fill="none" stroke="#777" stroke-width="100"/><path d="M486,215C356,215 247,306 219,428L350,428C374,376 426,340 486,340C569,340 636,407 636,490C636,573 569,640 486,640C426,640 374,604 350,553L219,553C247,674 356,765 486,765C638,765 761,642 761,490C761,338 638,215 486,215z"/></svg>
		 by <a href="http://www.rss-ems.com/blog">RSS</a>.
	 </p>
</header>