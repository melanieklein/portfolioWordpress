<?php 


add_action('after_setup_theme', 'portfolio_setup');
add_action('init','create_post_type');
add_action('wp_enqueue_scripts', 'my_scripts_method');




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

function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/jquery-1.8.2.js',
		array('jquery')
	);
	
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/script.js',
		array('jquery')
	);
	
}

