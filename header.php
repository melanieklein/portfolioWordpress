<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=<?php bloginfo('language');?>> <!--<![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <html lang='fr'>
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
        <link rel="icon" type="image/png" href="img/icon.png">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <meta name="description" content="Site personnel de Melanie Klein, webdesigner. Vous y trouverez son profil, son portfolio ainsi que ses coordonnées pour un éventuel contact">
        <meta name="keywords" content="Mélanie, Klein, webdesigner, webdesign, web, infographie, xhoris, liège, hepl, inpres, haute école, graphisme, seraing, site, web, portfolio" ></meta>
        <link rel="icon" type="image/png" href="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2013/01/icon2.png">
        <link rel="stylesheet" href=<?php bloginfo('stylesheet_url');?>>       
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
         
        <?php wp_head();?>
    </head>
    <body id="accueil">
        <h1 class="outliner">Portfolio de Mélanie Klein - webdesigner</h1>
        <div id="contenu">
    		<header id="banner" class="section">
                <a href="index.php" title="Retour vers l'accueil" id="logo">
                    <img src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/logoMK.png" width="340" height="100" alt="Mélanie Klein Webdesigner" title="Retour à l'accueil"/>
                </a>
                        
                <p>&laquo;&nbsp;<?php blogInfo('description');?>&nbsp;&raquo;<a href="http://quotesondesign.com" title="Source de la citation" target="_blank">*</a></p>
            </header>
            
            <div id="menu">
                <nav id="navigation">
                <h1 class="outliner">Menu de navigation</h1>
				    <?php wp_nav_menu('header-menu'); ?>                                         
				</nav>	
            </div>


			