<?php remove_filter('the_content','wpautop');
get_header();

if(have_posts):
while(have_posts()):
        the_post();
        ?>
            <section id="contenuContact">
			<?php the_content();
			
			endwhile;
			endif;
			?>
			</section>
<?php			
get_footer();