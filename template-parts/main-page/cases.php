<?php 

$args = array(  
   'post_type' => 'cases',
   'post_status' => 'publish',
   'posts_per_page' => 8,
   'orderby' => 'meta_value_num',
   'meta_key' => 'sort', 
   'order' => 'ASC', 
);
$logo_link = CFS()->get('logo');
$loop = new WP_Query( $args ); 
?>
<div class="cases">
	<div class="cases-container">
		<div class="cases__title">
			<h2 class="cases__title-text">Реализованные кейсы</h2>
			<img class="cases__title-logo" src="<?=$logo_link?>">
		</div>
	</div>
	<div class="case-list cases-container">
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	    <a class="case-list__item" href="<?=the_permalink()?>">
	        <div class="case-list__thumb-wrapper">
	        	<img src="<?=the_post_thumbnail_url( $size = 'large' )?>" alt="<?=the_title()?>" class="case-list__thumb">
	        </div>
	        <h3 class="case-list__name"><?=the_title()?></h3>
	    </a>
	    <?php endwhile; wp_reset_postdata(); ?>
	</div>	

	<div class="cases-container"><a href="/cases/" class="cases__more-btn">Больше кейсов</a></div>
	<div class="cases-container"><div class="cases__divider"></div></div>
</div>


<style>
.cases__divider {
	background-color: var(--primary-color);
	height: 3px;
	width: calc(100% - 40px);
	bottom: -50px;
	position: absolute;
}
.cases-container {
	max-width: 1800px;
	width: 100%;
	margin-left: auto;
	margin-right: auto;
	display: flex;
	padding-left: 20px;
	padding-right: 20px;
	position: relative;
}

.cases {
	background-color: #1f1f1f;
	padding: 80px 0;
}

.cases__title {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-between;
	margin-bottom: 40px;
	width: 100%;
	position: relative;
}

.cases__title-text {
	font-size: 4.5rem;
	line-height: 5rem;
	width: 100%;
	max-width: 40%;
	color: #fff;
    font-family: 'Nebulosa Black';
    margin: 0;
}

.case-list__name {
    font-family: 'Nebulosa Black';
	color: #fff;
	font-size: 23px;
	line-height: 27px;
	margin-top: 30px;
	transition: color .3s ease-in-out;
}

.case-list {
    display: grid;
    grid-template-columns: repeat(4, minmax(300px, 1fr));
    grid-template-rows: repeat(2, 1fr);
    grid-column-gap: 30px;
    grid-row-gap: 70px;
}

.case-list__item:hover .case-list__name {
	color: var(--primari-color);
}

.case-list__item:hover .case-list__thumb-wrapper {
	border-color: var(--primary-color);
}

.case-list__thumb-wrapper {
	border: 3px solid #fff;
	transition: border .3s ease-in-out;
}

.case-list__thumb {
      aspect-ratio: 1; 
      object-fit: cover;
}

.cases__more-btn {
	background-color: white;
	color: #333;
	padding: 16px 60px;
	font-size: 20px;
	line-height: 25px;
	margin-top: 70px;
}

@media (max-width: 1200px) {
	.case-list {
	    grid-template-columns: repeat(3, minmax(240px, 1fr));
	}
}

@media (max-width: 768px) {
	
	.case-list {
	    grid-template-columns: repeat(1, minmax(300px, 1fr));
	    grid-template-rows: repeat(1, 1fr);
	    grid-row-gap: 40px;
	}

	.cases__title-text {
		font-size: 9vw;
		line-height: 10vw;
		max-width: 100%;
		text-align: center;
	}

	.cases__title-logo {
		position: absolute;
		right: 20px;
		top: -70px;
	}

	.cases__more-btn {
		width: 100%;
		text-align: center;
	}

}
</style>