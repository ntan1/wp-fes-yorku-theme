<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package York_University_2016
 */
get_header('modern');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', get_post_format());

            the_post_navigation(array(
              'prev_text' => __('<i class="fa fa-chevron-left" aria-hidden="true"></i> %title'),
              'next_text' => __('%title <i class="fa fa-chevron-right" aria-hidden="true"></i>'),
            ));

            /*
             * Comments have been commented it out since it is not used for York U FES Themes.
             */
            // If comments are open or we have at least one comment, load up the comment template.
            //if (comments_open() || get_comments_number()) :
                //comments_template();
            //endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
