<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="main" role="main">

    <header class="page-header">
        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'toolbox' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
        <?php endwhile; ?>
    </ol>
    <ul class="pager">
        <li><?php previous_posts_link('&laquo; 上一页') ?></li>
        <li><?php next_posts_link('下一页 &raquo;','') ?></li>
    </ul>
    <?php endif; ?>
</div><!-- .main -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
