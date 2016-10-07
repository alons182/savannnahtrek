<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package savannahtrek
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="inner">
	

	<header class="header">
		<div class="header-top">
			<div class="header-tagline">
				<?php
					$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div>
			<div class="header-branding">
				<span class="header-logo-text">Savannah Trek</span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.jpg" alt="Savannah Trek"></a>
			</div>
		</div>
		<div class="header-banner" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.png')">
			<div class="header-banner-info">
			    <?php  if(get_locale() == "es_ES") 
					    {
					    	echo "DELE RIENDA SUELTA A <br/>SU ¡ESPÍRITU DE AVENTURA !";

					    }
					    if(get_locale() == "en_US") 
					    {
					    	echo "UNLEASH YOUR <br /> SPIRIT OF ADVENTURE !";

					    }
					    if(get_locale() == "fr_FR") 
					    {
					    	echo "LIBEREZ VOTRE <br /> ESPRIT AVENTURIER !";

					    }?>

				

				
			</div>
			<div class="languages">
				<?php get_sidebar('languages'); ?>
				
			</div>

		</div>
		

		<?php wp_nav_menu( array(
	                     'theme_location' => 'primary',
	                     'menu_id' => 'primary-menu',
	                     'container'       => 'nav',
		                'container_class' => 'header-menu',
		                'container_id'    => '',
		                'menu_class'      => 'header-menu-ul',
	                      ) 
                      ); 
                      ?>
			 <button id="btn-menu" class="header-btn-menu">
	            <i class="fa fa-bars"></i>
	        </button>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
