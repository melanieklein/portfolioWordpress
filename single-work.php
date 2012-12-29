<?php get_header(); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

            
   
               <h2><?php the_title(); ?></h2>
               <h3 class="artinfo"><span class="author"><?php the_author(); ?></span> </h3>
                   </hgroup>
               </header>



                          <?php the_post_thumbnail('thumbnail'); ?>

                        <p>
                            <?php the_content();?>
                        </p>
                


          

          <?php
            endwhile;
            endif;
          ?>

<?php get_footer(); ?>