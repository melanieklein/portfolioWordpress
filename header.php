<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=<?php bloginfo('language');?>> <!--<![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <html lang='fr'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name');?></title>
        <link rel="icon" type="image/png" href="img/icon.png">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <meta name="description" content="Site personnel de Melanie Klein - webdesigner">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href=<?php bloginfo('stylesheet_url');?>>        
        <?php wp_head();?>
    </head>
    <body id="accueil">
        <h1 class="outliner">Portfolio de Mélanie Klein - webdesigner</h1>
        <div id="contenu">
    		<header id="banner" class="section">
                <a href="index.php" title="Retour vers l'accueil" id="logo">
                    <img class="imageRetina" src="http://ptfmela.dreamdesgn.com/wordpress/wp-content/uploads/2012/10/logoMK.png" width="681" height="200" alt="Mélanie Klein Webdesigner" title="Retour à l'accueil"/>
                </a>
                        
                <p>&laquo;&nbsp;<?php blogInfo('description');?>&nbsp;&raquo;<a href="http://quotesondesign.com" title="Source de la citation">*</a></p>
            </header>
            
            <div id="menu">
                <nav id="navigation">
                <h1 class="outliner">Menu de navigation</h1>
				    <?php wp_nav_menu('header-menu'); ?>                                         
				</nav>	
            </div>

			