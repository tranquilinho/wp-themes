<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
  <meta property="og:title" content="<?php echo get_the_title();  ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="Biocomputing Unit"/>
  <!-- <meta property="og:url" content="http://www.-range" /> -->
  <meta property="og:description" content="Description">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<meta property="og:image" content="<?php echo esc_url($image[0]); ?>"/> 
  <?php endif; ?>
  

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div id="navigation" class="site-branding">
		        <?php $header_image = get_header_image();
			      if ( ! empty( $header_image ) ) { ?>
		              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			      </a>
			<?php } // if ( ! empty( $header_image ) )?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
			  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', '_s' ); ?></button>
			  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div> <!-- /navigation -->

		<?php
		if ( is_front_page()) : ?>
		    <div id="site-description" class="site-branding bg-light">
				<h1><span class="site-title"><?php bloginfo( 'name' ); ?></span>
				<?php
				   $description = get_bloginfo( 'description', 'display' );
				   if ( $description || is_customize_preview() ) : ?>
			              <span class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></span>
				<?php
				   endif; ?>
				</h1>
		    </div><!-- /site-description -->
		<?php
   		endif; ?>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
