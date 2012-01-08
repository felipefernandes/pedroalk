<?php
/*
	Template Part: Extra (en)
*/
?>

<div id="extra" class="clear conteudo">
	<div class="texto">
		<h2>PHOTOGRAPHY,<br />MUSIC AND <br />FLUMINENSE</h2>
		<h3>My 3 passions</h3>		

		<p class="destaque">Extra-curricular activity</p>		
		<?php
			// query de posts									
			$args = array( 'post_type' => 'page', 'pagename' => 'site/en' );
			$query = new WP_Query( $args );

			// loop
			while( $query->have_posts() ) : $query->the_post();			
		?>		
		
		<p><?php the_field('extra-main-text'); ?></p>
		
		<?php
			endwhile;

			// reseta post data
			wp_reset_postdata();	
		?>						
	</div>
	
	<ul class="grid">
		<?php
			// query de posts									
			$args = array( 'post_type' => 'extras', 'orderby' => 'title', 'order' => 'DESC' );
			$query = new WP_Query( $args );

			$count = 0;													

			// loop
			while( $query->have_posts() ) : $query->the_post();			

			$count++;

			$images = get_children(array('post_parent' => get_the_id(), 'post_type' => 'attachment', 'numberposts' => 1, 'post_mime_type' => 'image'));			
			foreach($images as $image) { $extraimagem = $image->guid; }	
		?>								
			<li class="foto <?php if($count % 3 == 0) echo 'last'; ?>" >
				<a href="#">
					<?php if($extraimagem != ""): ?>							
					<a href="<?php echo $extraimagem; ?>"><img src="<?php echo $extraimagem; ?>" alt="<?php the_title(); ?>" /></a>
					<?php endif; ?>			
				</a>
			</li>									
		<?php
			endwhile;

			// reseta post data
			wp_reset_postdata();	
		?>					
	</ul><!-- .grid -->
	
</div><!-- #extra -->