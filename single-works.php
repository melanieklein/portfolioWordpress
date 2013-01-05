<?php get_header(); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
              <?php add_image_size( 'workSize', 413, auto, true ); ?>
            


 <div id="singleWork" class="section">

              <header class="retourArticles">
              <a href="http://ptfmela.dreamdesgn.com/wordpress/portfolio">Retour à tous les travaux</a>
              </header>
             <article class="article">                

              <div class="imgTravail">    
                  <?php the_post_thumbnail('workSize'); ?>
                </div>
                <div class="infosTravail">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content();?></p>    
               </div>
               </article>
               <footer class="retourArticles">
        <a href="http://ptfmela.dreamdesgn.com/wordpress/portfolio">Retour à tous les travaux</a>
</footer>
             
           </div>


          <?php
            endwhile;
            endif;
          ?>

<?php get_footer(); ?>