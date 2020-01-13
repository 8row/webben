<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <article <?php post_class(classes()); ?>>
            <header class="c-list-item__title c-list-item__title--book">
                <h2><!-- <i class="fas fa-book fa-fw c-list-item__title--icon"></i> --><?php the_title(); ?></h2>
                <?php if(has_tag( 'recommend' )){echo '<span class="c-list-item__title--recommend"> RECOMMEND</span>';} ?>
            </header>
            <div class="c-list-item__content">
                <?php the_post_thumbnail('thumbnail'); ?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="c-main-btn">MORE</a>
                <?php get_template_part('includes/date'); ?>
            </div>
        </article>
    <?php endwhile; ?>
    <?php //the_posts_pagination(); ?>
<?php else : ?>
    <p>あてはまる情報はまだありません。</p>
<?php endif; ?>