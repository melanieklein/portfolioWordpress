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
				
			<div id="categories">
				<section id="catWeb">
					<h1 class="outliner">Mes travaux sur le web</h1>
					<div class="introCat">
						<img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/12/catWeb.png" alt="Icone catégorie web" title="Catégorie web" width="220" height="220" class="iconeCat alignnone size-full wp-image-165" />
						<div class="texteCat">
							<p>You know what&nbsp;? I can make </p>
							<p>beautiful and ergonomic websites&nbsp;!</p>
						</div>
					</div>
					<div id="conteneurSlider">
						<div class="button" id="leftButton">
							<button><</button>
						</div>
						<div id ="carousel" class="imagesPortfolio">
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
							
						</div>
						<div class="button" id="rightButton">
							<button>></button>
						</div>
					</div>
				</section>
						
				<section id="catGraph">
					<h1 class="outliner">Mes travaux de graphisme</h1>
					<div class="introCat">
						<img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/12/catGraph.png" alt="Icone catégorie web" title="Catégorie web" width="220" height="220" class="iconeCat alignnone size-full wp-image-165" />
						<div class="texteCat">
							<p>There is more&nbsp;! I'm also good</p>
							<p>at graphics design and layout</p>
						</div>
					</div>
					<div id="conteneurSlider">
						<div class="button" id="leftButton">
							<button><</button>
						</div>
						<div id ="carousel" class="imagesPortfolio">
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
						</div>
						<div class="button" id="rightButton">
							<button>></button>
						</div>
					</div>
				</section>
			</div>
		</section>
		<?php get_footer();