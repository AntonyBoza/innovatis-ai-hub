
<?php
/**
 * The main template file
 *
 * @package InnovatisAI
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            if (is_home() && !is_front_page()) :
                ?>
                <header class="page-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>
                <?php
            endif;

            /* Start the Loop */
            while (have_posts()) :
                the_post();
                
                /*
                 * Include the template for the content.
                 */
                get_template_part('template-parts/content', get_post_type());

            endwhile;

            the_posts_navigation(array(
                'prev_text' => '&larr; ' . esc_html__('Older posts', 'innovatis-ai'),
                'next_text' => esc_html__('Newer posts', 'innovatis-ai') . ' &rarr;',
            ));

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
