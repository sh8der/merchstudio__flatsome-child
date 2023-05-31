<?php

add_ux_builder_shortcode('accordion-faq', array(
	'type' => 'container',
	'name' => __('FAQ'),
	'image' => '',
	'category' => __('Content'),
	'info' => '{{ title }}',
	'allow' => array('accordion-faq-item'),

	'presets' => array(
		array(
			'name' => __('Default'),
			'content' => '
                [accordion-faq]
                    [accordion-faq-item title="Вопрос №1"][/accordion-faq-item]
                    [accordion-faq-item title="Вопрос №2"][/accordion-faq-item]
                    [accordion-faq-item title="Вопрос №3"][/accordion-faq-item]
                [/accordion-faq]
            ',
		),
	),

	'options' => array(
		'title' => array(
			'type' => 'textfield',
			'heading' => __('Title'),
			'default' => __(''),
			'auto_focus' => true,
		),
		'auto_open' => array(
			'type' => 'radio-buttons',
			'heading' => __('Auto Open'),
			'default' => '',
			'options' => array(
				'' => array('title' => 'Off'),
				'true' => array('title' => 'On'),
			),
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
