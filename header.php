<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=<?php bloginfo('language');?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name');?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


        <link rel="stylesheet" href=<?php bloginfo('stylesheet_url');?>>
			
         <?php wp_head();?>
    </head>
    <body id="accueil">
        <section id="contenu">
		
		<header id="banner">
                    <a href="index.php" title="Retour vers l'accueil" id="logo">
                        <img src="http://localhost/wordpress/wp-content/uploads/2012/10/logo3.png" width="340" height="100" alt="Mélanie Klein Webdesigner" title="Retour à l'accueil"/>
                    </a>
                    
                    <h2>&laquo;&nbsp;<?php blogInfo('description');?>&nbsp;&raquo;<a href="http://quotesondesign.com" title="Source de la citation">*</a></h2>

            </header>
            
            <section id="menu">
                    
                    <nav id="navigation">
					<?php 
					wp_nav_menu('header-menu');
					?>                                         
					</nav>
					
            </section>

			