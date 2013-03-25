<?php get_header(); ?>

<div class="wrapper">
    <?php get_sidebar(); ?>
    <div class="content">
        <div class="page-in">
            <?php
            query_posts('category_name=news-big&orderby=date&order=ASC');
            if (have_posts()): while(have_posts()): the_post(); ?>
                <h2 class="news-big"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                    <a href="#"> <?php echo get_the_post_thumbnail( $id, array(112,119), array( 'class' => 'entry-thumbnail' ) ); ?></a>
                        <div class="content-big"><?php the_content(); ?></div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>