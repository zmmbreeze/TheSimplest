<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="main" role="main">

    <header class="page-header">
        <h1 class="page-title"><?php
            printf( __( 'Category Archives: %s', 'toolbox' ), '<span>' . single_cat_title( '', false ) . '</span>' );
        ?></h1>

        <?php
            $category_description = category_description();
            if ( ! empty( $category_description ) )
                echo apply_filters( 'tag_description_meta', '<div class="tag-description-meta">' . $tag_description . '</div>' );
        ?>
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
    <div class="pagination pagination-centered">
    <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'type' => 'list'
        ) );
    ?>
    </div>
    <?php endif; ?>
</div><!-- .main -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
