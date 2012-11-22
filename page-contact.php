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

			<section id="formContact">
                    <h1>Contactez moi&nbsp;!</h1>
                    <section id="form">
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
                   
                <section id="map">
                    <section><small>
                        <a href="https://maps.google.be/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Rue+Jeh
                           oge+47+4190+Xhoris&amp;aq=&amp;sll=50.444713,5.61009&amp;sspn=0.006873,0.01929&amp;ie=UTF8&
                           amp;hq=&amp;hnear=Rue+Jehoge+47,+4190+Ferri%C3%A8res,+Li%C3%A8ge,+R%C3%A9gion+wallonne&amp;
                           t=m&amp;z=14&amp;ll=50.444713,5.61009">
                            agrandir le plan
                        </a>
                    </small>
                    <br />
                    <iframe width="318" height="262" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                            src="https://maps.google.be/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Rue+Jehoge
                            +47+4190+Xhoris&amp;aq=&amp;sll=50.444713,5.61009&amp;sspn=0.006873,0.01929&amp;ie=UTF8&amp;
                            hq=&amp;hnear=Rue+Jehoge+47,+4190+Ferri%C3%A8res,+Li%C3%A8ge,+R%C3%A9gion+wallonne&amp;t=m&
                            amp;z=14&amp;ll=50.444713,5.61009&amp;output=embed">

                    </iframe>
                    </section>
                    
                    <?php $loop = new WP_query(array('post_type'=>'particulars'));
                        
                        if($loop->have_posts()):
                        while($loop->have_posts()):
                        $loop->the_post();
                        $postId = get_the_ID();
                    ?>
                    <section id="coordonnees" class="vcard"><img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/symboleMaison.png" width="161" height="139" title="Coordonnées" alt="Coordonnées de Mélanie Klein" /><?php the_content();?>
                    </section>
                    <?php endwhile;
                    endif;?>
                 
                </section>


			</section>
<?php			
get_footer();