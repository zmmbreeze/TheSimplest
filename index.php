<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="main" role="main">
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
        <?php endwhile; ?>
    </ol>
    <ul class="pager">
        <li><?php previous_posts_link('&laquo; 上一页') ?></li>
        <li><?php next_posts_link('下一页 &raquo;','') ?></li>
    </ul>
    <?php endif; ?>
    <?php get_search_form(); ?>
</div><!-- .main -->
</div><!-- .left -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
