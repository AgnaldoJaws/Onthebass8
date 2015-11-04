<div class="container content">

	<div class="row ">

		<div
			class="<?php echo novalite_template('span')." ".novalite_template('sidebar'); ?>">

			<div class="row" id="row1">
            
                <?php if ( have_posts() ) :  ?>
        
                    <?php while ( have_posts() ) : the_post(); ?>
           
             <div class="content-main">
					<div class="title">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
					</div>



					<div class="imagem">

						


					</div>
					
					

					<div class="texto"></div>

					<div class="artigo">
						 <?php the_excerpt()?>
						
						</div>

				</div>
                    <?php endwhile; else:  ?>
               
                <?php endif; ?>
            </div>
            
			<?php get_template_part('pagination'); ?>
        </div>
        
		<?php if ( novalite_template('span') == "span8" ) : ?>
    
                <section id="sidebar" class="span4">
			<div class="row" id="teste">
						<?php
			
if (is_active_sidebar ( 'side_sidebar_area' )) {
				
				dynamic_sidebar ( 'side_sidebar_area' );
			} else {
				
				the_widget ( 'WP_Widget_Calendar', array (
						"title" => __ ( 'Calendar', 'novalite' ) 
				), array (
						'before_widget' => '<div class="pin-article span4"><div class="article">',
						'after_widget' => '</div></div>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>' 
				) );
				
				the_widget ( 'WP_Widget_Archives', '', array (
						'before_widget' => '<div class="pin-article span4"><div class="article">',
						'after_widget' => '</div></div>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>' 
				) );
				
				the_widget ( 'WP_Widget_Categories', '', array (
						'before_widget' => '<div class="pin-article span4"><div class="article">',
						'after_widget' => '</div></div>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>' 
				) );
			}
			?>
                    </div>
		</section>
        
		<?php endif; ?>
           
    </div>
</div>