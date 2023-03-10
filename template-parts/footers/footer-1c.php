<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */
?>

<?php if (is_active_sidebar( 'footer-1' )) : ?>
<!-- Footer Widget Section -->
<section class="footer-widget">
    <div class="section-padding pbottom-0">
        <div class="container">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.footer-widget -->
<!-- End Footer Widget Section -->
<?php endif; ?>