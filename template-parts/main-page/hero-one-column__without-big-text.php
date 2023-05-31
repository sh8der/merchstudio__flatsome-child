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
    <!-- Main Menu -->
    <noindex class="hero--container">
        <div class="hero__navigation-line">
            <div class="hero__logo">
                <img src="<?=$logo_link?>" />
            </div>
            <?php 
                wp_nav_menu( [
                    'menu'            => $hero_menu_name,
                    'container'       => 'nav',
                    'container_class' => 'hero__menu hide-for-medium',
                ] );
            ?>
        </div>
    </noindex>
    <!-- Main Menu -->
    <div class="hero--container hero__content">
        <div class="hero__center-col">
            <h1 class="hero__description">Разработка и производство мерча</h1>
            <p class="hero__subdescription">Предоставляем комплексное решение по производству одежды, бизнес сувениров и фирменного мерча</p>
            <div class="hero__actions">
                <a class="hero__link" href="<?=$primary_btn['link']?>"><?=$primary_btn['text']?></a>
                <a class="hero__link hero__link--outline" href="<?=$secondary_btn['link']?>"><?=$secondary_btn['text']?></a>
            </div>
        </div>
    </div>
</div>
<style>
.hero {
    height: 100vh;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.hero--container {
    max-width: 1800px;
    width: 100%;
    padding: 0 20px;
}

.hero__logo {
    position: absolute;
    left: 20px;
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
    font-size: 3.5rem;
    line-height: 4.1rem;
    text-transform: uppercase;
    color: var(--primary-color);
    position: relative;
    font-family: 'Nebulosa Black';
    margin: 0;
    margin-bottom: 80px;
    display: inline-flex;
    margin-left: auto;
    margin-right: auto;
    width: auto;
}

.hero__subdescription {
    position: relative;
    color: white;
    font-family: 'Nebulosa Black';
    font-size: 1.7rem;
    line-height: 2.5rem;
    margin-bottom: 80px;
}

.hero__actions {
    position: relative;
    display: inline-flex;
    gap: 30px;
}

.hero__link {
    color: #333;
    padding: 20px 70px;
    background: white;
    font-size: 17px;
    line-height: 21px;
    max-width: 100%;
    min-width: 270px;
    text-align: center;
    box-shadow: 0 0 0 3px #fff;
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
    opacity: 0.5;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.hero__content {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: 1 1 auto;
}

.hero__left-col, .right-col {
    width: 50%;
}

.hero__center-col {
    width: 100%;
    max-width: 900px;
    text-align: center;
}

nav.hero__menu {
    z-index: 1000;
    display: flex;
    justify-self: center;
    align-items: center;
}

nav.hero__menu .menu {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0;
    gap: 100px;
}

nav.hero__menu .menu-item {
    margin-bottom: 0;
}

nav.hero__menu .menu-item button.toggle {
    display: none;
}

.hero__navigation-line {
    display: flex;
    position: relative;
    top: 0;
    left: 0;
    justify-content: center;
    align-items: center;
    padding-top: 30px;
    padding-bottom: 30px;
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

nav.hero__menu .menu-item.has-child:hover .sub-menu {
    display: block!important;
}


nav.hero__menu .menu-item.has-child .sub-menu {
    position: absolute;
    left: 0;
    top: 100%;
    margin: 0;
    padding: 0;
    padding-top: 20px;
    width: max-content;
}

nav.hero__menu .menu-item.has-child .sub-menu a { 
    font-size: 1rem;
}

nav.hero__menu .active>ul.sub-menu:not(.nav-dropdown) {
    display: block !important;
    position: absolute;
    top: 100%;
    left: 0;
    width: max-content;
    margin: 0;
    padding: 0;
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
    font-size: 20px;
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

    .hero__content {
        flex-direction: column-reverse;
        justify-content: center;
    }

    .hero__left-col, .right-col {
        width: 100%;
    }

    .hero__logo {
        display: flex;
        width: 100%;
        left: 0;
        top: 20px;
        align-items: center;
        justify-content: center;
    }

    .hero__title {
        font-size: 20vw;
        line-height: 20vw;
    }

    .hero__description {
        font-size: 2.3rem;
        line-height: 3rem;
        text-align: center;
        display: block;
        margin-bottom: 40px;
    }

    .hero__subdescription {
        font-size: 1.7rem;
        line-height: 2.5rem;
        text-align: center;
        margin-bottom: 40px;
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

@media (max-width: 520px) {
    .hero__description {
        font-size: 1.6rem;
        line-height: 2.2rem;
    }

    .hero__subdescription {
        font-size: 1rem;
        line-height: 1.5rem;
        letter-spacing: 1px;
    }

    .hero__actions {
        flex-direction: column;
        gap: 20px;
    }
}
</style>