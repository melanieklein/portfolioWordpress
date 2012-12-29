<?php remove_filter('the_content','wpautop');
get_header(); ?>

		<div id="monArticle" class="section">
			<header class="retourArticles">
				<a href="http://ptfmela.dreamdesgn.com/wordpress/blog">Retour à tous les articles</a>
			</header>
		
			<?php			
			if(have_posts):
        	while(have_posts()):
        	the_post(); ?>
		
			<article class="article">
				<h1 class="outliner"><?php the_title();?></h1>
                <div>
	                <div class="imageArticle">
						<?php the_post_thumbnail('medium');?>
	                </div>
	                <div class="contenuArticle">
	                    <em><?php the_title();?></em>
	                    <p class="dateArticle"><?php _e('Publié le')?> <?php echo(get_the_date());?></p>
	                    <p class="texteArticle"><?php the_content();?></p>
	                </div>
	            </div>
                <footer>
                	<?php get_comments_number();?>
                	<p><?php comments_number('0 commentaires','1 commentaire', '% commentaires');?></p>					
				</footer>
				<div class="commentSpace">
				<?php comments_template();?>
				</div>	
			</article> 

			<?php endwhile;
			endif;
			?>

			<footer class="retourArticles" >
				<a href="http://ptfmela.dreamdesgn.com/wordpress/blog">Retour à tous les articles</a>
			</footer>
		</div>
		<?php get_footer();