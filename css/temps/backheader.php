<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<!-- Navigatio BAR-->
    <div class="container-fluid social-icons">
      <div class="text-center top">
        <p style="font-size:0.8em; padding-top:15px;"><span class="mobile-hide">Call NOW!</span> <a href="tel:+393282014283">+39 328 20 14 283</a> <span class="bar">|</span> <a href="callto:bluecells"><img src="http://yoursafety.training/images/skype.png" width="40" alt="Skype">bluecells</a> <span class="bar">|</span> <a href="https://api.whatsapp.com/send?phone=0393282014283"><img src="http://yoursafety.training/images/whatsapp.png" width="40" alt="Whatsapp">Whatsapp</a></p>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" style="color:lightgray; padding:0 20px;" href="index.html">BLUE CELLS<br>YOUR SAFETY TRAINING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="http://yoursafety.training/index.html">Handle violence<span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="http://yoursafety.training/services.html">Training programs</a> </li>
        <!--<li class="nav-item"> <a class="nav-link" href="gallery.html">Control Wear</a> </li>-->
        <li class="nav-item"> <a class="nav-link" href="http://yoursafety.training/trainer.html">Trainer</a> </li>
        <li class="nav-item"> <a class="nav-link" href="http://yoursafety.training/blog/index.php">Blog</a> </li>
      </ul>
            <ul class="nav navbar-nav">
                <li class="ml-auto ml-zero-mobile"> <a class="nav-link" href="http://yoursafety.training/IT/index.html"><img src="http://yoursafety.training/images/Italy-Flag.png" height="32px" alt="In italiano"></a></li>
                <li class="nav-item navbar-right"> <a class="nav-link" href="http://yoursafety.training/FR/index.html"><img src="http://yoursafety.training/images/French-Flag.png" height="32px" alt="En français"></a></li>
            </ul>
    </div>
  </nav>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .site-branding-container -->

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
