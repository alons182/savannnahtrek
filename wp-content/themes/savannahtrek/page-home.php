<?php
/*
    Template Name: Page Home
     */


get_header(); ?>

	<div  class="main">
		

			<?php
			while ( have_posts() ) : the_post();
				?>
				<header class="entry-header">
					<h1>
						<?php  if(get_locale() == "es_ES") 
					    {
					    	echo "Bienvenido a Savannah Trek Adventures";

					    }
					    if(get_locale() == "en_US") 
					    {
					    	echo "Welcome to Savannah Trek Adventures";

					    }
					    if(get_locale() == "fr_FR") 
					    {
					    	echo "Bienvenue a Savannah Trek Adventures";

					    }?>
					</h1>
				</header><!-- .entry-header -->

				<div class="entry-content home-content">
					
						<?php
							the_content();

						?>
					
				</div><!-- .entry-content -->

		<?php
			endwhile; // End of the loop.
			?>

		
	</div><!-- #primary -->
	<div class="featured-tours">
			<h1 class="featured-tours-title">
			   <?php  if(get_locale() == "es_ES") 
			    {
			    	echo "Tours Destacados";

			    }
			    if(get_locale() == "en_US") 
			    {
			    	echo "Featured Tours";

			    }
			    if(get_locale() == "fr_FR") 
			    {
			    	echo "Le Meilleur";

			    }?>

			    </h1>
			<div class="featured-tours-items">
                   <div class="item-tour">
                   		<div class="item-tour-image">
                   			<img src="<?php echo get_template_directory_uri();  ?>/img/feature-adventure.jpg" alt="Savannah Trek - Adventure">
                   		</div>
                   		<div class="item-tour-content">
                   			<h3>
								
							   <?php  if(get_locale() == "es_ES") 
							    {
							    	echo "Tours Aventura";

							    }
							    if(get_locale() == "en_US") 
							    {
							    	echo "Adventure Tours";

							    }
							    if(get_locale() == "fr_FR") 
							    {
							    	echo "Tours Aventure";

							    }?>
                   			</h3>
                   			<?php
		                        $args = array(
		                          'post_type' => 'tour',
		                          'post_per_page' => 5,
		                          'tax_query' => array(
	                                array(
	                                  'taxonomy' => 'type-tour',
	                                  'field' => 'slug',
	                                  'terms' => 'adventure'
	                                )
	                              )                 
		                        );
		                        $tours = new WP_Query( $args );
		                        if( $tours->have_posts() ) : ?>
		                        	<ul> <?php	
		                          while( $tours->have_posts() ) :
		                            $tours->the_post();
		                          
		                            ?>

										<li title="<?php the_title(); ?>"><?php the_title(); ?></li>

		                            <?php
			                          endwhile;?>
			                          </ul>
			                        <?php
			                       endif;
			                        
			                      ?>
			                      
									<?php  if(get_locale() == "es_ES") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/aventura' ) ); ?>" class="btn verde">Ver más</a>
									<?php
								    }
								    if(get_locale() == "en_US") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/adventure' ) ); ?>" class="btn verde">Check Now</a>
									<?php
								    }
								    if(get_locale() == "fr_FR") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/aventure' ) ); ?>" class="btn verde">Explorez</a>
									<?php
								    }?>

			                      </a>
                   		</div>
                   		
                   	
                   </div>
                    <div class="item-tour">
                   		<div class="item-tour-image">
                   			<img src="<?php echo get_template_directory_uri();  ?>/img/feature-nature.jpg" alt="Savannah Trek - nature">
                   		</div>
                   		<div class="item-tour-content">
                   			<h3>
								<?php  if(get_locale() == "es_ES") 
							    {
							    	echo "Tours Naturaleza";

							    }
							    if(get_locale() == "en_US") 
							    {
							    	echo "Nature Tours";

							    }
							    if(get_locale() == "fr_FR") 
							    {
							    	echo "Tours Nature";

							    }?>
                   			</h3>
                   			<?php
		                        $args = array(
		                          'post_type' => 'tour',
		                          'post_per_page' => 5,
		                          'tax_query' => array(
	                                array(
	                                  'taxonomy' => 'type-tour',
	                                  'field' => 'slug',
	                                  'terms' => 'nature'
	                                )
	                              )                       
		                        );
		                        $tours = new WP_Query( $args );
		                        if( $tours->have_posts() ) : ?>
		                        	<ul> <?php
		                          while( $tours->have_posts() ) :
		                            $tours->the_post();
		                           
		                            ?>

										<li title="<?php the_title(); ?>"><?php the_title(); ?></li>

		                            <?php
			                          endwhile;?>
			                          </ul>
			                        <?php
			                       endif;
			                        
			                      ?>
			                      <?php  if(get_locale() == "es_ES") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/naturaleza' ) ); ?>" class="btn verde">Ver más</a>
									<?php
								    }
								    if(get_locale() == "en_US") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/nature' ) ); ?>" class="btn verde">Check Now</a>
									<?php
								    }
								    if(get_locale() == "fr_FR") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/nature-fr' ) ); ?>" class="btn verde">Explorez</a>
									<?php
								    }?>
                   		</div>
                   		
                   	
                   </div>
                    <div class="item-tour">
                   		<div class="item-tour-image">
                   			<img src="<?php echo get_template_directory_uri();  ?>/img/feature-cultural.jpg" alt="Savannah Trek - cultural">
                   		</div>
                   		<div class="item-tour-content">
                   			<h3>
								<?php  if(get_locale() == "es_ES") 
							    {
							    	echo "Tours Culturales";

							    }
							    if(get_locale() == "en_US") 
							    {
							    	echo "Cultural Tours";

							    }
							    if(get_locale() == "fr_FR") 
							    {
							    	echo "Tours Culturel";

							    }?>
                   			</h3>
                   			<?php
		                        $args = array(
		                          'post_type' => 'tour',
		                          'post_per_page' => 5,
		                          'tax_query' => array(
	                                array(
	                                  'taxonomy' => 'type-tour',
	                                  'field' => 'slug',
	                                  'terms' => 'cultural'
	                                )
	                              )                       
		                        );
		                        $tours = new WP_Query( $args );
		                        if( $tours->have_posts() ) : ?>
		                        	<ul> <?php
		                          while( $tours->have_posts() ) :
		                            $tours->the_post();
		                           
		                            ?>

										<li title="<?php the_title(); ?>"><?php the_title(); ?></li>

		                            <?php
			                          endwhile;?>
			                          </ul>
			                        <?php
			                       endif;
			                        
			                      ?>
			                      <?php  if(get_locale() == "es_ES") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/cultural-es' ) ); ?>" class="btn verde">Ver más</a>
									<?php
								    }
								    if(get_locale() == "en_US") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/cultural' ) ); ?>" class="btn verde">Check Now</a>
									<?php
								    }
								    if(get_locale() == "fr_FR") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/type-tour/culturel' ) ); ?>" class="btn verde">Explorez</a>
									<?php
								    }?>
                   		</div>
                   		
                   	
                   </div>
                    <div class="item-tour">
                   		<div class="item-tour-image">
                   			<img src="<?php echo get_template_directory_uri();  ?>/img/feature-full-program.jpg" alt="Savannah Trek - Ultimate Costa Rica Full Program">
                   		</div>
                   		<div class="item-tour-content">
                   		<?php rewind_posts(); ?>
				        <?php query_posts( 'post_type=page&page_id=129' ); ?>
				        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									
				                	<h3><?php the_title( );?></h3>

				               		 <?php the_content(); ?>

				               		 <?php  if(get_locale() == "es_ES") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="btn verde">Ver más</a>
									<?php
								    }
								    if(get_locale() == "en_US") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn verde">Check Now</a>
									<?php
								    }
								    if(get_locale() == "fr_FR") 
								    {?>
								    	<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn verde">Explorez</a>
									<?php
								    }?>

				             <?php endwhile; ?>
				            <!-- post navigation -->
				          
				        <?php endif; ?>
                   			
                   		</div>
                   		
                   	
                   </div>
            </div>
                               
                                    
                          

	</div>

<?php
/*get_sidebar();*/
get_footer();
