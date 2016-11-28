<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package York_University_2016
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-wrapper">
        <div class="social-links-bar">
            <div class="footer-title"><?php bloginfo('name'); ?></div>
            <?php if (get_theme_mod('social_link_facebook') != '') : ?>
                <a href="<?php echo get_theme_mod('social_link_facebook', 'https://www.facebook.com/yorkuniversityhome'); ?>"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
            <?php endif; ?>
            <?php if (get_theme_mod('social_link_twitter') != '') : ?>
                <a href="<?php echo get_theme_mod('social_link_twitter', 'https://twitter.com/YorkUnews'); ?>"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
            <?php endif; ?>
            <?php if (get_theme_mod('social_link_instagram') != '') : ?>
                <a href="<?php echo get_theme_mod('social_link_instagram', 'https://www.instagram.com/yorkuofficial/'); ?>"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            <?php endif; ?>
            <?php if (get_theme_mod('social_link_youtube') != '') : ?>
                <a href="<?php echo get_theme_mod('social_link_youtube', 'https://www.youtube.com/user/YorkUniversity'); ?>"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
            <?php endif; ?>
            <?php if (get_theme_mod('social_link_rss') != '') : ?>
                <a href="<?php echo get_theme_mod('social_link_rss'); ?>"><i class="fa fa-rss-square fa-2x" aria-hidden="true"></i></a>
            <?php endif; ?>
            <?php if (get_theme_mod('social_link_linkedin') != '') : ?>
                <a href="<?php echo get_theme_mod('social_link_linkedin'); ?>"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
            <?php endif; ?>
        </div>
        <div class="footer-widget-panels">
            <?php
            dynamic_sidebar('footer-1');
            dynamic_sidebar('footer-2');
            dynamic_sidebar('footer-3');
            ?>
        </div>
        <div class="site-info">
            Faculty of Environmental Studies, York University Theme 2016.
        </div><!-- .site-info -->
        <div class="york-global-footer-links">
            <ul>
                <li><a href="http://site.info.yorku.ca/site-index/">Site Index</a></li>
                <li><a href="http://site.info.yorku.ca/privacy-legal/">Privacy &amp; Legal</a></li>
                <li><a href="http://about.yorku.ca/careers/">Careers</a></li>
                <li><a href="http://site.info.yorku.ca/">Contact York University</a></li>
            </ul>
        </div>
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
