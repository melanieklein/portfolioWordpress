<?php 


add_action('after_setup_theme', 'portfolio_setup');
add_action('init','create_post_type');
add_filter('excerpt_more', 'new_excerpt_more');



if(!function_exists(portfolio_setup)){
    function portfolio_setup(){
        add_theme_support('post-thumbnails');
        if(!function_exists('add_image_size')){
            
                add_image_size('folio-work',100,100,false);
                             
        }
        
        register_nav_menu('header-menu',__('Header Menu','titi'));
    }
    
}

if(!function_exists('create_post_type')){
    function create_post_type(){
        register_post_type('works',
                array(
                    'labels' => array(
                        'name' => __('Travaux'),
                        'singular_name' => __('Travail')
                        ),
                    'supports' => array('title','editor','thumbnail','post-formats'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );
		register_post_type('homelinks',
                array(
                    'labels' => array(
                        'name' => __('Logos'),
                        'singular_name' => __('Logo')
                        ),
                    'supports' => array('title','editor','thumbnail','post-formats','custom-fields'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );
				
		register_post_type('skills',
                array(
                    'labels' => array(
                        'name' => __('Competences'),
                        'singular_name' => __('competence')
                        ),
                    'supports' => array('title','editor','thumbnail','post-formats','custom-fields'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );
		
		register_post_type('particulars',
                array(
                    'labels' => array(
                        'name' => __('Coordonnees'),
                        'singular_name' => __('Coordonnee')
                        ),
                    'supports' => array('title','editor','thumbnail','post-formats','custom-fields'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );		
    }
	
	
}

function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '">Lire la suite...</a>';
}


