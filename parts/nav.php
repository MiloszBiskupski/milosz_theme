<body class="d-flex flex-column align-items-center">
<nav class="w-100 py-3 d-flex justify-content-center align items-center position-fixed">
    <div class="container-xl position-relative d-flex flex-row justify-content-between align-items-center col-lg-12">
        <div class="logo d-flex flex-column">
            <span class="fs-4 lh-1 fw-medium">
                Miłosz
            </span>
            <span class="fs-6 lh-1 fw-light">
                WEB & GAME DEVELOPER
            </span>
        </div>
        <div id="burger-menu" class="burger-menu">
            <div id="top-burger-line" class="burger-line"></div>
            <div id="middle-burger-line" class="burger-line my-2"></div>
            <div id="bottom-burger-line" class="burger-line"></div>
        </div>
        <?php
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'menu_class'     => 'main-menu-list',
            'container_id'   => 'main-menu-container',
        ]);
        ?>
    </div>
</nav>