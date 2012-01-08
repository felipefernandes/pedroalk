<?php
/*
	Template Part: Eu (en)
*/
?>

<div id="eu" class="clear conteudo">		
	<div class="apresentacao">		
		<h2>Welcome</h2>
		<h3>Great to have you here !</h3>

		<p class="destaque">I am a Designer, born and raised in</p><br />
		<p class="destaque">Rio de Janeiro, currently living and </p><br />
		<p class="destaque">working in São Paulo, Brasil.</p>


		<?php
			// query de posts									
			$args = array( 'post_type' => 'page', 'pagename' => 'site/en' );
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
		<p>If you want to know more about my professional experience, 
		please <strong>download my resume</strong> below.</p>
		
		<a href="<?php bloginfo('url'); ?>/curriculo_pedroalk_en.pdf" target="_blank">Download Resume</a>					
	</div>
	
</div><!-- #eu -->