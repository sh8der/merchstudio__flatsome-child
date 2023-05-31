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
    <div class="hero__logo">
        <img src="<?=$logo_link?>" />
    </div>
    <noindex>
    <?php 
        wp_nav_menu( [
            'menu'            => $hero_menu_name,
            'container'       => 'nav',
            'container_class' => 'hero__menu hide-for-medium',
        ] );
    ?>
    </noindex>
    <div class="hero__title">Merch<br />Studio</div>
    <h1 class="hero__description">Разработка и производство одежды и мерча</h1>
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
    font-size: 174px;
    line-height: 174px;
    text-transform: uppercase;
    mix-blend-mode: overlay;
    position: relative;
    text-align: center;
    margin: 0;
    color: #fff;
    margin-bottom: 20px;
}

.hero__description {
    font-size: 21px;
    line-height: 24px;
    color: #1A1A1A;
    background-color: var(--primary-color);
    padding: 4px 18px;
    position: relative;
    font-family: 'Nebulosa Black';
    margin: 0;
    margin-bottom: 40px;
    display: inline-flex;
    margin-left: auto;
    margin-right: auto;
    width: auto;
}

.hero__actions {
    position: relative;
    display: inline-flex;
    border: 3px solid #fff;
}

.hero__link {
    color: #333;
    padding: 16px 60px;
    background: white;
    font-size: 17px;
    line-height: 21px;
    max-width: 100%;
    min-width: 270px;
    text-align: center;
    box-shadow: 0 0 0 1px #fff;
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
    opacity: .3;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

nav.hero__menu {
    position: absolute;
    left: 10%;
    z-index: 1;
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
    font-size: 30px;
    text-transform: uppercase;
    color: #fff;
}

nav.hero__menu li li>a {
    text-transform: none;
    font-size: 19px;
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
    nav.hero__menu, .hero__logo {
        left: 5%;
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
        font-size: 16px;
        text-align: center;
    }

    .hero__actions {
        width: 100%;
    }

    .hero__link {
        min-width: auto;
        flex: 1 1 auto;
        padding: 16px 10px;
    }
}
</style>