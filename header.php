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
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
  <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo " - "; bloginfo('name'); } elseif (is_single() || is_page() ) { single_post_title(); } elseif (is_search() ) { bloginfo('name'); echo " search results: "; echo wp_specialchars($s); } else { wp_title('',true); } ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body>
<header id="simple"> 
	<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	<h2><?php bloginfo('description'); ?></h2>
	<ul id="user_info">
		<li class="website"><a href="http://rss-ems.com">rss-ems.com</a></li>
		<li class="twitter"><a href="http://twitter.com/rssems">@rssems</a></li>
		<li class="email"><a href="#">say hello</a></li>
		<li class="rss"><a href="/rss">rss feed</a></li>
	</ul>
	<p class="copyleft" style="color: #777">Theme Copyleft
		<!--[if lte IE 8]><span style="filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2); display: inline-block;"><![endif]--><span class="copyleftRSS">&copy;</span>
		<!--[if lte IE 8]></span><![endif]-->
		 by <a href="http://www.rss-ems.com/blog">RSS</a>.
	 </p>
</header>