
<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package InnovatisAI
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			printf( 
				esc_html__( '© %1$s %2$s. All Rights Reserved.', 'innovatis-ai' ),
				date_i18n( 'Y' ),
				'<a href="https://innovatis.ai/">InnovatisAI</a>'
			);
			?>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
