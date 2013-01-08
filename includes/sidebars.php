<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => 'Esquerda #1',
		'id' => 'esquerda-1',
		'before_widget' => '<div class="menu-institucional"><div class="menu-institucional-cs">',
		'after_widget' => '</div> <!-- fim menu-institucional-ci --> </div> <!-- fim menu-institucional-cs --> </div> <!-- fim menu-institucional -->',
		'before_title' => '<div class="menu-institucional-ci moduletable tit_menu_verde"><h4>',
		'after_title' => '</h4>',
		'description'   => 'Arraste para este campo o Menu Personalizado que desejar. Caso não seja selecionado nenhum, este widget não aparecerá na página.',
	) );
	
	register_sidebar( array(
		'name' => 'Esquerda #2',
		'id' => 'esquerda-2',
		'before_widget' => '<div class="menu-sistemas"><div class="menu-sistemas-cs">',
		'after_widget' => '</div> <!-- fim menu-sistemas --> </div> <!-- fim menu-sistemas-cs --> </div> <!-- fim menu-sistemas -->',
		'before_title' => '<div class="menu-sistemas-ci moduletable tit_menu_azul"><h4>',
		'after_title' => '</h4>',
		'description'   => 'Arraste para este campo o Menu Personalizado que desejar. Caso não seja selecionado nenhum, este widget não aparecerá na página.',
	) );
	
	register_sidebar( array(
		'name' => 'Outros na Esquerda',
		'id' => 'outros',
		'before_widget' => '<div id="menu-outros"><div id="menu-outros-cs"><div id="menu-outros-ci" class="moduletable">',
		'after_widget' => '</div> <!-- fim menu-outros-ci --> </div> <!-- fim menu-outros-cs --> </div> <!-- fim menu-outros -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		'description'   => ' Arraste para este campo o Menu Personalizado que desejar. Caso não seja selecionado nenhum, este widget não aparecerá na página. Neste Widget o Título do Menu não aparecerá.',
	) );
	
	register_sidebar( array(
		'name' => 'Banners da esquerda',
		'id' => 'banners-esquerda',
		'before_widget' => '<div id="banners-esquerda"><div class="bannergroup"><div class="banneritem">',
		'after_widget' => '</div></div></div><!-- fim dos banners da esquerda -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		'description'   => ' Arraste para este campo o widget Banner. O título não será exibido. Largura 160px.',
	) );
	
	register_sidebar( array(
		'name' => 'Banners do Centro',
		'id' => 'banners-centro',
		'before_widget' => '<div id="banners-centro"><div class="bannergroup"><div class="banneritem">',
		'after_widget' => '</div></div></div> <!-- fim dos banners de centro -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		'description'   => ' Arraste para este campo o widget Banner. O título não será exibido. Largura 476px.',
	) );
	
	register_sidebar( array(
		'name' => 'Banner Direita Topo',
		'id' => 'banner_direita_topo',
		'before_widget' => '<div id="banners-direita"><div class="bannergroup"><div class="banneritem">',
		'after_widget' => '</div></div></div> <!-- fim banner_direita_topo -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		'description'   => ' Arraste para este campo o widget Banner. O título não será exibido. Largura 231px.',
	) );
	
	register_sidebar( array(
		'name' => 'Direita #1',
		'id' => 'direita_1',
		'before_widget' => '<div class="menu-cursos"><div class="menu-cursos-cs">',
		'after_widget' => '</div> <!-- fim menu-cursos-ci --> </div> <!-- fim menu-cursos-cs --> </div> <!-- fim menu-cursos -->',
		'before_title' => '<div class="menu-cursos-ci moduletable tit-menu-verde"><h4>',
		'after_title' => '</h4>',
		'description'   => 'Arraste para este campo o Menu Personalizado que desejar. Caso não seja selecionado nenhum, este widget não aparecerá na página.',
	) );
	
	register_sidebar( array(
		'name' => 'Direita #2',
		'id' => 'direita_2',
		'before_widget' => '<div class="menu-rede"><div class="menu-rede-cs">',
		'after_widget' => '</div> <!-- fim menu-cursos-ci --> </div> <!-- fim menu-cursos-cs --> </div> <!-- fim menu-cursos -->',
		'before_title' => '<div class="menu-rede-ci moduletable tit-menu-rede"><h4>',
		'after_title' => '</h4>',
		'description'   => 'Arraste para este campo o Menu Personalizado que desejar. Caso não seja selecionado nenhum, este widget não aparecerá na página.',
	) );
	
	register_sidebar( array(
		'name' => 'Banners Direita Rodapé',
		'id' => 'banners_direita_rodape',
		'before_widget' => '<div id="banners-direita"><div class="bannergroup"><div class="banneritem">',
		'after_widget' => '</div></div></div> <!-- fim banner_direita_topo -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		'description'   => ' Arraste para este campo o widget Banner. O título não será exibido. Largura 231px.',
	) );
} 
?>