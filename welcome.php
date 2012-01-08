<?php
/*
	Template Name: Welcome
*/
?>
<?php get_header(); ?>

<body style="overflow: hidden;">

<div id="intro">
	<div class="logo">
		<h1>Pedro Alk</h1>
		<h2>motion and graphic designer</h2>
	</div>
	<ul>
		<li><a href="<?php bloginfo('url'); ?>/site" title="Entrar (versão português)">Entrar</a><span>português</span></li>
		<li><a href="<?php bloginfo('url'); ?>/site/en" title="Enter (english version)">Enter</a><span>english</span></li>
	</ul>
</div><!-- #intro -->

<img src="<?php bloginfo('template_url'); ?>/images/bg-intro.jpg" class="source-image" />

<?php get_footer(); ?>