	<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BureauDesBrasseurs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bureaudesbrasseurs' ); ?></a>

<header id="masthead" class="site-header">
	
	<?php 
	/* A SUPPRIMER !!!
	<div style="display: none" class="site-branding">
		<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		$bureaudesbrasseurs_description = get_bloginfo( 'description', 'display' );
		if ( $bureaudesbrasseurs_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $bureaudesbrasseurs_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>
	*/
	?>
		
	<nav id="site-navigation" class="main-navigation">
		<div class="left">

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'menu', 'bureaudesbrasseurs' ); ?>
			</button>
			<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						)
				); 
			?>

		</div>

		<div class="right">
			<?php 
			/* 	Note de Bonne pratique : 	
				les aria-labels sont à utiliser conjointement aux attributs title pour des raisons d'accessiblité
				https://stackoverflow.com/questions/27953425/what-is-the-difference-between-aria-label-and-title-attributes
			*/
			?>
			<?php 
			$numberOfEvents = bureaudesbrasseurs_get_incoming_events_number();
			if ($numberOfEvents == 0) $numberOfEvents = "";
			?>
			<a class="nav-link has-notification" href="/events" data-nbrevents="<?= $numberOfEvents ?>" title="Les évènements du BDB !" aria-label="Les évènements du BDB !" >
				<img class="nav-link-icon" src="<?= get_stylesheet_directory_uri() ?>/img/icone-ticket.svg" alt="Icone de ticket">
			</a>
			<a class="nav-link" href="/salon-prive" title="Zone réservée aux membres de l'association" aria-label="Zone réservée aux membres de l'association" >
				<img class="nav-link-icon" src="<?= get_stylesheet_directory_uri() ?>/img/icone-cadena.svg" alt="Icone de cadena">
			</a>

			<?php 
			// TODO : ajouter le logo de ticket et le cadena private room  
			?>
		</div>

	</nav>
	
</header>
