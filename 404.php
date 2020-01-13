<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/nav'); ?>

    <main <?php post_class('l-post-page'); ?>>
        <header class="l-title" id="particles-js">
            <h1 class="c-title-main">404</h1>
        </header>
        <div class="l-content">
            <p>お探しのページは、見つかりませんでした。<br>
            このページは一時的にアクセスができない状況にあるか、URLが変更・削除された可能性がございます。</p>
        </div>
    </main>

    <?php get_footer(); ?>
</body>

</html>