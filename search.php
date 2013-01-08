<?php 

/**
 * O template usado para exibir o resultado das buscas.
 *
 * @package WordPress
 * @subpackage Vitória Cine Vídeo
 * @since 17 VCV 1.0
 */
 
get_header(); ?>
<?php get_sidebar('left'); ?>
<?php include (TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>

<div id="ifes-doc-centro-expandido">	
			
<?php if (have_posts()) :?>
<div id="page_section">
<h1 class="componentheading">
	<?php printf( __( 'Resultado para: %s', 'ifeswp' ), '<span>' . get_search_query() . '</span>' ); ?>
</h1>

<div class="contentdescription">
	
	
	</div>


<?php  $count;
			$count2 = 1; ?>
			
			

<table id="table" class="category tablesorter" summary="Lista de Artigos">

		<thead>
            <tr>
            	<th class="sectiontableheader" id="count"> #</th>
    			<th class="sectiontableheader" id="tableOrdering">Título do Artigo</th>
				<th class="sectiontableheader" id="hits" align="center" nowrap="nowrap" width="5%">Acessos</th>
            </tr>
		</thead>
        
        <tbody>
        	<?php  while (have_posts()) : the_post(); ?>
					<tr>
                        <td><?php echo $count2++; ?></td>
                        <td><a href="<?php the_permalink();?>"><?php the_title(); ?></a></td>
                        <td><?php echo PostViews( get_the_ID(), 'display' ); ?></td>
                    </tr>
					
				<?php	endwhile;?>
            
    	</tbody>
</table>
</div>
<?php endif;?>





					<!-- Complemento de Informações-->
					
					<!-- Fim do Complemento de Informações -->
<?php include (TEMPLATEPATH . '/includes/banner-centro.php'); ?>

<?php get_footer();?>