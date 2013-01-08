<?php wp_reset_query(); ?><?php

if(is_home() || is_front_page()) : ?>
	<!-- Coluna Principal do Documento -->
			<div id="ifes-doc-coluna-principal">
				<!-- Barra de Busca e Caminho de Migalhas de Pão -->
				<div id="caminho-e-barra-busca">
				
					<div id="caminho-migalhas">
						<span class="breadcrumbs pathway">
</span>
<h4>Menu Central</h4>
<ul>
    <li class="menu-pagina-inicial-noticias"><a href="http://www.ifes.edu.br/noticias">Notícias</a></li>
</ul>						
					</div>
		
		<?php get_search_form();?>
        				
				</div>				
				<!-- Fim Barra de Busca e Caminho de Migalhas de Pão -->
			
				<!-- Coluna Central do Documento -->
	
	<?php else : ?>

<!-- Coluna Principal do Documento -->
			<div id="ifes-doc-coluna-principal">
				<!-- Barra de Busca e Caminho de Migalhas de Pão -->
				<div id="caminho-e-barra-busca">
				
					<div id="caminho-migalhas" class="breadcrumbs patchway">
						<span class="pathway">
						<?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                        </span>
                    </div>
<?php get_search_form();?>			
				</div>				
				<!-- Fim Barra de Busca e Caminho de Migalhas de Pão -->
			
				<!-- Coluna Central do Documento -->
<?php endif; ?>