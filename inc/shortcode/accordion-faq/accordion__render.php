<?php

function ux_accordion_faq($atts, $content = null) {
	extract(shortcode_atts(array(
		'auto_open' => '',
		'open' => '',
		'title' => '',
		'class' => '',
	), $atts));

	if ($auto_open) {
		$open = 1;
	}

	$classes = array('accordion', 'sh8der-faq');
	if ($class) {
		$classes[] = $class;
	}

	if ($title) {
		$title = '<h3 class="accordion_title">' . $title . '</h3>';
	}

	return $title . '<div class="' . implode(' ', $classes) . '" rel="' . $open . '">' . flatsome_contentfix(do_shortcode($content)) . '</div>';
}
add_shortcode('accordion-faq', 'ux_accordion_faq');

function ux_accordion_item_faq($atts, $content = null) {
	extract(shortcode_atts(array(
		'title' => 'Accordion Panel',
		'class' => '',
		'anchor' => '#',
		'link' => '#'
	), $atts));
	$classes = array('accordion-item', 'sh8der-faq__item');
	if ($class) {
		$classes[] = $class;
	}

	ob_start();

	?>

	<div class="<?php echo implode(' ', $classes); ?>" itemprop="mainEntity" itemscope itemtype="http://schema.org/Question">
		<div class="accordion-title plain">
			<button class="toggle">
				<i class="icon-angle-down"></i>
			</button>
			<a name="<?php echo $anchor; ?>" id="<?php echo $anchor; ?>"  <?php if ($link): echo "href='$link'"; endif;?> >
				<span itemprop="name"><?php echo $title; ?></span>
			</a>
		</div>
		<div class="accordion-inner" itemscope itemprop="acceptedAnswer" itemtype="http://schema.org/Answer">
			<div class="accordion-inner__faq-answer-text" itemprop="text">
				<?php echo do_shortcode(flatsome_contentfix($content)); ?>
			</div>
		</div>
	</div>

	<?php
return ob_get_clean();
}
add_shortcode('accordion-faq-item', 'ux_accordion_item_faq');



function add_faq_itemtype_in_html_tag($content) {
    preg_match_all(
        '/' . get_shortcode_regex(['accordion-faq']) . '/',
        $content,
        $shortcodes,
        PREG_SET_ORDER
    );

    if (!empty($shortcodes)) {
	    return "<div itemscope itemtype=\"http://schema.org/FAQPage\">{$content}</div>";
    } else {
		return $content;
    }
}

add_filter( 'the_content', 'add_faq_itemtype_in_html_tag', 1 );