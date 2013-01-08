<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
<?php bloginfo('name'); if (get_bloginfo('description')) echo ' | '; ?>
<?php is_home() ? bloginfo('description') : wp_title(''); ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="icon" href="<?php /*?><!-- add link to favicon --><?php */?>" />
<link rel="shortcut icon" href="<?php /*?><!-- add link to favicon --><?php */?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />


<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>

<!---- Originais do Site do Ifes ---->


<!-- Barra do Governo Federal --->

<div id="barra-brasil">
    <div class="barra">
        <ul>
            <li><a href="http://www.acessoainformacao.gov.br" class="ai" title="Acesso à informação" target="_blank">www.sic.gov.br</a></li>
            <li><a href="http://www.brasil.gov.br" class="brasilgov" title="Portal de Estado do Brasil" target="_blank">www.brasil.gov.br</a></li>
        </ul>
    </div>
</div>
        
<!-- Fim da Barra do Governo Federal -->


<!-- Documento Ifes: Container de todo o site -->
<div id="ifes-doc">
	<div id="ifes-doc-ce">
		<div id="ifes-doc-cd">
        
        	  
		  
		  <!-- Cabeçalho do Ifes -->
		  <div id="ifes-doc-cabecalho">
          	<h6><?php if (get_bloginfo('description')) bloginfo('description');?></h6>
		  	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('name'); ?></h2>
            
			<div id="barra-acessibilidade">				
				<script type="text/javascript">
				//<![CDATA[
					document.write('<h4>Menu de Acessibilidade</h4>');
					document.write('<ul>');
					document.write('<li class="menu-acessibilidade-aumentar"><a href="/index.php" title="Aumentar Letra" onclick="changeFontSize(2); return false;" class="larger">Aumentar Letra</a></li>');
					document.write('<li class="menu-acessibilidade-diminuir"><a href="/index.php" title="Diminuir Letra" onclick="changeFontSize(-2); return false;" class="smaller">Diminuir Letra</a></li>');
					document.write('<li class="menu-acessibilidade-tamanho-normal"><a href="/index.php" title="Tamanho Normal" onclick="revertStyles(); return false;" class="reset">Tamanho Normal</a></li>');
					document.write('<li class="menu-acessibilidade-alto-contraste"><a href="/index.php" title="Alto Contraste" onclick="return false;" class="reset">Alto Contraste</a></li>');
					document.write('</ul>');
				//]]>
				</script><h4>Menu de Acessibilidade</h4><ul><li class="menu-acessibilidade-aumentar"><a href="http://www.ifes.edu.br/index.php" title="Aumentar Letra" onclick="changeFontSize(2); return false;" class="larger">Aumentar Letra</a></li><li class="menu-acessibilidade-diminuir"><a href="http://www.ifes.edu.br/index.php" title="Diminuir Letra" onclick="changeFontSize(-2); return false;" class="smaller">Diminuir Letra</a></li><li class="menu-acessibilidade-tamanho-normal"><a href="http://www.ifes.edu.br/index.php" title="Tamanho Normal" onclick="revertStyles(); return false;" class="reset">Tamanho Normal</a></li><li class="menu-acessibilidade-alto-contraste"><a href="http://www.ifes.edu.br/index.php" title="Alto Contraste" onclick="return false;" class="reset">Alto Contraste</a></li></ul>						
			</div>
		  </div>		  
		  <!-- Fim do Cabeçalho do Ifes-->
           <!-- Corpo Principal do Documento -->
		  <div id="ifes-doc-corpo">