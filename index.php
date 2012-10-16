<?php remove_filter('the_content','wpautop');
get_header();

if(have_posts):
while(have_posts()):
        the_post();
        ?>
            <section id="introduction">
			<?php the_content();
			
			endwhile;
			endif;
			?>
			
				<section id="imageIntro">
					<section><a href="http://localhost/wordpress/wp-content/uploads/2012/10/imgIntro2.png"><img class="alignnone size-full wp-image-32" title="Image d'introduction" src="http://localhost/wordpress/wp-content/uploads/2012/10/imgIntro2.png" alt="" width="194" height="317" /></a>
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

							<li class="ic_<?php echo get_post_meta($postId,'icone',true);?>"><a class="logos" href="<?php the_content();?>" title="Mon profil" ></a></li>
									
						<?php
						endwhile;
						endif;
						?>
						</ul>
					</section>
					
					<section id="texteIntro">Bienvenue sur mon site perso !Mes deux passions : le
					<span>webdesign</span> et le <span>graphisme</span>. Je vous invite à consulter
					mon <a href="portfolio.php">portfolio</a>, parcourir mon <a href="blog.php">blog</a> et à me <a href="contact.php">contacter</a> si
					vous êtes intéressés par les services que je propose.</section>
					
				</section>
			</section>
				
				<section id="blocCompetences">
					<section id="competences">
						<section id="graphisme">
							<h2>graphisme / design</h2>
								<ul>
								<?php
								$loop = new WP_query(array('post_type'=>'skills'));
						
								if($loop->have_posts()):
								while($loop->have_posts()):
								$loop->the_post();
								$postId = get_the_ID();
								?>
									<li><?php echo get_post_meta($postId,'nomcompetence',true);?></li>									
								<?php endwhile;
								endif;?>
								</ul>
						</section>
						
						<section id="imageOrdinateur">
							<a href="http://localhost/wordpress/wp-content/uploads/2012/10/computerImg.png">
								<img class="alignnone size-full wp-image-35" title="Image computer graphics design" src="http://localhost/wordpress/wp-content/uploads/2012/10/computerImg.png" alt="Computer graphics design" width="331" height="278" />
							</a>
						</section>
						
						<section id="programmation">
							<h2>programmation</h2>
							<ul>
								<li>Html</li>
								<li>Php</li>
								<li>Javascript</li>
								<li>Jquery</li>
							</ul>
						</section>
					</section>
				</section>
				  <section id="ficheProfil">
<h1>Qui suis-je ?</h1>
<section id="fiche"><section id="details">Je m'apelle Mélanie Klein, j'ai 21 ans et j'habite dans
un petit village de campagne en Province de Liège. J'ai plusieurs passions:
la musique, le cinéma, la lecture, je prends des cours de guitare
et je fais du sport deux fois par semaine.J'entame actuellement
la 3ème et dernière année du bachelier en Haute Ecole de la
Province de Liège, option Infographie. J'apprends beaucoup et met en pratique
mon talent artistique. Je suis spécialisée dans le Web et
j'ai une préférence pour le design web, qui me passionne
vraiment.</section>
<section id="photoMoi">
<a href="http://localhost/wordpress/wp-content/uploads/2012/10/moi2.png">
<img class="alignnone size-full wp-image-34" title="Photo de moi" src="http://localhost/wordpress/wp-content/uploads/2012/10/moi2.png" alt="" width="340" height="369" />
</a>
</section>
</section>
</section>
			
			
			<?php
            get_footer();?>