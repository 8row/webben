<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/nav'); ?>

    <a href="#anchor" class="c-down-btn button-background"><span></span><span></span><span></span></a>

    <main class="l-list-page l-list-page--index">
        <header class="l-title" id="particles-js">
            <h1 class="c-title-main"><?php bloginfo('name'); ?></h1>
            <p class="c-title-description"><?php bloginfo('description'); ?></p>
        </header>
        <div class="l-content" id="anchor">
            <?php get_template_part('includes/article-list'); ?>
            <?php
            // if (function_exists('page_navi')) :
            //     page_navi();
            // endif;
            ?>
        </div>
    </main>

    <?php get_footer(); ?>
</body>

</html>