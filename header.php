<nav class="top-bar" data-topbar role="navigation">

    <ul class="title-area">

        <li class="name">
            <h1><a href="<?= esc_url(home_url('/')) ?>"><?php bloginfo('name'); ?></a></h1>
        </li>

        <li class="toggle-topbar menu-icon">
            <a href="#"><span>Menu</span></a>
        </li>

    </ul>

    <?php 

        $menu_options = array(
            'menu'            => 'Main',
            'container'       => 'section',
            'container_class' => 'top-bar-section',
            'items_wrap'      => '<ul id="%1$s" class="%2$s right">%3$s</ul>'
        );

        echo "<section class=\"top-bar-section\">";
        
        wp_nav_menu($menu_options);

        echo "</section>";

    ?>

</nav>
