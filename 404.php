
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package InnovatisAI
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'innovatis-ai'); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'innovatis-ai'); ?></p>

                <?php get_search_form(); ?>

                <div class="widget-area">
                    <div class="widget">
                        <h2><?php esc_html_e('Most Used Categories', 'innovatis-ai'); ?></h2>
                        <ul>
                            <?php
                            wp_list_categories(
                                array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                )
                            );
                            ?>
                        </ul>
                    </div><!-- .widget -->

                    <?php
                    /* translators: %1$s: smiley */
                    $innovatis_ai_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'innovatis-ai'), convert_smilies(':)')) . '</p>';
                    the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$innovatis_ai_archive_content");

                    the_widget('WP_Widget_Tag_Cloud');
                    ?>
                </div><!-- .widget-area -->
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </div>
</main><!-- #main -->

<?php
get_footer();
