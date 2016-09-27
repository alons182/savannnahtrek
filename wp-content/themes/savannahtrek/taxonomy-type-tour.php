<?php
/**
 * The template for displaying Category products
 *
 * 
 *
 * @package savannahtrek
 */

get_header(); ?>
	<div  class="main">
		

			<?php  //the_archive_title( '<h1 class="featured__title color">', '</h1>' );  ?>	
	         <h1 class="tours-title color">
	         	<?php single_cat_title( '', true ); ?>
			 </h1>
			 <div class="tours-items">
			      	
			      
			<?php if ( have_posts() ) : ?>
				

				<?php while ( have_posts() ) : the_post(); ?>

						<article class="tours-item">
		                <?php if ( has_post_thumbnail() ) :

		                    $id = get_post_thumbnail_id($post->ID);
		                    $thumb_url = wp_get_attachment_image_src($id,'full', true);
		                    ?>
		                    
		                  <div class="tours-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
		                        
		                <?php endif; ?>
		                	<div class="tours-item-content">
		                		<h3><?php the_title(); ?></h3>
		                		<div class="tours-item-description">
		                			<?php the_content(); ?>
		                		</div>
		                		<a href="#" class="tours-item-link btn verde">
								<?php  if(get_locale() == "es_ES") 
											    {
											    	echo "Reserva Ya";

											    }
											    if(get_locale() == "en_US") 
											    {
											    	echo "Book Now";

											    }
											    if(get_locale() == "fr_FR") 
											    {
											    	echo "Reservez";

											    }
											    ?>
		                		</a>
		                	</div>
		                  
		                    
		                </article>      

						<?php endwhile; ?>

						

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

				</div>

		
	</div><!-- #primary -->


<?php get_footer(); ?>
