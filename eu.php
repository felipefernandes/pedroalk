<?php
/*
	Template Part: Eu
*/
?>

<div id="eu" class="clear conteudo">		
	<div class="apresentacao">		
		<h2>Bem-Vindo</h2>
		<h3>Bom que você chegou !</h3>

		<p class="destaque">Eu sou designer, nascido e criado no</p><br />
		<p class="destaque">Rio de Janeiro, vivendo e trabalhando</p><br />
		<p class="destaque">em São Paulo, Brasil.</p>

		<?php
			// query de posts									
			$args = array( 'post_type' => 'page', 'pagename' => 'site' );
			$query = new WP_Query( $args );

			// loop
			while( $query->have_posts() ) : $query->the_post();			
		?>		
		
		<p><?php the_field('eu-main-text'); ?></p>
		
		<?php
			endwhile;

			// reseta post data
			wp_reset_postdata();	
		?>
		
	</div>
	<div class="curriculo">
		<p>Se você quiser saber mais sobre minha experiência profissional, 
		por favor <strong>baixe o meu currículo</strong>.</p>
		
		<a href="<?php bloginfo('url'); ?>/curriculo_pedroalk_pt.pdf" target="_blank">Download Curriculo</a>					
	</div>
	
</div><!-- #eu -->