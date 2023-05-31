<?php 

function cases_list__render( $atts, $content, $tag ) {
	global $wp_query;

	$atts = shortcode_atts(
		array(
			'ids' => '',
			'count' => -1,
		),
		$atts,
		$tag
	);
	$options = ['post_type' => 'cases'];
	if ($atts['count'])
		$options['posts_per_page'] = intval($atts['count']);
	if ($atts['ids'])
		$options['post__in'] = explode(',', $atts['ids']);
	$query = new WP_Query($options);
	// echo "<pre><code>";
	// var_dump($query);
	// echo "</pre></code>";
	?>

	<?php ob_start(); ?>

	[section label="Наши проекты" bg_color="rgb(255, 255, 255)" padding="0px" class="cases"]

    [row style="collapse" col_bg_radius="4" width="custom" custom_width="1400px" padding="5px 5px 5px 5px"]

	<?php while ( $query->have_posts() ) : $query->the_post(); ?>

    [col span="4" span__sm="12" animate="fadeInUp"]

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

<?php $content = ob_get_contents(); ob_end_clean(); return do_shortcode($content); } ?>
<?php add_shortcode( 'cases_list', 'cases_list__render' );?>