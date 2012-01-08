<?php
/*
	Template Name: Main Page (en)
*/
?>
<?php get_header(); ?>

<body>

<div id="header">
	<div id="mainmenu">	
		<h1><a href="index.php">Pedro Alk</a></h1>
		<ul id="menu">
			<li id="link-eu" class="active"><a href="#eu">Me</a></li>
			<li id="link-portifolio"><a href="#portifolio">Portifolio</a></li>
			<li id="link-extra"><a href="#extra">Extra</a></li>
			<li id="link-contato"><a href="#contato">Contact</a></li>				
		</ul>
	</div>
</div><!-- #header -->

<div id="wrapper">
	
	<?php get_template_part('eu-en'); ?>
	
	<?php get_template_part('portifolio-en'); ?>	
	
	<?php get_template_part('extra-en'); ?>

	<?php get_template_part('contato-en'); ?>
	
</div><!-- #wrapper -->

<?php get_footer(); ?>