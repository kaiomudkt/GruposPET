<?php
/**
 * The front page template file.
 *
 * The front-page.php template file is used to render your site’s front page,
 * whether the front page displays the blog posts index (mentioned above) or a static page.
 * The front page template takes precedence over the blog posts index (home.php) template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package OnePress
 */

get_header();

$layout = onepress_get_layout();

    /**
     * @since 2.0.0
     * @see onepress_display_page_title
     */
    //do_action( 'onepress_page_before_content' );
    ?>
	<div id="content" class="site-content">
        <?php onepress_breadcrumb(); ?>
        <div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
			<div id="primary" class="content-area">
					<!-- carrossel banner -->
						<?php require_once(get_stylesheet_directory() . "/banner-carrossel.php");  ?>
					<!-- list post -->
						<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', '' );
								?>

							<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>

						<?php ?>
				<!-- MAPA BRASIL -->
				<div id="mapa_pets_brasil" class=" post list-article clearfix">
				    <div style="">
				        <div id="mapa_brasil">
				            <?php
				                include('Mapa+do+Brasil+SVGa.html');
				            ?>
				        </div>
				    </div> 
				</div><!-- end MAPA BRASIL -->
			</div><!-- #primary -->

            <?php if ( $layout != 'no-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
