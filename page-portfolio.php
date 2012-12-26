<?php remove_filter('the_content','wpautop');
get_header();

if(have_posts):
			while(have_posts()):
			the_post();?>
			<section id="contenuPortfolio" class="section">
			<?php the_content();
			endwhile;
			endif;?>

			<header>
                    <h1>Mon travail</h1>
                </header>
				
				<section id="categories">
					<section id="catWeb">
						<div class="introCat">
							<img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/12/catWeb.png" alt="Icone catégorie web" title="Catégorie web" width="220" height="220" class="iconeCat alignnone size-full wp-image-165" />
							<hgroup class="texteCat">
							<h2>You know what&nbsp;? I can make </h2>
							<h3>beautiful and ergonomic websites&nbsp;!</h3></p>
							</hgroup>
						</div>
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
								<li><a class="thumbnail" href="<?= $url; ?>"><?php the_post_thumbnail('thumbnail');?></a>
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
						<div class="introCat">
							<img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/12/catGraph.png" alt="Icone catégorie web" title="Catégorie web" width="220" height="220" class="iconeCat alignnone size-full wp-image-165" />
							<hgroup class="texteCat">
							<h2>There is more&nbsp;! I'm also good</h2>
							<h3>at graphics design and layout</h3></p>
							</hgroup>
						</div>
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
								<li><a class="thumbnail" href="<?= $url; ?>"><?php the_post_thumbnail('thumbnail');?></a>
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
				</section>


			</section>
<?php			
get_footer();