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

        if(isset($_POST['envoyer'])){
            $flag=1;

            if($_POST['nom'] == ''){
                $flag=0;
                echo "<p class='feedbackForm'>Entre ton nom</p>";
            }
            else if(!preg_match('/[a-zA-Z_x7f-xff][a-zA-Z0-9_x7f-xff]*/',$_POST['nom'])){
                $flag=0;
                echo "<p class='feedbackForm'>Entre un nom valide</p>";
            }

            if($_POST['email']=='') { 
                $flag=0;
                echo "Entre ton email<br>"; 
            } else if(!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$", $_POST['email'])) { 
                $flag=0;
                
                echo "<p class='feedbackForm'>Entre un email valide</p>"; 
            }

            if($_POST['message']==''){
                $flag=0;
                echo 'Entre un message';
            }

            if(empty($_POST)){
                print "<p class='feedbackForm'>Vous devez remplir le formulaire</p>";
                exit;
            }
            else
            {
                if($flag==1)
                {
                    wp_mail(get_option("admin_email"),trim($_POST[nom]) . " vous a envoyé un message de " . get_option("blogname"), stripslashes(trim($_POST[message])) . "From:" . trim($_POST[nom]) . " <".trim($_POST[email]). ">rnReply-To:" . trim($_POST[email]) );
                    echo "<p class='emailSucces'>Merci ! Ton message a bien été envoyé !</p>";
                }
            }
        }
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
            
        </div>             
	</div>
    <?php get_footer();