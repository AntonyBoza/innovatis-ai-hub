
<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear. Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InnovatisAI
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php if (is_active_sidebar('homepage-widgets')) : ?>
        <div class="homepage-widgets">
            <?php dynamic_sidebar('homepage-widgets'); ?>
        </div>
    <?php else : ?>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title"><?php esc_html_e('Transform Your Business with AI Solutions', 'innovatis-ai'); ?></h1>
                    <p class="hero-subtitle"><?php esc_html_e('Innovative artificial intelligence consulting and implementation for the modern enterprise', 'innovatis-ai'); ?></p>
                    <div class="hero-buttons">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="button button-primary"><?php esc_html_e('Get Started', 'innovatis-ai'); ?></a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="button button-secondary"><?php esc_html_e('Learn More', 'innovatis-ai'); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e('Our AI Solutions', 'innovatis-ai'); ?></h2>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon"><?php echo innovatis_ai_get_icon('brain'); ?></div>
                        <h3><?php esc_html_e('AI Consulting', 'innovatis-ai'); ?></h3>
                        <p><?php esc_html_e('Strategic guidance on implementing AI solutions tailored to your business needs and goals.', 'innovatis-ai'); ?></p>
                    </div>

                    <div class="service-card">
                        <div class="service-icon"><?php echo innovatis_ai_get_icon('chart'); ?></div>
                        <h3><?php esc_html_e('Predictive Analytics', 'innovatis-ai'); ?></h3>
                        <p><?php esc_html_e('Leverage your data to forecast trends, anticipate market changes, and make data-driven decisions.', 'innovatis-ai'); ?></p>
                    </div>

                    <div class="service-card">
                        <div class="service-icon"><?php echo innovatis_ai_get_icon('message'); ?></div>
                        <h3><?php esc_html_e('Conversational AI', 'innovatis-ai'); ?></h3>
                        <p><?php esc_html_e('Custom chatbots and virtual assistants to enhance customer engagement and automate support.', 'innovatis-ai'); ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Section -->
        <section class="about-section">
            <div class="container">
                <div class="about-content">
                    <h2 class="section-title"><?php esc_html_e('About InnovatisAI', 'innovatis-ai'); ?></h2>
                    <p><?php esc_html_e('InnovatisAI is a leading provider of artificial intelligence solutions for businesses of all sizes. We help organizations harness the power of AI to drive growth, efficiency, and innovation.', 'innovatis-ai'); ?></p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="button button-outline"><?php esc_html_e('Learn More About Us', 'innovatis-ai'); ?></a>
                </div>
            </div>
        </section>
        
        <!-- Latest Posts Section -->
        <section class="latest-posts-section">
            <div class="container">
                <h2 class="section-title"><?php esc_html_e('Latest from Our Blog', 'innovatis-ai'); ?></h2>
                <div class="posts-grid">
                    <?php
                    $latest_posts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_status' => 'publish'
                    ));

                    if ($latest_posts->have_posts()) :
                        while ($latest_posts->have_posts()) :
                            $latest_posts->the_post();
                            ?>
                            <div class="post-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('innovatis-card'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="post-content">
                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="post-meta">
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                    </div>
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read More', 'innovatis-ai'); ?></a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <p><?php esc_html_e('No posts found.', 'innovatis-ai'); ?></p>
                        <?php
                    endif;
                    ?>
                </div>
                <div class="view-all">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="button button-secondary"><?php esc_html_e('View All Posts', 'innovatis-ai'); ?></a>
                </div>
            </div>
        </section>
        
        <!-- Contact CTA Section -->
        <section class="contact-cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2><?php esc_html_e('Ready to Transform Your Business?', 'innovatis-ai'); ?></h2>
                    <p><?php esc_html_e('Get in touch with our team of AI experts to discuss your specific needs and challenges.', 'innovatis-ai'); ?></p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="button button-primary"><?php esc_html_e('Contact Us Today', 'innovatis-ai'); ?></a>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main><!-- #main -->

<?php
get_footer();
