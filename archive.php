<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/nav'); ?>

    <main class="l-list-page l-list-page">
        <header class="l-title" id="particles-js">
            <?php 
            $category = get_the_category();
            echo '<h1 class="c-title-main">'. $category[0]->cat_name . '</h1>';
            ?>
        </header>
        <div class="l-content">
            <?php get_template_part('includes/article-list'); ?>
        </div>
    </main>

    <?php get_footer(); ?>
</body>

</html>