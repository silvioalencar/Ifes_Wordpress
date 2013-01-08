	<?php include (TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>
		<div id="ifes-doc-centro">	
		
        <div class="principal">
        
			 <?php $my_query = new WP_Query('category_name=noticias&order=DESC&post_status=publish&posts_per_page=2');
              while ($my_query->have_posts()) : $my_query->the_post();
              $do_not_duplicate[] = $post->ID;?>
              
              
                  <div class="leading">
                    
        
                        <h3 class="contentheading">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="contentpagetitle"><?php the_title(); ?></a>
                                
                        </h3>
                        <?php	if(has_post_thumbnail()) : ?><?php the_post_thumbnail('noticia1'); ?><?php endif; ?>
                        <p><?php the_excerpt(); ?></p>
                        
                       <?php if(get_post_meta($post->ID, '_leiamais', true)) {?><p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="readon"><?php echo get_post_meta($post->ID, '_leiamais', true);?></a></p> <?php }?>
        
                    </div>
            
			<span class="leading_separator">&nbsp;</span>
    		            

			<?php endwhile; ?>

	
            <div class="article_row">
            
                <?php $my_query2 = new WP_Query('category_name=noticias&order=DESC&post_status=publish&posts_per_page=6'); ?>
                                <?php if ($my_query2->have_posts()) : while ($my_query2->have_posts()) : $my_query2->the_post(); 
                                 if (in_array($post->ID, $do_not_duplicate)) continue;
                                 ?>
                                <div class="article_column column">
                                    
            
                                    <h3 class="contentheading">
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="contentpagetitle"><?php the_title(); ?></a>
                                    </h3>
                                    <p><?php the_excerpt(); ?></p>
                                    
                                  <?php if(get_post_meta($post->ID, '_leiamais', true)) {?><p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="readon"><?php echo get_post_meta($post->ID, '_leiamais', true);?></a></p> <?php }?>
                                </div>
				<span class="article_separator">&nbsp;</span>
                                    
                                <?php endwhile; wp_reset_query(); ?>
                        
                        <?php endif; ?>
            	
                <span class="article_separator">&nbsp;</span>
                <span class="row_separator">&nbsp;</span>
            
            </div>

 				<?php $my_query3 = new WP_Query('category_name=noticias&order=DESC&post_status=publish&posts_per_page=6&offset=6'); ?>
              
              <?php if ($my_query3->have_posts()) : ?> 
                    
                    <div class="blog_more">
                    
                    
                        <h3>Mais Artigos...</h3>
                         <ul>   
                        <?php while ($my_query3->have_posts()) : $my_query3->the_post(); 
                                             if (in_array($post->ID, $do_not_duplicate)) continue; ?>
                        
                            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="blogsection"><?php the_title(); ?></a>
                            </li>
                         
                         <?php endwhile; wp_reset_query(); ?> 
                                
                            </ul>
                    </div>
	<?php endif; ?>
	</div>

					
					<!-- Complemento de Informações-->
					
					<!-- Fim do Complemento de Informações -->
					
<?php include (TEMPLATEPATH . '/includes/banner-centro.php'); ?>