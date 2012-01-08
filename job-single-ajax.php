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
	});
</script>

<?php
	$post = get_post($_POST['id']);
?>

<div id="fechar"><a href="#">X</a></div>

<?php if ($post) : ?>
	<?php setup_postdata($post); ?>
	
	<div class="placeholder">
		<img src="<?php bloginfo('template_url') ?>/images/job-video-placeholder.png" />
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