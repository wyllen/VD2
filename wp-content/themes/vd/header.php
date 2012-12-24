<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all">
	<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie.css" media="all">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/multi-column.js"></script>
<![endif]-->
	<meta charset="utf-8">
	<meta content='initial-scale=1; maximum-scale=1; user-scalable=0;' name='viewport'/>
	<title><?php wp_title(''); ?></title>	
	<?php wp_head(); ?>
	<!--[if lte IE 8]>
<script language="JavaScript" src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
 <script language="JavaScript" src="<?php bloginfo('template_url'); ?>/js/respond.js"></script>
    <![endif]-->
</head>
<body class="clearfix">
	<header id="header">
		<a href="<?php echo home_url( '/' ); ?>" class="logo"></a>
		<div id="ancres">
			<ul>
				<li><a href="#blog" onclick="smoothScroll('blog');return false" class="ancre_blog"><div class="newspaper"></div></a></li>
				<li><a href="#contact" onclick="smoothScroll('contact');return false"  class="ancre_contact"><div class="mail2"></div></a></li>
				<li><a href="#about" onclick="smoothScroll('about');return false"  class="ancre_about"><div class="profil"></div></a></li>
				<li><a href="#realisations" onclick="smoothScroll('realisations');return false"  class="ancre_realisations"><div class="monitor"></div></a></li>
				<li><a href="#lab" onclick="smoothScroll('lab');return false"  class="ancre_lab"><div class="beaker"></div></a></li>
			</ul>
		</div>
	</header>

	