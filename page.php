<?php the_post(); ?>
<?php get_header(); ?>
<?php get_template_part( 'sidebar', 'left' ); ?>
<?php include (TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>

<div id="ifes-doc-centro-expandido">	
<div id="page">

<h3 class="contentheading"><?php the_title(); ?></h3>

<p class="articleinfo"><span class="createdate"><?php the_time('j \d\e F \d\e Y'); ?></span></p>
<?php the_content();?>
<?php echo PostViews( $post->ID, 'count' ); ?>
</div>

					<!-- Complemento de Informações-->
					
					<!-- Fim do Complemento de Informações -->
<?php include (TEMPLATEPATH . '/includes/banner-centro.php'); ?>

<?php get_footer();?>