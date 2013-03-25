<div class="sidebar">
    <?php
    wp_nav_menu(
        array(
            'menu'            => 'sidebar-menu',
            'container'       => '',
            'menu_class'      => 'nav',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        )
    )
    ;?>
    <h4>Social stuff</h4>
    <ul class="social">
        <li class="tw"><a href="#"></a></li>
        <li class="unw"><a href="#"></a></li>
        <li class="f"><a href="#"></a></li>
    </ul>
    <?php query_posts('category_name=sidebar-p');
    if (have_posts()): the_post();
    ?>

    <h4><?php the_title()?></h4>
    <p><?php the_content(); endif; wp_reset_query();?></p>
</div>