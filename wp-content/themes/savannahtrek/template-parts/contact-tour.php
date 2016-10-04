
<div id="contact-tour" class="white-popup mfp-hide mfp-with-anim">
    
    <?php rewind_posts(); ?>
	  <?php query_posts( 'post_type=page&page_id=430' ); ?>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	           <?php the_title( '<h1>', '</h1>' ); ?>
    		   <?php the_content(); ?>

	        <?php endwhile; ?>
	        <!-- post navigation -->
	      
	    <?php endif; ?>
    
          
 </div>

<?php/* echo do_shortcode('[contact-form-7 id="429" title="Reservation Form"]'); */?>