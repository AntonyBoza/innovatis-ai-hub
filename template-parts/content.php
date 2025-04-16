
<?php
/**
 * Template part for displaying posts
 *
 * @package InnovatisAI
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="blog-meta">
                <div class="entry-meta">
                    <?php
                    innovatis_ai_posted_on();
                    innovatis_ai_posted_by();
                    ?>
                </div><!-- .entry-meta -->
                
                <div class="blog-categories">
                    <?php innovatis_ai_post_categories(); ?>
                </div>
            </div>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php 
            if (is_singular()) :
                the_post_thumbnail('large'); 
            else :
                ?>
                <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?php the_post_thumbnail('medium_large'); ?>
                </a>
                <?php
            endif;
            ?>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if (is_singular()) :
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'innovatis-ai'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'innovatis-ai'),
                    'after'  => '</div>',
                )
            );
        else :
            the_excerpt();
            ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more">
                <?php esc_html_e('Continue reading', 'innovatis-ai'); ?>
            </a>
            <?php
        endif;
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php innovatis_ai_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
