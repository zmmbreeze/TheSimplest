<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single' ); ?>
        <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
                comments_template( '', true );
        ?>
    <?php endwhile; // end of the loop. ?>
</div><!-- .main -->
</div>
<?php get_sidebar(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.1.8.2.js"></script>
<script>
$(function() {
    var num = -1;
    $('#entryContent')
        .find('h1,h2,h3,h4,h5')
        .each(function(i, dom) {
            var nodeName = dom.nodeName.toLowerCase(),
                $dom = $(dom),
                level;
            if (nodeName === 'h1' || nodeName === 'h2') {
                num++;
                num = num % 3;
                $dom.addClass('entry-content-L1-3n' + (num + 1));
            } else {
                level = parseInt(nodeName.slice(1)) - 1;
                $dom.addClass('entry-content-L' + level + '-3n' + (num + 1));
            }
        });
});
</script>
<?php get_footer(); ?>
