<?php 
    $hero_menu_name = CFS()->get('menu_name');
    $hero_video_link = CFS()->get('hero_video');
    $logo_link = CFS()->get('logo');
    $primary_btn = ['text' => CFS()->get('primary_btn'), 'link' => CFS()->get('primary_btn_link')];
    $secondary_btn = ['text' => CFS()->get('secondary_btn'), 'link' => CFS()->get('secondary_btn_link')];
?>

<div class="hero">
    <video autoplay loop muted class="video-bg" id="video-bg">
        <source src="<?=$hero_video_link?>" type="video/mp4">
    </video>
    <div class="hero__overlay"></div>
    <noindex>
    <?php 
        wp_nav_menu( [
            'menu'            => $hero_menu_name,
            'container'       => 'nav',
            'container_class' => 'hero__menu hide-for-medium',
        ] );
    ?>
    </noindex>
    <div class="hero__title">Merch Studio</div>
    <h1 class="hero__description">РАЗРАБОТАЕМ И ПРОИЗВЕДЁМ<br/>ОДЕЖДУ ИЛИ МЕРЧ</h1>
    <div class="hero__actions">
        <a class="hero__link" href="<?=$primary_btn['link']?>"><?=$primary_btn['text']?></a>
        <a class="hero__link hero__link--outline" href="<?=$secondary_btn['link']?>"><?=$secondary_btn['text']?></a>
    </div>
</div>
<style>
.hero {
    height: 100vh;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.hero__logo {
    position: absolute;
    left: 10%;
    top: 10%;
}

.hero__title {
    font-family: 'Nebulosa Black';
    font-size: 130px;
    line-height: 154px;
    text-transform: uppercase;
    position: relative;
    text-align: center;
    margin: 0;
    color: var(--primary-color);
    padding-bottom: 30px;
    border-bottom: 5px solid;
    margin-bottom: 50px;
}

.hero__description {
    font-size: 43px;
    line-height: 48px;
    color: #FFF;
    position: relative;
    font-family: 'Nebulosa Black';
    margin: 0;
    margin-bottom: 40px;
    display: inline-flex;
    margin-left: auto;
    margin-right: auto;
    width: auto;
    text-transform: uppercase;
    text-align: center;
}

.hero__actions {
    position: relative;
    display: flex;
    gap: 30px;
}

.hero__link {
    color: var(--wp--preset--color--black);
    padding: 26px 100px;
    background: var(--primary-color);
    font-size: 27px;
    line-height: 33px;
    max-width: 100%;
    min-width: 270px;
    text-align: center;
    border-radius: 17px;
    border: 3px solid #fff;
}

.hero__link--outline {
    background: transparent;
    color: #fff;
    transition: background .2s ease-in-out;
}

.hero__link--outline:hover {
    background: #fff;
}

.hero__overlay {
    position: absolute;
    background-color: #000;
    opacity: .5;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

nav.hero__menu {
    position: absolute;
    z-index: 1;
    top: 10px;
    left: 0;
    width: 100%;
    padding: 0 20px;
    display: flex;
    justify-content: center;
    z-index: 1111;
}

nav.hero__menu > ul {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    max-width: 100%;
    width: 1170px;
}

nav.hero__menu .active>ul.sub-menu:not(.nav-dropdown) {
    display: block !important;
    position: absolute;
    margin: 0;
    padding: 0;
    width: max-content;
    top: 100%;
}

nav.hero__menu li a {
    display: inline-flex;
    flex: 0 1 auto;
}

nav.hero__menu li a:hover {
    color: var(--primary-color);
}

nav.hero__menu li {
    margin-bottom: 20px;
}

nav.hero__menu li .toggle {
    color: #fff;
    opacity: 1 !important;
}

nav.hero__menu li.has-child {
    display: inline-flex;
    position: relative;
}

nav.hero__menu li.has-child.active {
    text-decoration: underline;
}

nav.hero__menu li.active>a,
nav.hero__menu li.active>.toggle {
    color: var(--primary-color) !important;
}

nav.hero__menu li+li {
    border: none;
}

nav.hero__menu li ul {
    border: none;
}

nav.hero__menu a {
    font-family: 'Nebulosa Black';
    font-size: 16px;
    text-transform: uppercase;
    color: #fff;
}

nav.hero__menu li li>a {
    text-transform: none;
    font-size: 14px;
    margin-bottom: 4px;
}

nav.hero__menu li li>a:hover {
    color: var(--primary-color);
}

@media (max-width: 1600px) {
    nav.hero__menu a {
        font-size: 20px;
    }
    nav.hero__menu li {
        margin-bottom: 0;
    }
    nav.hero__menu li li>a {
        font-size: 14px;
    }
}

@media (max-width: 1200px) {
    .hero__title {
        font-size: 12vw;
        line-height: 11vw;
    }
}

@media (max-width: 767px) {
    .hero {
        padding: 30px;
    }

    .hero__logo {
        display: flex;
        width: 100%;
        left: 0;
        align-items: center;
        justify-content: center;
    }

    .hero__title {
        font-size: 20vw;
        line-height: 20vw;
    }

    .hero__description {
        font-size: 2rem;
        line-height: 2.9rem;
        text-align: center;
    }

    .hero__actions {
        width: 100%;
        flex-direction: column;
        gap: 10px;
    }

    .hero__link {
        min-width: auto;
        flex: 1 1 auto;
        padding: 16px 10px;
    }
}
</style>