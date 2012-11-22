<h2><?php _e('commentaires'); ?></h2>

<?php
    if(have_comments()):
        while(have_comments()):
            the_comment();
?>

<article class="commentaire">
	<h2><?php comment_author();?></h2>
	<h3><?php comment_date();?></h3>
    <p><?php comment_text();?></p>
</article>

<?php 

    endwhile;
    endif;

    comment_form();
?>