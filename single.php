<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package OnePress
 */

get_header();
$layout = onepress_get_layout();

/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );
?>
    <div id="content" class="site-content">

        <?php onepress_breadcrumb(); ?>

        <div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>
                        <?php
                        /**
                         * Template part for displaying single posts.
                         *
                         * @link https://codex.wordpress.org/Template_Hierarchy
                         *
                         * @package OnePress
                         */

                        ?>

                        <?php 
                        
                        //var_dump(get_the_ID());
                          //var_dump($url_pet);  
                         ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                <?php 
                                    $url_pet = esc_attr( get_post_meta( get_the_ID(),'url_pet', true) );
                                    //echo $url_pet;
                                 ?>
                                <?php if (esc_attr( get_post_meta( get_the_ID(), 'pet_responsavel', true ) )) {
                                    echo '<a href="'.
                                        $url_pet.'">Postado pelo PET: '.esc_attr( get_post_meta( get_the_ID(), 'pet_responsavel', true )
                                        /* . '</a>'*/ );
                                } ?>
                                <?php if ( get_theme_mod( 'single_meta', 1 ) ) { ?>
                                <div class="entry-meta">
                                    <?php onepress_posted_on(); ?>
                                </div><!-- .entry-meta -->
                                <?php } ?>
                                
                            </header><!-- .entry-header -->

                            <?php if ( get_theme_mod( 'single_thumbnail', 0 ) && has_post_thumbnail() ) { ?>
                                <div class="entry-thumbnail">
                                    <?php
                                    $layout = onepress_get_layout();
                                    $size = 'large';
                                    the_post_thumbnail( $size );
                                    ?>
                                </div><!-- .entry-footer -->
                            <?php } ?>

                            <div class="entry-content">
                                <?php the_content(); ?>
                                <?php
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'onepress' ),
                                        'after'  => '</div>',
                                    ) );
                                ?>
                            </div><!-- .entry-content -->
                            <?php if ( get_theme_mod( 'single_meta', 1 ) ) { ?>

                            <?php onepress_entry_footer(); ?>

                            <?php } ?>
                        </article><!-- #post-## -->
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; // End of the loop. ?>

                </main><!-- #main -->
            </div><!-- #primary -->

            <?php if ( $layout != 'no-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>

        </div><!--#content-inside -->
    </div><!-- #content -->

<?php get_footer(); ?>
