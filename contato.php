<?php
/*
	Template Part: Contato
*/
?>

<div id="contato" class="clear conteudo">
	<div class="texto">
		<h2>Contato</h2>
		<h3>Escreva o que quiser</h3>
		
		<p class="destaque">Se quiser falar sobre meus projetos,</p><br /> 
		<p class="destaque">contratar minha criação ou tomar um</p><br />
		<p class="destaque">café, do it please!</p>
		
		<?php
			// query de posts									
			$args = array( 'post_type' => 'page', 'pagename' => 'site' );
			$query = new WP_Query( $args );

			// loop
			while( $query->have_posts() ) : $query->the_post();			
		?>		
		
		<p><?php the_field('contato-main-text'); ?></p>
		
		<?php
			endwhile;

			// reseta post data
			wp_reset_postdata();	
		?>
	</div>				

	<?php
		// query de posts									
		$args = array( 'post_type' => 'page', 'pagename' => 'contato' );
		$query = new WP_Query( $args );

		// loop
		while( $query->have_posts() ) : $query->the_post();			
	?>		
	<div class="formulario">
		<?php the_content(); ?>
	</div>	
	<?php
		endwhile;

		// reseta post data
		wp_reset_postdata();	
	?>					
						
	</div>
</div><!-- #contato -->
