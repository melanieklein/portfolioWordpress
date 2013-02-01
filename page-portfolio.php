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
						<img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2013/01/catWeb.png" alt="Catégorie web" title="Catégorie web" width="220" height="220" class="iconeCat alignnone size-full wp-image-165" />
						<div class="texteCat">
							<p>Tu sais quoi&nbsp;? J'aime créer</p>
							<p>de beaux sites ergonomiques&nbsp;!</p>
						</div>
					</div>
					<ul class="travaux">
						<?php
						$args = array('post_type' => 'works', 'categories' => 'web');
						$loop = new WP_query($args);
								
						if($loop->have_posts()):
						while($loop->have_posts()):
						$loop->the_post();
						$postId = get_the_ID();
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($postId->ID), 'full');
						$url = $thumb['0'];
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
						add_image_size( 'portfolioSize', 200, 200, true );
						?>
						<li><a href="<?php the_permalink();?>"><?php the_post_thumbnail('portfolioSize');?></a></li>
						<?php endwhile;
						endif;?>
					</ul>			
				</section>
						
				<section id="catGraph">
					<h1 class="outliner">Mes travaux de graphisme</h1>
					<div class="introCat">
						<img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2013/01/catGraph.png" alt="Catégorie graphisme" title="Catégorie web" width="220" height="220" class="iconeCat alignnone size-full wp-image-165" />
						<div class="texteCat">
							<p>Il y a plus&nbsp;! Je suis aussi douée</p>
							<p>en graphisme et en mise en page</p>
						</div>
					</div>
					<ul class="travaux">
						<?php
						$args = array('post_type' => 'works', 'categories' => '2d');
						$loop = new WP_query($args);
								
						if($loop->have_posts()):
						while($loop->have_posts()):
						$loop->the_post();
						$postId = get_the_ID();
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($postId->ID), 'full');
						$url = $thumb['0'];
						add_image_size( 'portfolioSize', 200, 200, true );						
						?>
						<li><a href="<?php the_permalink();?>"><?php the_post_thumbnail('portfolioSize');?></a></li>
						<?php endwhile;
						endif;?>
					</ul>
				</section>
				<section id="catDivers">
					<h1 class="outliner">Mes travaux dans diverses catégories</h1>
					<div class="introCat">
						
						<div class="texteCat">
							<p>Et j'ai encore d'autres talents&nbsp;!</p>
						</div>
					</div>
					<ul class="travaux">
						<?php
						$args = array('post_type' => 'works', 'categories' => 'divers');
						$loop = new WP_query($args);
								
						if($loop->have_posts()):
						while($loop->have_posts()):
						$loop->the_post();
						$postId = get_the_ID();
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($postId->ID), 'full');
						$url = $thumb['0'];
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
						add_image_size( 'portfolioSize', 200, 200, true );
						?>
						<li><a href="<?php the_permalink();?>"><?php the_post_thumbnail('portfolioSize');?></a></li>
						<?php endwhile;
						endif;?>
					</ul>			
				</section>
			</div>
		</section>
		<?php get_footer();?>