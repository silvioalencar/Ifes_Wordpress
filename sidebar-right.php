				<!-- Coluna da Direita do Documento -->
				<div id="ifes-doc-direita">
				
					<!-- Banners da Direita Superior -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('banner_direita_topo') ) : ?>
			   		<?php endif; ?>	
				
					<!-- Coluna da Direita -->
                    
                    <?php
					if ( is_active_sidebar('direita_1') || is_active_sidebar( 'direita_2') ||  is_active_sidebar('banner_direita_topo') ) { ?>
					<div id="coluna-direita">
						<div id="coluna-direita-cs">
							<div id="coluna-direita-ci">
								
					<!-- Menu Cursos -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('direita_1') ) : ?>
			   		<?php endif; ?>	
								
					<!-- Menu Rede -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('direita_2') ) : ?>
			   		<?php endif; ?>
	
																							
														
								
							</div>
						</div>						
					</div>
                    <?php } ?>
					<!-- Fim da Coluna da Direita -->
					
					<!-- Banners da Direita-->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('banners_direita_rodape') ) : ?>
			   		<?php endif; ?>
					
				</div>			
				<!-- Fim da Coluna da Direita do Documento -->