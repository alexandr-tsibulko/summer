<?php get_header(); ?>

    <div class="wrapper">
        <?php get_sidebar() ?>
        <div class="content">
            <div class="box">
                 <div class="in">
                     <h2>Who is more british than <b>Blur</b>?</h2>
                     <p>So folks grab a Boddingtons w/a Flake, Put on 1000 Greatest Goals (we won't talk about the World Cup), and listen to these songs in tribute to the States! </p>
                     <a href="#">See the Line-Up!</a>
                 </div>

                <img src="<?php bloginfo('template_directory'); ?>/images/blur.png" alt="blur"/>
            </div>
            <h2 class="title">News and announcements
                <a href="#" class="rss">get rss</a>
            </h2>
            <ul class="news">
                <?php
                query_posts('category_name=News and announcements&orderby=date&order=ASC');
                if (have_posts()): while(have_posts()): the_post();
                ?>
                <li>
                   <a href="#"> <?php echo get_the_post_thumbnail( $id, array(112,119), array( 'class' => 'entry-thumbnail' ) ); ?></a>
                    <div class="entry-block">
                        <div class="title-excerpt">
                            <h3 class="entry-title"><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                        <p class="cont"><?php the_content(); ?></p>
                    </div>
                </li>
                <?php endwhile; endif; wp_reset_query(); ?>
            </ul>
        </div>
    </div>

<?php get_footer(); ?>

