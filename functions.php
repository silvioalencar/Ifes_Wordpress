<?php 

$wp_ver = substr($GLOBALS['wp_version'],0,3);
if ($wp_ver >= 2.8) include(TEMPLATEPATH . '/includes/widgets.php');

//adiciona o repositorio
include(TEMPLATEPATH . '/functions/updater.php');

include(TEMPLATEPATH . '/includes/sidebars.php');
//require_once(TEMPLATEPATH . '/includes/page_templates/page_templates.php');

// custom excerpt length
function custom_excerpt_length($length) {
	return 23;
}
add_filter('excerpt_length', 'custom_excerpt_length');



/********************************
******** Thumbnails  ************
 ********************************/
/*Adiciona thumbnails ao tema e adiciona tamanhos predefinidos aos thumbnails */
if ( function_exists( 'add_theme_support' ) ) {
	
	add_theme_support( 'post-thumbnails' );
	
	//Tamanho da imagem em Outras noticias da index.php
	add_image_size( 'noticia1', 435, 290, true );	
	
}
/* --------------------------------------------- */



/********************************
 Adicionando Custom Fields
 ********************************/

//Texto do Leia Mais
add_action( 'add_meta_boxes', 'projetos_meta_boxes' );

function projetos_meta_boxes(){
	
	add_meta_box('leia_index',_('Texto do leia mais'),'leiamais_index_box','post','normal','high');
	
	}

//Descrição dos Boxes
function leiamais_index_box(){
	
	global $post;
	
	$leiamais = get_post_meta($post->ID, '_leiamais', true);	
	
 	if(function_exists('wp_nonce_field')) wp_nonce_field('leiamais_nonce','_leiamais_nonce');
	?>
        <input type="text" name="_leiamais" value="<?php echo wp_specialchars(stripslashes($leiamais),1); ?>" />
     <?php 
	}
	
	//Salvando os Boxes	
	
	add_action('save_post','save_leiamais_meta_data');
	
	function save_leiamais_meta_data($post_id){
		
		global $post;
		
		//ignorar os auto-saves
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
		
		//verifique os nonces
		//check_admin_referer('posicao_nonce','_posicao_nonce');
		
		//verifique as capacidades
		
		if('post'== $_POST['post_type'] && !current_user_can('edit_post', $post_id))
			return $post_id;
		
		//Salve os campos personalizados, um de cada vez
		
		//Campo da posição x
		// se o campo estiver vazio
		if(empty($_POST['_leiamais']))	{
			//veja qual era o valor original
			$storedposicao_x = get_post_meta($post_id, '_leiamais', true);
			//remova-o do banco de dados
		//	delete_post_meta($post_id, '_posicao_x', $storedposicao_x);
					
			}
			// caso o campo não esteja vazio. precisamos salvá-lo
			
			else
				update_post_meta($post_id, '_leiamais', $_POST['_leiamais']);
				
		}



/********************************
 Adicionando coisas ao Header
 ********************************/
// Adicionando Jquery ao site

function add_jquery(){
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script('jquery-ui-core');
	
	}
add_action('wp_head','add_jquery');


/*****************************/

/*Post View*/

//Outra forma

// Display or Count how many times a post has been viewed.
// id = the post id and action = display or count

	function PostViews( $id, $action ) {

		$axCountMeta 	= 'post_views_count'; // Your Custom field that stores the views
		$axCount 	= get_post_meta($id, $axCountMeta, true);

		if ( $axCount == '' ) {

			if ( $action == 'count' ) {
				$axCount = 0;
			}

			delete_post_meta( $id, $axCountMeta );
			add_post_meta( $id, $axCountMeta, 0 );

			if ( $action == 'display' ) {
				echo "0";
			}		

		} else {

			if ( $action == 'count' ) {

				$axCount++;
				update_post_meta( $id, $axCountMeta, $axCount );

			} else {

				echo $axCount;	

			}

		}	

	}




;




?>