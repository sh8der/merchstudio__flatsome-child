<?php 
function new_home_page_render() {
    ob_start();
    echo '<div id="new-home-page">';
    get_template_part('template-parts/main-page/hero-zoomed-desc');
    echo '[block id="novaya-plitka-kategorij-tovarov-c-ikonkami"]';
    echo '[block id="novyj-merch-kak-sposob-kommunikaczii"]';
    echo '[block id="sobstvennyj-merch-novaya-versiya"]';
    get_template_part('template-parts/main-page/cases-with-desc');
    echo '[block id="ostalis-voprosy"]';
    echo '</div>';
    $result = ob_get_clean();
    return do_shortcode( $result );
}


function new_home_page_render_2() {
    ob_start();
    echo '<div id="new-home-page">';
    get_template_part('template-parts/main-page/hero-zoomed-desc');
    echo '[block id="novaya-plitka-kategorij-tovarov-c-ikonkami"]';
    echo '[block id="novyj-merch-kak-sposob-kommunikaczii"]';
	echo '[block id="sobstvennyj-merch-novaya-versiya"]';
    get_template_part('template-parts/main-page/cases-with-desc');
    echo '[block id="ostalis-voprosy-novaya-ikonka"]';
    echo '</div>';
    $result = ob_get_clean();
    return do_shortcode( $result );
}

add_shortcode( 'new_home_page', 'new_home_page_render' );

add_shortcode( 'new_home_page_2', 'new_home_page_render_2' );

add_shortcode( 'home_page__menu_top', function() {
	ob_start();
    echo '<div id="new-home-page">';
    get_template_part('template-parts/main-page/hero-menu-top');
    echo '[block id="novaya-plitka-kategorij-tovarov-c-ikonkami"]';
    echo '[block id="novyj-merch-kak-sposob-kommunikaczii"]';
    echo '[block id="sobstvennyj-merch-novaya-versiya"]';
    get_template_part('template-parts/main-page/cases-with-desc');
    echo '[block id="ostalis-voprosy"]';
    echo '</div>';
    $result = ob_get_clean();
    return do_shortcode( $result );
});

add_shortcode( 'home_page__two_column', function() {
	ob_start();
    echo '<div id="new-home-page">';
    get_template_part('template-parts/main-page/hero-two-column');
    get_template_part('template-parts/main-page/cases-with-desc');
    echo '[block id="novyj-merch-kak-sposob-kommunikaczii"]';
    echo '[block id="sobstvennyj-merch-novaya-versiya"]';
    echo '[block id="novaya-plitka-kategorij-tovarov-c-ikonkami"]';
    echo '[block id="ostalis-voprosy"]';
    echo '</div>';
    $result = ob_get_clean();
    return do_shortcode( $result );
});

add_shortcode( 'home_page__one_column_without_big_text', function() {
    ob_start();
    echo '<div id="new-home-page">';
    get_template_part('template-parts/main-page/hero-one-column__without-big-text');
    get_template_part('template-parts/main-page/cases-with-desc');
    echo '[block id="novyj-merch-kak-sposob-kommunikaczii"]';
    echo '[block id="sobstvennyj-merch-novaya-versiya"]';
    echo '[block id="novaya-plitka-kategorij-tovarov-c-ikonkami"]';
    echo '[block id="ostalis-voprosy"]';
    echo '</div>';
    $result = ob_get_clean();
    return do_shortcode( $result );
});