<?php remove_filter('the_content','wpautop');?>

<footer id="footerSite">
                
    <section id="footerContenu">
	
	<section id="adresse" class="vcard">
	<?php
				$loop = new WP_query(array('post_type'=>'particulars'));
						
						if($loop->have_posts()):
						while($loop->have_posts()):
						$loop->the_post();
						$postId = get_the_ID();
				?>
				
				<ul class="<?php echo get_post_meta($postId,'classe',true);?>">
				<li><?php the_content();?></li>				
                
				<?php endwhile;
					endif;
					?>
				
				</section>
	
		
         
		
               
                
        
                
                <section id="recapMenu">
				<?php
                    wp_nav_menu('header-menu');
				?>
                </section>
        
        <section id="liensInternet">
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
        <section id="imgFooter">
            <a href="portfolio.php"><img src="http://localhost/wordpress/wp-content/uploads/2012/10/imgFooter.png" width="150" height="150" alt="Voir tous mes projets" /></a>
        </section>
        
       
                
                
                <p>© Copyright Mélanie Klein 2012</p>
    </section>
</footer>
</section>
<script src="<?php get_template_directory_uri() . '/js/jquery-1.8.2.js'; ?>"></script>
<script src="<?php get_template_directory_uri() . '/js/script.js'; ?>"></script>
 </body>
</html>
