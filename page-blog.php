<?php remove_filter('the_content','wpautop');
get_header();?>
	<section id="contenerBlog" class="section">
		<h1 class="outliner">Mon blog</h1>
		<? 
		if(have_posts):
		while(have_posts()):
		the_post();?>
		
		<div id="monBlog">
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
					<h1 class="outliner"><?php the_title();?></h1>
		            <div class="imageArticle">
						<a href="<?php echo get_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
		            </div>
		            <div class="contenuArticle">
		                <em><a href="<?php echo get_permalink();?>"><?php the_title();?></a></em>
		                <p class="dateArticle"><?php _e('Publié le')?> <?php echo(get_the_date());?></p>
		                <p class="texteArticle"><?php the_excerpt();?></p>
		            </div>
				</article> 

				<?php endwhile;
				?>
			</section>

			<aside id="recherche">
                <h1>Recherche</h1>
                <div>
                <form>
                    <input type="search" placeholder="mot-clé" autofocus="autofocus" required/>
                    <input type="submit" value="Rechercher"/>
                   
                </form>
                </div>
            </aside>

            <aside id="tousLesArticles">
                <h1>Archives</h1>
                <div id="historiqueArticles">
                    <section class="derniersArticles">
                        <h1 class="moisPublication">octobre 2012</h1>						
                        <ul>
							<?php
							$loop = new WP_Query('pagename=articles&monthnum=10');
							while ($loop->have_posts()): 
							$loop->the_post(); ?>

	                        <li><a href="#"><?php the_title();?></a></li>
								
							<?php endwhile;?>
                        </ul>
	                    <h1 class="moisPublication">novembre 2012</h1>							
	                    <ul>
							<?php
							$loop = new WP_Query('pagename=articles&monthnum=11');
							while ($loop->have_posts()): 
							$loop->the_post(); ?>
		                        
		                    <li><a href="#"><?php the_title();?></a></li>
								
							<?php endwhile;?>
	                    </ul>
                    </section>						
                </div>                    
            </aside>
				
			<aside id="newsletter">
                <h1>Newsletter</h1>
                <div>
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="http://facebook.us6.list-manage1.com/subscribe/post?u=4df46a13790c332afa736a5a0&amp;id=d2835a257f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Adresse email&nbsp;:<span class="asterisk">*</span>
				</label>
					<input type="email" value="" placeholder="exemple@mail.com" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>	<div class="clear"><input type="submit" value="S'inscrire" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</form>
				</div>

				<!--End mc_embed_signup-->
                </div>
            </aside>
		</div>
	</section>
	<?php get_footer();