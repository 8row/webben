    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_theme_file_uri('js/jquery.inview.min.js')); ?>"></script>
    <?php
	$hamburgerMenuSelect;
	if (is_front_page() || is_home() || is_tax() || is_tag() || is_category()) {
		$hamburgerMenuSelect = get_theme_file_uri('hamburger-menu-assets/js/simple.js');
	} else {
		$hamburgerMenuSelect = get_theme_file_uri('hamburger-menu-assets/js/extend.js');
	}
	$hamburgerMenuUri = '<script src="' . $hamburgerMenuSelect . '"></script>';
	echo $hamburgerMenuUri;
	?>

    <script src="<?php echo esc_url(get_theme_file_uri('hamburger-menu-assets/js/page-top.js')); ?>"></script>
    <script src="<?php echo esc_url(get_theme_file_uri('js/particles/particles.min.js')); ?>"></script>
    <script src="<?php echo esc_url(get_theme_file_uri('js/particles/app.js')); ?>"></script>
    <script src="<?php echo esc_url(get_theme_file_uri('js/function.js')); ?>"></script>

    <?php wp_footer(); ?>