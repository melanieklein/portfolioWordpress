		<?php remove_filter('the_content','wpautop');?>

		<footer id="footerSite">
		    <section id="footerContenu" class="section">
		    	<h1 class="outliner">Footer du site</h1>
		    	<nav id="recapMenu">
		    		<h1 class="outliner">Récapitulatif du menu de navigation</h1>
						<?php
		                    wp_nav_menu('header-menu');
						?>
		        </nav>

				<?php $loop = new WP_query(array('post_type'=>'particulars'));			
				if($loop->have_posts()):
				while($loop->have_posts()):
				$loop->the_post();
				$postId = get_the_ID();
				?>

				<section id="adresse" class="vcard">
					<h1 class="outliner">Mes coordonnées</h1>
					<?php the_content();?>				
				</section>

				<?php endwhile;
				endif;?>
		           
		        <div id="liensInternet">
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
		        </div>                 
		        <p>© Copyright Mélanie Klein 2012</p>
		    </section>
		</footer>
	</div>
	<script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/jquery.js"></script>
	<script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/script.js"></script>
	<script>
				jQuery( function() {
					jQuery( '#many a.thumbnail' ).heplbox();
				} );
	</script>
 </body>
</html>
