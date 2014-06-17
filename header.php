<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package A Piece Of Cake
 * @since available since Release 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<?php if ( display_header_text() ) : ?>
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
				<h2 class="site-description">
					<?php bloginfo( 'description' ); ?>
				</h2>
			</div>
		<?php endif; ?>
		
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="Header Image" >
			</a>
		<?php endif; // End header image check ?>

		<div class="apoc-social-custom-wrapper">
			<a class="apoc-social-custom facebook" href="https://www.facebook.com/blog.adis?ref=hl" target="_blank"></a>
			<a class="apoc-social-custom twitter" href="https://twitter.com/adi_vasileva" target="_blank"></a>
			<a class="apoc-social-custom email" href="mailto:adriana@apieceofadi.com" target="_blank"></a>
			<a class="apoc-social-custom instagram" href="http://instagram.com/adivasileva" target="_blank"></a>
			<a class="apoc-social-custom pinterest" href="https://www.pinterest.com/tupsi/" target="_blank"></a>
			<a class="apoc-social-custom bloglovin" href="http://www.bloglovin.com/adivasileva" target="_blank"></a>
			<a class="apoc-social-custom rss" href="http://apieceofadi.com/feed/" target="_blank"></a>
		</div>
		
		<div id="apoc-search-form">
			<?php get_search_form(); ?>
		</div>
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'apoc' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'apoc' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
