<!-- Coluna da Esquerda do Documento -->
			<div id="ifes-doc-esquerda">
            
            	<!-- Menu Institucional -->	
               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('esquerda-1') ) : ?>
			   <?php endif; ?>
           
				<!-- Menu Institucional -->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('esquerda-2') ) : ?>
			   <?php endif; ?>
		
				<!-- Menu Sistemas -->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('esquerda-3') ) : ?>
			   <?php endif; ?>
	
				<!-- Menu Outros -->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('outros') ) : ?>
			   	<?php endif; ?>
					
				
				<!-- Banner da Esquerda -->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('banners-esquerda') ) : ?>
			   	<?php endif; ?>					
							
			</div>			
			<!-- Fim da Coluna da Esquerda do Documento -->