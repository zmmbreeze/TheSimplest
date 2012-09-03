<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="main" role="main">
    <header class="page-header">
        <h1 class="page-title">
            <?php
                if ( is_day() ) :
                    printf( __( 'Daily Archives: %s', 'toolbox' ), '<span>' . get_the_date() . '</span>' );
                elseif ( is_month() ) :
                    printf( __( 'Monthly Archives: %s', 'toolbox' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
                elseif ( is_year() ) :
                    printf( __( 'Yearly Archives: %s', 'toolbox' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
                else :
                    _e( 'Archives', 'toolbox' );
                endif;
            ?>
        </h1>
    </header>

    <?php if (have_posts()) : ?>
    <ol class="main-articles">
        <?php while (have_posts()) : the_post(); ?>
        <li>
            <h2>
            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
            <span><?php comments_number( '', '(1)', '(%)' ); ?> </span>
            <time><?php the_modified_date('Y-m-d') ?><!--日期--></time>
        </li>
        <ul class="pager">
            <li><?php previous_posts_link('&laquo; 上一页') ?></li>
            <li><?php next_posts_link('下一页 &raquo;','') ?></li>
        </ul>
        <?php endwhile; ?>
    </ol>
    <?php endif; ?>
</div><!-- .main -->
</div><!-- .left -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
