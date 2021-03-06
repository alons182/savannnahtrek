<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package savannahtrek
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
	<?php if ( has_post_thumbnail() ) :

            $id = get_post_thumbnail_id($post->ID);
            $thumb_url = wp_get_attachment_image_src($id,'full', true);
            ?>
            
          <div class="tours-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
                
        <?php endif; ?>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'savannahtrek' ),
				'after'  => '</div>',
			) );
		?>
		<a href="#contact-tour" class="tours-item-link btn verde" data-tour="<?php the_title(); ?>">
			<?php  if(get_locale() == "es_ES") 
						    {
						    	echo "Consulta Ya";

						    }
						    if(get_locale() == "en_US") 
						    {
						    	echo "Quote Now";

						    }
						    if(get_locale() == "fr_FR") 
						    {
						    	echo "Plus d'info";

						    }
						    ?>
    		</a>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'savannahtrek' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
