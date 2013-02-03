<?php remove_filter('the_content','wpautop');
get_header();

	if(have_posts):
	while(have_posts()):
        the_post();
        ?>
        <section id="introduction" class="section">
        	<h1 class="outliner">Introduction et présentation</h1>

			<?php the_content();
			endwhile;
			endif;
			?>
			
			<div id="imageIntro">
				<div>
					<img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2013/02/bohommeOmg.png" alt="Oh mon dieu j'adore le design" title="Oh My God I Love Design" width="193" height="316" class="alignnone size-full wp-image-154" />
				</div>
			</div>		

			<div id="blocIntro">
				<div>
					<div id="texteOmg">
						<p>OH MON DIEU</p>
						<p>J'ADORE LE DESIGN</p>
					</div>
				</div>
					
				<section id="logosWeb">
					<h1 class="outliner">Réseaux sociaux</h1>
					<ul>
						<?php
						$loop = new WP_query(array('post_type'=>'homelinks'));
						
						if($loop->have_posts()):
						while($loop->have_posts()):
						$loop->the_post();
						$postId = get_the_ID();
						?>

						<li class="ic_<?php echo get_post_meta($postId,'icone',true);?>"><a class="logos" href="<?php the_content();?>" title="Mon profil <?php the_title();?>" ></a></li>
									
						<?php
						endwhile;
						endif;
						?>
					</ul>
				</section>
					
				<section id="texteIntro">
					<h1 class="outliner">Introduction</h1>
					<p>Mes deux passions&nbsp;: le <span>webdesign</span> et le <span>graphisme</span>. J'ai aussi des compétences en <span>programmation</span>.</p> 
					<p>Je vous invite à consulter mon <a href="portfolio">portfolio</a>, parcourir mon <a href="blog">blog</a> et à me <a href="contact">contacter</a> si
						vous êtes intéressés par les services que je propose.</p>
					<div id="imgLienPortfolio">
            			<a href="portfolio"><img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2013/02/imgFooter.png" width="150" height="150" alt="Voir tous mes projets - Portfolio de Mélanie Klein" title="Aller vers le portfolio" /></a>
        			</div>
				</section>	
			</div>
		</section>
				
		<section id="ficheProfil" class="section">
			<h1>À propos de moi</h1>
			<div id="fiche">
				<div id="details">
					<p>Je m'apelle <span>Mélanie</span>, j'ai 21 ans et j'habite en Province de <span>Liège</span>.</p> 
					<p>Je suis spécialisée dans le <span>Web</span> et j'ai une préférence pour le <span>webdesign</span>, qui me passionne vraiment.</p>
					<p>J'ai d'autres passions comme la musique, le cinéma, la lecture. Je suis également des cours de guitare et je fais du sport deux fois par semaine.</p>
				</div>
				<div id="photoMoi">
					<a href="contact"><img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2013/02/moi.png" alt="Portrait vectoriel de Mélanie Klein - lien vers page de contact" title="Contactez moi !" width="340" height="369" class="alignnone size-full wp-image-153" /></a>
				</div>
			</div>
		</section>

		<section id="blocCompetences" class="section">
			<h1 class="outliner">Mes compétences</h1>
			<div id="competences">
				<section id="graphisme">
					<h2>graphisme / design</h2>
					<ul>
						<?php
						$loop = new WP_query(array('post_type'=>'skills', 'posts_per_page'));
						
						if($loop->have_posts()):
						while($loop->have_posts()):
						$loop->the_post();
						$postId = get_the_ID();
						?>

						<li><?php echo get_post_meta($postId,'graphisme',true);?></li>

						<?php endwhile;
						endif;?>
					</ul>
				</section>
						
				<div id="imageOrdinateur">
					<a href="portfolio"><img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2013/02/computerImg.png" alt="Computer Graphics Design - lien vers portfolio" title="Venez voir mon travail !" width="332" height="279" class="alignnone size-full wp-image-151" /></a>
				</div>
						
				<section id="programmation">
					<h2>programmation</h2>
					<ul>
						<?php
						$loop = new WP_query(array('post_type'=>'skills', 'posts_per_page'));
						
						if($loop->have_posts()):
						while($loop->have_posts()):
						$loop->the_post();
						$postId = get_the_ID();
						?>
							<li><?php echo get_post_meta($postId,'progra',true);?></li>									
						<?php endwhile;
						endif;?>
					</ul>
				</section>
			</div>
		</section>
			
		<?php get_footer();?>