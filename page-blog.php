<?php remove_filter('the_content','wpautop');
get_header();

			if(have_posts):
			while(have_posts()):
			the_post();?>
			<section id="monBlog">
			<?php the_content();
			endwhile;
			endif;?>
				
			<section id="mesArticles">
			
			
			
		<header>
				<h1>Mes réflexions, mes conseils, mes inspirations,...</h1>
		</header>
		
		<?php			
			$loop = new WP_Query('pagename=articles');
			while ($loop->have_posts()): 
			$loop->the_post(); ?>
		
		<article class="articles">

                    <section id="imgArticle1" class="imageArticle">
						<?php the_post_thumbnail('thumbnail');?>
                    </section>
                        <section class="contenuArticle">
                            <h1><?php the_title();?></h1>
                            <p class="dateArticle"><?php _e('Publié le')?> <?php echo(get_the_date());?></p>
                            <p class="texteArticle"><?php the_content();?></p>
                        </section>
                    <footer>
					 <?php get_comments_number();?>
					<p><a href="#">Commenter</a> | <a href="#"><?php comments_number('0 commentaires','1 commentaire', '% commentaires');?></a></p> 
					</footer>
				<section>
				<?php comment_form();?>
				</section>
			
			
				</article> 
		<?php endwhile;
			?>
			</section>
			<aside id="recherche">
                <h1>Recherche</h1>
                <section>
                <form>
                    <input type="search" placeholder="mot-clé" autofocus="autofocus" required/>
                    <input type="submit" value="Rechercher"/>
                   
                </form>
                </section>
            </aside>

                <aside id="tousLesArticles">
                    <header>
            <h1>Archives</h1>
	</header>
                    <section id="historiqueArticles">
					
					
                        <section class="derniersArticles">
                        <h1 class="moisPublication">octobre 2012</h1>
						
                        <ul>
						<?php
						$loop = new WP_Query('pagename=articles&monthnum=10');
						while ($loop->have_posts()): 
						$loop->the_post();
					
					?>
                            <li><a href="#"><?php the_title();?></a></li>
							<?php endwhile;?>
                        </ul>
                        </section>
						
                    </section>
                    
                    
                </aside>
				
				<aside id="newsletter">
                <h1>Newsletter</h1>
                <section>
                    <form>
                        
                        <input type="text" placeholder="exemple@hotmail.com" required/>
                        <input type="submit" value="S'inscrire"/>
                    
                    </form>
                </section>
            </aside>
				</section>

<?php			
get_footer();