<?php
/**
 * PROJECT : justcoder
 * FILE    : index.php
 * AUTHOR  : Younger Shen
 * EMAIL   : younger.shen@hotmail.com
 * CELL    : 13811754531
 * TIME    : 2018/3/9 15:59
 */
?>

<?php get_header(); ?>

    <main id="main" class="justcoder-main" role="main">
        <?php

        if ( have_posts() ) :

            while ( have_posts() ) : the_post();
                get_template_part( 'templates/content', get_post_format() );

            endwhile;

            the_posts_pagination( array(
                'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'justcoder' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'justcoder' ) . '</span>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'justcoder' ) . ' </span>',
            ) );

        else :

            get_template_part( 'templates/content', 'none' );

        endif;

        ?>
    </main>
</div> <!-- content end-->

<?php get_sidebar(); ?>

</div> <!-- container end -->

</div> <!-- body end -->

<?php  get_footer() ?>