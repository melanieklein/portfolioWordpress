<?php remove_filter('the_content','wpautop');
get_header();

if(have_posts):
			while(have_posts()):
			the_post();?>
			<section id="contenuPortfolio">
			<?php the_content();
			endwhile;
			endif;?>

			<header>
                    <h1>Mon travail</h1>
                </header>
				
				<section id="categories">
					<section id="catWeb">
						<section class="iconeCat" id="graphismeCat">
							<img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/11/catWeb.png" alt="Icone catégorie web" title="Catégorie web" width="309" height="310" class="alignnone size-full wp-image-165" />
						</section>
						<section id="conteneurSlider">
							<section class="button" id="leftButton">
								<button><</button>
							</section>
							<section id ="carousel" class="imagesPortfolio">
							
							

							<ul id="many" class="clearfix">
								<?php
								$loop = new WP_query(array('post_type'=>'works'));
								
								if($loop->have_posts()):
								while($loop->have_posts()):
								$loop->the_post();
								$postId = get_the_ID();
								$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($postId->ID), 'full');
								$url = $thumb['0'];
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
								?>
								<li><a class="thumbnail" href="<?= $url; ?>"><?php the_post_thumbnail('medium');?></a>
								<figcaption>		                            
		                            <p><?php the_content();?></p>                            
		                        </figcaption>
								</li>								
		                        <?php endwhile;
								endif;?>
							</ul>
							
							</section>
							<section class="button" id="rightButton">
								<button>></button>
							</section>
						</section>
					</section>
					
					
					<section id="catGraph">
						<section class="iconeCat">
							<img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/11/catGraph.png" alt="Icone catégorie graphisme" title="Catégorie graphisme" width="243" height="242" class="alignnone size-full wp-image-160" />
						</section>
						<section class="imagesPortfolio">
						<ul>
						<li><a href="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/gabaritTravail.png"><img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/gabaritTravail.png" alt="" title="En attendant les travaux" width="300" height="422" class="alignnone size-full wp-image-164" /></a>
						<figcaption>
                            <h3>Créations infographiques 2D</h3>
                            <p>Affiche d'un festival au choix</p>                            
                        </figcaption>
						</li>
						<li><a href="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/gabaritTravail.png"><img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/gabaritTravail.png" alt="" title="En attendant les travaux" width="300" height="422" class="alignnone size-full wp-image-164" /></a>
						<figcaption>
                            <h3>Logique et Argumentation de l'Image</h3>
                            <p>Création d'une pochette de vinyl d'un groupe/artiste fictif.</p>                            
                        </figcaption></li>
						<li><a href="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/gabaritTravail.png"><img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/gabaritTravail.png" alt="" title="En attendant les travaux" width="300" height="422" class="alignnone size-full wp-image-164" /></a><figcaption>
                            <h3>Créations infographiques 2D</h3>
                            <p>Intégration d'un personnage sur un fond composé d'éléments situé sur le personnage.</p>                            
                        </figcaption></li>
						</ul>
						</section>
					</section>
				</section>


			</section>
<?php			
get_footer();