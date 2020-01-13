<!-- ここからハンバーガーメニュー -->
<div class="hamburger-menu__hamburger-button is-hg-active" id="js-hamburger-button">
    <img src="<?php echo esc_url(get_theme_file_uri('hamburger-menu-assets/img/hamburger.svg')); ?>" alt="メニューを開く">
</div>
<div class="hamburger-menu__cross-button" id="js-cross-button">
    <img src="<?php echo esc_url(get_theme_file_uri('hamburger-menu-assets/img/cross.svg')); ?>" alt="メニューを閉じる">
</div>
<nav class="hamburger-menu__nav" id="js-hg-menu">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'place_global',
            'container' => false,
        )
    );
    ?>
</nav>
<a href="#" class="minimal-page-top" id="js-minimal-page-top">
    <img src="<?php echo esc_url(get_theme_file_uri('hamburger-menu-assets/img/minimal-page-top.svg')); ?>" alt="ページトップへ移動">
</a>
<!-- ここまでハンバーガーメニュー -->