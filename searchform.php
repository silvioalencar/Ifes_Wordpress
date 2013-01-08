					<div id="barra-busca">
					<form method="post" id="searchform" action="<?php bloginfo('url'); ?>/">
                        <div class="search">
                            <input name="s" id="searchinput" maxlength="20" alt="Pesquisar" class="inputbox" size="20" value="Pesquisar ..." onblur="if(this.value=='') this.value='Pesquisar ...';" onfocus="if(this.value=='Pesquisar ...') 		
                            this.value='';" type="text"><input value="Pesquisar" class="button" src="<?php bloginfo('template_directory');?>/images/botao_ok.png" onclick="this.form.searchword.focus();" type="image">	
                        </div>
                        
                    </form>
						
					</div>