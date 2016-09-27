<?php
/*
    Template Name: Page Sponsor
     */
 

get_header(); ?>

	<div  class="main">
		

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;*/

			endwhile; // End of the loop.
			?>

		
	</div><!-- #primary -->

	<div class="main">	
	<?php rewind_posts(); ?>
        <?php query_posts( 'post_type=page&page_id=42' ); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					
                	get_template_part( 'template-parts/content', 'page' );
               

             endwhile; ?>
            <!-- post navigation -->
          
        <?php endif; ?>
	</div>

	<div class="main want-to-help">
		<iframe src="http://donations.galilcloud.wixapps.net/live/index.html?cacheKiller=1474903614139&amp;compId=comp-igbdytvj&amp;deviceType=desktop&amp;instance=LDvMnnUPV1pIfHON9-DmsCKf1tSYwm9UGBmP5WfEEzg.eyJpbnN0YW5jZUlkIjoiNGVkZDFmODgtMjI2MC00YWMzLTk0M2MtZjJkODI3M2FjZDVkIiwic2lnbkRhdGUiOiIyMDE2LTA5LTI2VDE1OjI2OjUyLjg4NFoiLCJ1aWQiOm51bGwsImlwQW5kUG9ydCI6IjIwMS4yMDMuNTkuMTQ1LzM1MDU2IiwidmVuZG9yUHJvZHVjdElkIjpudWxsLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjhmOWZjYjdjLTU3NGEtNDlkYy1hMzBjLTkzYWE5NzZkYTE3NyIsImJpVG9rZW4iOiIzYjA1NjJlZS1kYTM2LTAwZmYtM2IzYy04Zjg5ODY1MTMxNTMiLCJzaXRlT3duZXJJZCI6IjU4YWU2ZDIzLTlhMWEtNDI4Zi1iODU1LTFjMWMzMjhiYTMwYiJ9&amp;locale=es&amp;viewMode=site&amp;width=960" scrolling="yes" frameborder="0" allowtransparency="true" allowfullscreen="" name="comp-igbdytvj" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$x20a4.1.$comp-igbdytvj.$http=2//donations=1galilcloud=1wixapps=1net/live/index=1html?cacheKiller=01474903614139&amp;compId=0comp-igbdytvj&amp;deviceType=0desktop&amp;instance=0LDvMnnUPV1pIfHON9-DmsCKf1tSYwm9UGBmP5WfEEzg=1eyJpbnN0YW5jZUlkIjoiNGVkZDFmODgtMjI2MC00YWMzLTk0M2MtZjJkODI3M2FjZDVkIiwic2lnbkRhdGUiOiIyMDE2LTA5LTI2VDE1OjI2OjUyLjg4NFoiLCJ1aWQiOm51bGwsImlwQW5kUG9ydCI6IjIwMS4yMDMuNTkuMTQ1LzM1MDU2IiwidmVuZG9yUHJvZHVjdElkIjpudWxsLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjhmOWZjYjdjLTU3NGEtNDlkYy1hMzBjLTkzYWE5NzZkYTE3NyIsImJpVG9rZW4iOiIzYjA1NjJlZS1kYTM2LTAwZmYtM2IzYy04Zjg5ODY1MTMxNTMiLCJzaXRlT3duZXJJZCI6IjU4YWU2ZDIzLTlhMWEtNDI4Zi1iODU1LTFjMWMzMjhiYTMwYiJ9&amp;locale=0es&amp;viewMode=0site&amp;width=0960"></iframe>
	</div>

<?php
/*get_sidebar();*/
get_footer();