<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package savannahtrek
 */

?>

	</div><!-- #content -->

	
</div><!-- #page -->
<footer id="colophon" class="footer" role="contentinfo">

		<div class="inner">

			<div class="site-info">
			<span>&copy; 2016 Savannah Trek</span>
			</div><!-- .site-info -->
			
			<div class="rent-a-car">
			<?php  if(get_locale() == "es_ES") 
					    {?>
					    	<span>Necesitas un Auto? <a href="https://toyotarent.com/?agent=SVNT506&amp;code=WebTRACSVNT&amp;partner=SavannahTrek" target="_blank" >Click Aquí</a></span>
						<?php
					    }
					    if(get_locale() == "en_US") 
					    {?>
					    	<span>Need a car? <a href="https://toyotarent.com/?agent=SVNT506&amp;code=WebTRACSVNT&amp;partner=SavannahTrek" target="_blank" >Click here</a></span>
						<?php
					    }
					    if(get_locale() == "fr_FR") 
					    {?>
					    	<span>besoin d'une voiture? <a href="https://toyotarent.com/?agent=SVNT506&amp;code=WebTRACSVNT&amp;partner=SavannahTrek" target="_blank" >Cliquez ici</a></span>
						<?php
					    }?>
			
			<a href="https://toyotarent.com/?agent=SVNT506&amp;code=WebTRACSVNT&amp;partner=SavannahTrek" target="_blank" ><img class="alignnone wp-image-938 size-full" src="http://www.savannahtrekcr.com/wp-content/uploads/2016/09/toyota-rent-a-car.jpg" alt="toyota-rent-a-car" width="470" height="157" /></a>
			</div>
			<div class="footer-social">
				<a href="https://www.facebook.com/savannahtrekcr" target="_blank"><i class="fa fa-facebook"></i></a>
				<!--<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>-->
			</div>
		</div>
		<div class="bosque"></div>	
		
	</footer><!-- #colophon -->
<?php get_template_part( 'template-parts/contact', 'tour' ); ?>

<?php wp_footer(); ?>

</body>
</html>
