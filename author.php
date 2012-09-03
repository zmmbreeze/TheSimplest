<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="main" role="main">
    <header class="page-header">
        <h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'toolbox' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
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
