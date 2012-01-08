<?php
/*
	Template Part: Portifolio (en)
*/
?>
<script src="<?php bloginfo('template_url'); ?>/includes/jobs.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function(){ 
		//pagina interna de job, abre a página job-single-ajax.php via AJAX
		//parametro: post id, via POST
		$('.slideblock .job a').live('click', function() {
			var post_id = $(this).attr("rel");	

			if(ativo == "motion") {
				$('.motion').fadeOut('fast');
			} else { 
				$(".grafico").fadeOut('fast');
			}	

			$('#job-inside').fadeOut('fast').load("<?php bloginfo('url'); ?>/job", {id:post_id}, function() {
				$('#job-inside').fadeIn('slow'); });
			return false;
		});		
	});
</script>

<div id="portifolio" class="clear conteudo">
	
	<h2>Roll up your sleeves</h2>
	<h3>Get to know my recent projects</h3>
	
	Choose a category:
	<ul id="jobs-menu">
		<li id="motion" class="selected"><a href="#">Motion</a></li>
		<li id="grafico" ><a href="#">Graphic</a></li>
	</ul>	
	
	<?php
		//faz a contagem de posts publicados nas categorias correspondentes (motion ou grafico)
		global $wpdb;
		$motion_count = $wpdb->get_var( $wpdb->prepare( "SELECT count(*) FROM wp_term_relationships INNER JOIN wp_posts ON wp_term_relationships.`object_id` = wp_posts.`ID` WHERE ((wp_posts.`post_status`='publish')  AND (wp_term_relationships.term_taxonomy_id = 4));" ) );
		$grafico_count = $wpdb->get_var( $wpdb->prepare( "SELECT count(*) FROM wp_term_relationships INNER JOIN wp_posts ON wp_term_relationships.`object_id` = wp_posts.`ID` WHERE ((wp_posts.`post_status`='publish')  AND (wp_term_relationships.term_taxonomy_id = 5));" ) );
	?>	
	
	<div id="job-inside"></div>		

	<div id="job-grid-motion" class="motion grid">

	    <div class="jcarousel-scroll" style="<?php if ($motion_count < 9) { echo 'display:none;'; } else { echo 'display:block;'; } ?>">
	      <form action="">
	        <a href="#" class="mycarousel-prev"><span class="esq"></span>Anterior</a>
	        <a href="#" class="mycarousel-next">Próxima<span class="dir"></span></a>
	      </form>
	    </div>		

		<ul class="slidergrid clear">
			<?php
				// query de posts									
				$args = array( 'post_type' => 'jobs', 'category_name' => 'motion', 'orderby' => 'title', 'order' => 'DESC' );
				$query = new WP_Query( $args );

				$count = 0;													

				// loop
				while( $query->have_posts() ) : $query->the_post();			

				$count++;
			?>
			<?php if($count == 1): ?>
				<li class="slideblock">
			<?php endif; ?>			
					<div class="job <?php if($count % 4 == 0) echo 'last'; ?>" >
						<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>">					
							<?php the_post_thumbnail('jobs-thumb'); ?>
							<h4><?php the_title(); ?></h4>
							<?php the_field('tipo_en'); ?>
						</a>
					</div>					

			<?php if($count % 8 == 0): ?>
				</li><!-- .slideblock -->
				<li class="slideblock">
			<?php endif; ?>

			<?php
				endwhile;

				// reseta post data
				wp_reset_postdata();	
			?>
				</li><!-- .slideblock -->

		</ul><!-- #slidegrid -->

	</div><!-- #job-grid -->		

	<div id="job-grid-grafico" class="grafico grid">

	    <div class="jcarousel-scroll" style="<?php if ($grafico_count < 9) { echo 'display:none;'; } else { echo 'display:block;'; } ?>">
	      <form action="">
	        <a href="#" class="mycarousel-prev"><span class="esq"></span>Anterior</a>
	        <a href="#" class="mycarousel-next">Próxima<span class="dir"></span></a>
	      </form>
	    </div>		

		<ul class="slidergrid clear">
			<?php
				// query de posts									
				$args = array( 'post_type' => 'jobs', 'category_name' => 'grafico', 'orderby' => 'title', 'order' => 'DESC' );
				$query = new WP_Query( $args );

				$count = 0;													

				// loop
				while( $query->have_posts() ) : $query->the_post();			

				$count++;
			?>
			<?php if($count == 1): ?>
				<li class="slideblock">
			<?php endif; ?>			
					<div class="job <?php if($count % 4 == 0) echo 'last'; ?>" >
						<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>">					
							<?php the_post_thumbnail('jobs-thumb'); ?>
							<h4><?php the_title(); ?></h4>
							<?php the_field('tipo_en'); ?>
						</a>
					</div>					

			<?php if($count % 8 == 0): ?>
				</li><!-- .slideblock -->
				<li class="slideblock">
			<?php endif; ?>

			<?php
				endwhile;

				// reseta post data
				wp_reset_postdata();	
			?>
				</li><!-- .slideblock -->

		</ul><!-- #slidegrid -->

	</div><!-- #job-grid -->		

</div><!-- #portifolio -->