<?php remove_filter('the_content','wpautop');
get_header();

    if(have_posts):
    while(have_posts()):
    the_post();
    ?>
    <div id="contenuContact" class="section">
	<?php the_content();
			
    endwhile;
	endif;
	?>
		<section id="formContact">
            <h1>Contactez moi&nbsp;!</h1>
            <section id="form">
                <h1 class="outliner">Formulaire de contact</h1>
                    <form method="post" action="#" id="formulaire">
                        <fieldset>
                            <label for="nom">nom&nbsp;:</label>
                            <input name="nom" id="nom" type="text" placeholder="Prénom Nom" autofocus="autofocus" required />
                            <label for="email">email&nbsp;:</label>
                            <input name="email" id="email" type="email" placeholder="exemple@hotmail.com" required>                        
                            <label for="message">message&nbsp;:</label>
                            <textarea name="message" id="message"  placeholder="Mon message..." required></textarea>
                            <input type="submit" title="envoi du message" name="envoyer" id="envoyer" value="Envoyer" />
                        </fieldset>
                    </form>
                </section>
        </section> 
        <div id="imgContact">
            <img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/11/imgContact.png" alt="Contactez-moi !">
        </div>             
	</div>
    <?php get_footer();