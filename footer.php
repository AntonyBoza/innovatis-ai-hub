
<?php
/**
 * The template for displaying the footer
 *
 * @package InnovatisAI
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-widgets-container">
                <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
                    <div class="footer-widgets">
                        <?php dynamic_sidebar( 'footer-widgets' ); ?>
                    </div>
                <?php else : ?>
                    <div class="footer-content">
                        <div class="footer-info">
                            <h3>Innovatis<span class="text-white">AI</span></h3>
                            <p>Empowering businesses with innovative AI solutions for growth, 
                            efficiency, and digital transformation.</p>
                        </div>
                        <div class="footer-menu">
                            <h4><?php esc_html_e('Solutions', 'innovatis-ai'); ?></h4>
                            <ul>
                                <li><a href="#"><?php esc_html_e('AI Consulting', 'innovatis-ai'); ?></a></li>
                                <li><a href="#"><?php esc_html_e('Predictive Analytics', 'innovatis-ai'); ?></a></li>
                                <li><a href="#"><?php esc_html_e('Conversational AI', 'innovatis-ai'); ?></a></li>
                                <li><a href="#"><?php esc_html_e('Data Management', 'innovatis-ai'); ?></a></li>
                            </ul>
                        </div>
                        <div class="footer-menu">
                            <h4><?php esc_html_e('Company', 'innovatis-ai'); ?></h4>
                            <ul>
                                <li><a href="#"><?php esc_html_e('About Us', 'innovatis-ai'); ?></a></li>
                                <li><a href="#"><?php esc_html_e('Blog', 'innovatis-ai'); ?></a></li>
                                <li><a href="#"><?php esc_html_e('Contact', 'innovatis-ai'); ?></a></li>
                                <li><a href="#"><?php esc_html_e('Privacy Policy', 'innovatis-ai'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="site-info">
                <?php
                printf(
                    /* translators: %1$s: current year, %2$s: site name */
                    esc_html__('© %1$s %2$s. All Rights Reserved.', 'innovatis-ai'),
                    date_i18n('Y'),
                    '<a href="' . esc_url(home_url('/')) . '">InnovatisAI</a>'
                );
                ?>
            </div><!-- .site-info -->
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
