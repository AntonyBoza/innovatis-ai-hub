
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package InnovatisAI
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <?php
        if (have_posts()) :
            if (is_home() && !is_front_page()) :
                ?>
                <header class="page-header mb-6">
                    <h1 class="page-title text-3xl font-bold"><?php single_post_title(); ?></h1>
                </header>
                <?php
            endif;

            /* Start the Loop */
            echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">';
            while (have_posts()) :
                the_post();
                
                /*
                 * Include the template for the content.
                 */
                get_template_part('template-parts/content', get_post_type());

            endwhile;
            echo '</div>';

            the_posts_navigation(array(
                'prev_text' => '&larr; ' . esc_html__('Older posts', 'innovatis-ai'),
                'next_text' => esc_html__('Newer posts', 'innovatis-ai') . ' &rarr;',
                'class' => 'my-8',
            ));

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>
