
<?php
/**
 * Template part for displaying posts
 *
 * @package InnovatisAI
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post bg-white rounded-lg shadow-md overflow-hidden mb-6'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php 
            if (is_singular()) :
                the_post_thumbnail('large', ['class' => 'w-full h-auto']); 
            else :
                ?>
                <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-64 object-cover']); ?>
                </a>
                <?php
            endif;
            ?>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="entry-content p-4">
        <header class="entry-header mb-4">
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title text-3xl font-bold">', '</h1>');
            else :
                the_title('<h2 class="entry-title text-xl font-bold"><a href="' . esc_url(get_permalink()) . '" class="hover:text-innovatis-blue transition-colors" rel="bookmark">', '</a></h2>');
            endif;

            if ('post' === get_post_type()) :
                ?>
                <div class="blog-meta flex justify-between items-center text-sm text-gray-600 mt-2">
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

        <?php if (is_singular()) : ?>
            <div class="entry-content prose max-w-none">
                <?php
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
                ?>
            </div><!-- .entry-content -->
        <?php else : ?>
            <div class="entry-summary mt-2">
                <?php the_excerpt(); ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="inline-block mt-3 text-innovatis-blue hover:text-innovatis-purple transition-colors font-medium">
                    <?php esc_html_e('Continue reading →', 'innovatis-ai'); ?>
                </a>
            </div><!-- .entry-summary -->
        <?php endif; ?>

        <footer class="entry-footer mt-4 text-sm text-gray-500">
            <?php innovatis_ai_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
