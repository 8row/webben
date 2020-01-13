<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/nav'); ?>

    <?php while (have_posts()) : the_post(); ?>
        <main <?php post_class('l-post-page'); ?>>
            <header class="l-title" id="particles-js">
                <h1 class="c-title-main"><?php the_title(); ?></h1>
            </header>
            <div class="l-content u-text-space">
                <div class="u-position-relative">
                    <?php get_template_part('includes/date'); ?>
                    <?php
                    if (function_exists('bread_crumb')) {
                        bread_crumb();
                    }
                    ?>
                    <?php the_tags('<span class="c-tag">Tag&nbsp;:&nbsp;', '&nbsp;/&nbsp;', '</span>'); ?>
                </div>
                <?php the_post_thumbnail('thumbnail'); ?>
                <?php the_content(); ?>
            </div>
        </main>
    <?php endwhile; ?>

    <?php get_footer(); ?>
</body>

</html>