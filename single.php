
<?php
/**
 * The template for displaying all single posts
 *
 * @package InnovatisAI
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-3/4 md:pr-8">
                <?php
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content', get_post_type());

                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle font-medium">' . esc_html__('Previous:', 'innovatis-ai') . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle font-medium">' . esc_html__('Next:', 'innovatis-ai') . '</span> <span class="nav-title">%title</span>',
                            'class' => 'my-8 p-4 bg-gray-50 rounded-lg',
                        )
                    );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
            <div class="w-full md:w-1/4 mt-8 md:mt-0">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>
