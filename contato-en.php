<?php
/*
	Template Part: Contato (en)
*/
?>

<div id="contato" class="clear conteudo">
	<div class="texto">
		<h2>Contact</h2>
		<h3>Write whatever you want</h3>
		
		<p class="destaque">If you want to talk about my work,</p><br /> 
		<p class="destaque">hire me or have a cup of coffee,</p><br />
		<p class="destaque">do it please!</p>
		
		<?php
			// query de posts									
			$args = array( 'post_type' => 'page', 'pagename' => 'site/en' );
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
		$args = array( 'post_type' => 'page', 'pagename' => 'contato/en' );
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
