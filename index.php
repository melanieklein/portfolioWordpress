<?php remove_filter('the_content','wpautop');
get_header();

if(have_posts):
while(have_posts()):
        the_post();
        ?>
            <section id="introduction" class="section">
			<?php the_content();
			
			endwhile;
			endif;
			?>
			
				<section id="imageIntro">
					<section>
					<img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/bonhommeOmg.png" alt="Bonhomme criant &quot;Oh my god I love design&quot;" title="Oh My God I Love Design" width="386" height="632" class="alignnone size-full wp-image-154" />
					</section>
				</section>
						
				

				<section id="blocIntro">
					<section>
							<section id="texteOmg">
								<h2>OH MY GOD</h2>
								<h3>I LOVE DESIGN</h3>
							</section>
					</section>
					
					<section id="logosWeb">
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
						<p>Mes deux passions&nbsp;: le <span>webdesign</span> et le <span>graphisme</span>. J'ai aussi des compétences en <span>programmation</span>.</p> 
						<p>Je vous invite à consulter mon <a href="portfolio">portfolio</a>, parcourir mon <a href="blog">blog</a> et à me <a href="contact">contacter</a> si
						vous êtes intéressés par les services que je propose.</p>
						<section id="imgLienPortfolio">
            		<a href="portfolio"><img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/11/imgFooter.png" width="300" height="300" alt="Lien pour voir tous mes projets - Portfolio de Mélanie Klein" title="Aller vers le portfolio" /></a>
        			</section>
					</section>
					
					</section>
			</section>
				
			<section id="ficheProfil" class="section">
<h1>À propos de moi</h1>
<section id="fiche"><section id="details">
	<p>Je m'apelle <span>Mélanie</span>, j'ai 21 ans et j'habite en Province de <span>Liège</span>.</p> 
	<p>Je suis spécialisée dans le <span>Web</span> et j'ai une préférence pour le <span>webdesign</span>, qui me passionne vraiment.</p>
	<p>J'ai d'autres passions comme la musique, le cinéma, la lecture. Je suis également des cours de guitare
et je fais du sport deux fois par semaine.</p>
</section>
<section id="photoMoi">
<a href="contact"><img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/moiVecto.png" alt="Portrait vectoriel de Mélanie Klein - lien vers page de contact" title="Contactez moi !" width="681" height="739" class="alignnone size-full wp-image-153" /></a>
</section>
</section>
</section>

				<section id="blocCompetences" class="section">
					<section id="competences">
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
						
						<section id="imageOrdinateur">
							<a href="portfolio"><img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/computerGraphicsDesign.png" alt="Computer Graphics Design - lien vers portfolio" title="Venez voir mon travail !" width="664" height="559" class="alignnone size-full wp-image-151" /></a>
						</section>
						
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
					</section>
				</section>
				  
			
			
			<?php
            get_footer();?>