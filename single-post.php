<?php remove_filter('the_content','wpautop');
get_header();

			?>
		<section id="monArticle">

		<header>
				<a href="http://ptfmela.dreamdesgn.com/wordpress/blog.php">Retour à tous les articles</a>
		</header>
		
		<?php			
			 if(have_posts):
        while(have_posts()):
        the_post(); ?>
		
		<article class="articles">

                    <section class="imageArticle">
						<?php the_post_thumbnail('thumbnail');?>
                    </section>
                        <section class="contenuArticle">
                            <h1><?php the_title();?></h1>
                            <p class="dateArticle"><?php _e('Publié le')?> <?php echo(get_the_date());?></p>
                            <p class="texteArticle"><?php the_content();?></p>
                        </section>
                    <footer>
					 <?php get_comments_number();?>
					<p><a href="#" class="boutonCommenter">Commenter</a> | <a href="#"><?php comments_number('0 commentaires','1 commentaire', '% commentaires');?></a></p> 
					</footer>
				<section class="commentSpace">
				<?php comments_template();?>
				</section>
				
		</article> 
			<?php endwhile;
			endif;
			?>
			</section>
<?php			
get_footer();