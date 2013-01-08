
<?php get_header(); ?>
<?php get_sidebar('left'); ?>
<?php include (TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>

<div id="ifes-doc-centro-expandido">	
			
					<div id="page_section">
<h1 class="componentheading">
	<?php if ( is_day() ) : ?>
                                    <?php printf( __( 'Daily Archives: <span>%s</span>', 'ifes' ), get_the_date() ); ?>
                    <?php elseif ( is_month() ) : ?>
                                    <?php printf( __( 'Monthly Archives: <span>%s</span>', 'ifes' ), get_the_date( 'F Y' ) ); ?>
                    <?php elseif ( is_year() ) : ?>
                                    <?php printf( __( 'Yearly Archives: <span>%s</span>', 'ifes' ), get_the_date( 'Y' ) ); ?>
                    <?php elseif ( is_category() ) : ?>
                                    <?php echo single_cat_title(); ?>
                    <?php else : ?>
                                    <?php _e( 'Blog Archives', '18vcv' ); ?>
                    <?php endif; ?>
</h1>

<div class="contentdescription">
	
	
	</div>


<?php  $count;
		$count2 = 1; 
			
			if (have_posts()) :?>

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

<?php endif;?>

</div>



					<!-- Complemento de Informações-->
					
					<!-- Fim do Complemento de Informações -->
<?php include (TEMPLATEPATH . '/includes/banner-centro.php'); ?>

<?php get_footer();?>