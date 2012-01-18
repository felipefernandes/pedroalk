<?php
/*
	Template Name: Job Single
*/
?>
<script>
	$(document).ready(function() {
		$('#fechar a').live('click', function() {
			$('#job-inside').fadeOut('fast', function() {				
				if(ativo == "motion") {
					$("#jobs-menu #motion a").trigger('click');
				} else { 
					$("#jobs-menu #grafico a").trigger('click');
				}
				
			}); 
			return false;
		});			
		
		$('.job_galeria').nivoSlider({
			effect: 'fade',
			pauseTime: 4000,
			startSlide: 1,			
			prevText: ' <', // Prev directionNav text
	        nextText: '> ', // Next directionNav text
			controlNav: true,	
			controlNavThumbs: false,
			controlNavThumbsSearch: '.jpg', // Replace this with...
	        controlNavThumbsReplace: '_thumb.jpg' // ...this in thumb Image src
		});	
		
		$(".grid a[href$='.jpg'], .grid a[href$='.jpeg'], .grid a[href$='.gif'], .grid a[href$='.png']").prettyPhoto({
			animationSpeed: 'normal', /* fast/slow/normal */
			padding: 40, /* padding for each side of the picture */
			opacity: 0.7, /* Value betwee 0 and 1 */
			showTitle: false /* true/false */			
		});		
			
	});		
</script>

<?php
	$post = get_post($_POST['id']);
	$post_id = $_POST['id'];
?>

<div id="fechar"><a href="#">X</a></div>

<?php if ($post) : ?>
	<?php setup_postdata($post); ?>
	
	<div class="placeholder">		
		<?php if(get_post_meta($post_id, 'video_url', true)) { //verifica se o video URL está preenchido, se positivo printa o box de video.	  								
				/*
					Which VIDEO SOURCE?
					A partir da URL pega Videos do youtube ou vimeo, e printa o respectivo Embed code.
				*/
				$video_url = get_post_meta($post_id, 'video_url', true);						
				
				if(preg_match("/\?v=/", $video_url)) { //verifico se é YOUTUBE
					
					$video_yt = explode('?v=', $video_url);	 //extraio arrays da url
					$youtube_id = $video_yt[1];
			?>
				<iframe width="416" height="353" src="http://www.youtube.com/embed/<?php echo $youtube_id; ?>" 
					frameborder="0" allowfullscreen></iframe>														
			<?php	
				} else { //tratamento para VIMEO
					preg_match('/(\d+)$/', $video_url, $matches); // extrai o ID do video vimeo
					$vimeo_id = $matches[1];
			?>
				<iframe src="http://player.vimeo.com/video/<?php echo $vimeo_id; ?>?title=0&amp;byline=0&amp;portrait=0" 
					width="416" height="353" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
			<?php				
				}  
				/* 
					Which VIDEO SOURCE? (END) 
				*/							
	 		  } else {
		?>	
			 	<div class="job_galeria grid">
					<?php while(the_repeater_field('job_galeria')): ?>	
			    		<a href="<?php the_sub_field('job_galeria_img'); ?>">
							<img src="<?php bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php the_sub_field('job_galeria_img'); ?>&h=353&w=416" alt="<?php the_sub_field('legenda'); ?>" />
						</a>
					<?php endwhile; ?>
					<div id="htmlcaption" class="nivo-html-caption">
					<?php while(the_repeater_field('job_galeria')): ?>							
					    <span><?php the_sub_field('legenda'); ?></span>.
					<?php endwhile; ?>				
					</div>
				</div>
		<?php 
		 	  } 
		?>
		
		
	</div>
	
	<div class="infos">
		
		<h5><?php the_title(); ?></h5>		
		<?php
			if (strpos($_SERVER['REQUEST_URI'], '/en')) { //verifica se esta na versao ingles ou portugues
				the_field('conteudo');
			} else {
				the_field('conteudo_en');				
			}		
		?>		
	</div>
	
<?php endif; ?>	