
<?php
/**
 * The sidebar containing the main widget area
 *
 * @package InnovatisAI
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area p-4 bg-gray-50 rounded-lg">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->
