<div class="c-entry-date">
    <time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:sP'); ?>">
        <?php the_time('Y年m月d日'); ?>
    </time>
    <?php if (get_the_modified_time('Y-m-d') != get_the_time('Y-m-d')) : ?>
        <br><time datetime="<?php the_modified_time('Y-m-d'); ?>T<?php the_modified_time('H:i:sP'); ?>">
            <i class="fas fa-sync-alt"></i> <?php the_modified_time('y年m月d日') ?>
        </time><?php endif; ?>
</div>