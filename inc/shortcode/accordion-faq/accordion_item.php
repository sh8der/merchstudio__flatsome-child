<?php

add_ux_builder_shortcode('accordion-faq-item', array(
	'type' => 'container',
	'name' => __('Ответ на вопрос'),
	// 'template' => flatsome_ux_builder_template( 'accordion_item.html' ),
	'info' => '{{ title }}',
	'require' => array('accordion-faq'),
	'wrap' => false,
	'hidden' => true,
	'options' => array(
		'title' => array(
			'type' => 'textfield',
			'heading' => __('Title'),
			'default' => __('Ответ на вопрос'),
			'auto_focus' => true,
		),
		'anchor' => array(
			'type' => 'textfield',
			'heading' => __('Якорь'),
			'description' => __('Указывается без знака #, но на неё ссылаются ссылки как раз со знаком #'),
			'default' => __('#'),
		),
		'link' => array(
			'type' => 'textfield',
			'heading' => __('Ссылка в href'),
			'default' => __('#'),
		),
		'class' => array(
			'type' => 'textfield',
			'heading' => 'Custom Class',
			'full_width' => true,
			'placeholder' => 'class-name',
			'default' => '',
		),
	),
));
