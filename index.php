<?php
/*
	Template Name: Main Page
*/
?>
<?php get_header(); ?>

<body>

<div id="header">
	<div id="mainmenu">
		<h1><a href="index.php">Pedro Alk</a></h1>
		<ul id="menu">
			<li id="link-eu" class="active"><a href="#eu">Eu</a></li>
			<li id="link-portifolio"><a href="#portifolio">Portifólio</a></li>
			<li id="link-extra"><a href="#extra">Extra</a></li>
			<li id="link-contato"><a href="#contato">Contato</a></li>				
		</ul>
	</div>
</div><!-- #header -->

<div id="wrapper">
	
	<?php get_template_part('eu'); ?>
	
	<?php get_template_part('portifolio'); ?>	
	
	<?php get_template_part('extra'); ?>

	<?php get_template_part('contato'); ?>
	
</div><!-- #wrapper -->

<?php get_footer(); ?>