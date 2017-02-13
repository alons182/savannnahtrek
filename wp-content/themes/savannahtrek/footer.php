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
				<a href="https://www.facebook.com/savannahtrekcr" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>
				<!--<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>-->
			</div>
		</div>
		<div class="bosque"></div>	
		
	</footer><!-- #colophon -->
<?php get_template_part( 'template-parts/contact', 'tour' ); ?>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69662015-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
