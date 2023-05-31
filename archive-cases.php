<?php get_header(); ?>

<div id="content" class="page-wrapper">
    <header class="archive-page-header">
        <div class="row" id="row-556892852">
            <div id="col-1063133445" class="col small-12 large-12">
                <div class="col-inner" style="text-align:  center;"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    <div id="text-1978337758" class="text">
                        <h1 class="text-center">Кейсы</h1>
						<p class="text-center">Примеры работ и реализованных проектов.<br>Производство спортивной одежды, фирменных коллекций, собственного мерча для компании.</p>
                        
                        <style>
                        #text-1978337758 {
                            font-size: 2.25rem;
                            text-align: center;
                            color: rgb(0, 0, 0);
                        }
							
						#text-1978337758 p, #text-1978337758 span {
                            font-size: 1rem;
                            text-align: center;
                            color: rgb(0, 0, 0);
                        }

                        #text-1978337758>* {
                            color: rgb(0, 0, 0);
                        }
                        </style>
                    </div>
                    <a data-animate="fadeInUp" href="https://merchstudio.ru/#zakazat-merch" target="_blank" class="button primary" style="border-radius:99px; margin: 0;">
                        <span>Заказать мерч</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
	
    <?php if ( ! have_posts() ) : ?>
      <div class="alert alert-warning">
        <?php _e( 'Sorry, no results were found.', 'kasparabi' ); ?>
      </div>
    <?php endif; ?>

    <?php ob_start(); ?>

    [section label="Наши проекты" bg_color="rgb(255, 255, 255)" padding="0px" class="cases"]

    [row style="collapse" col_bg_radius="4" width="custom" custom_width="1400px" padding="5px 5px 5px 5px"]

    <?php while ( have_posts() ) : the_post(); ?>

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

    <?php

    $content = ob_get_contents();
    ob_end_clean();

    echo do_shortcode($content);
    ?>

    <div class="row align-center">
        <div class="large-10 col">
            <div class="row large-columns-1 medium-columns- small-columns-1">
            </div>
            <?php flatsome_posts_pagination(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>