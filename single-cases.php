<?php

get_header(); ?>

<?php //do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>
				<?php if(get_the_content()) {the_content();} else {
					the_post_thumbnail('original');
				}; ?>
		<?php endwhile; wp_reset_query(); // end of the loop. ?>
		
</div>

<?php

$similar_cases_ids = CFS()->get('similar_cases_list');

if ($similar_cases_ids):

$args = array(
   'post_type' => 'cases',
   'post__in'  => $similar_cases_ids
);
$similar_cases = new WP_Query( $args );

if ($similar_cases->have_posts()):

ob_start(); ?>

<h2 class="text-center">Похожие кейсы </h2>

[section label="Наши проекты" bg_color="rgb(255, 255, 255)" padding="0px" class="cases"]

[row style="collapse" col_bg_radius="4" padding="5px 5px 5px 5px"]

<?php while ( $similar_cases->have_posts() ) : $similar_cases->the_post(); ?>
[col span="4" span__sm="12"]

[ux_banner height="300px" bg="<?=get_post_thumbnail_id()?>" bg_pos="52% 47%" link="<?=get_permalink()?>"]

[text_box hover="slide" width="100" padding="40px 40px 40px 40px" position_x="50" position_y="50" bg="rgba(18, 18, 18, 0.855)"]

[ux_text font_size="1"]

<?=get_the_excerpt()?>
[/ux_text]

[/text_box]

[/ux_banner]
[ux_text font_size="1.3"]

<h3><?=get_the_title()?></h3>
[/ux_text]

[/col]

<?php endwhile; wp_reset_query(); ?>

[/row]

[/section]

<?php

$content = ob_get_contents();
ob_end_clean();

echo do_shortcode($content);
endif;
endif;

?>

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>