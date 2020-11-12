<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"/>
    <?php wp_head(); ?>
</head>
<body>

    <nav class="nav">
        <div class="container">
            <ul class="nav__wrapper">
                <li class="nav__element nav__element--logo">
                    <a href='<?php bloginfo('wpurl')?>' class="nav__logo">
                        <img src="./wp-content/themes/greenParrot/img/logo.png" alt="logo" class="nav__logo--img">
                    </a>
                </li>
                <li class="nav__element">
                    <a href="#" class="nav__link">
                        o nas
                    </a>
                </li>
                <li class="nav__element">
                    <a href="#" class="nav__link">
                        oferta
                    </a>
                </li>
                <li class="nav__element">
                    <a href="#" class="nav__link">
                        towarzystwo ubezpieczeń
                    </a>
                </li>
                <li class="nav__element">
                    <a href="#" class="nav__link">
                        dołącz do nas
                    </a>
                </li>
                <li class="nav__element">
                    <a href="#" class="nav__link">
                        przydatne materiały
                    </a>
                </li>
                <li class="nav__element">
                    <a href="#" class="nav__link">
                        oddziały
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="header__logo">
            <a href='<?php bloginfo('wpurl')?>'>
                <img src="./wp-content/themes/greenParrot/img/logo.png" alt="logo" class="header__logo--img">
            </a>
        </div>
        <button class="hamburger hamburger--arrow-r" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <div class="container">
            <div class="header__wrapper">
                <div class="header__heading">
                    <h2 class="header__title">Ubezpieczenie majątkowe</h2>
                    <h4 class="header__subtitle">
                        Skontaktuj się z nami i skorzystaj </br>
                        ze specjalnej oferty!
                    </h4>
                    <button class="btn header__btn">Formularz kontaktowy</button>
                </div>
                <div class="form__wrapper">
                    <form class="form">
                        <button class="form__close">
                            <i class="fas fa-times"></i>
                        </button>
                        <h5 class="form__title">Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h5>
                        <input class="form__input" type="text" id="name" name="name" maxlength="25" placeholder="Imię i nazwisko">
                        <input class="form__input" type="email" id="email" name="email" maxlength="25" placeholder="Adres e-mail">
                        <input class="form__input" type="text" id="phone" name="phone" maxlength="9" placeholder="Nr telefonu">
                        <div class="form__flex">
                            <input class="form__input form__input--city" type="text" id="city" name="city" maxlength="15" placeholder="Miejscowość">
                            <input class="form__input form__input--city-code" type="text" id="city-code" name="city-code" maxlength="6" placeholder="Kod pocztowy" pattern="[0-9]*">
                        </div>
                        <div class="form__flex checkbox__wrapper">
                            <input class="form__checkbox" type="checkbox" id="checkbox" name="checkbox">
                            <label class="form__span"for="checkbox" checked="false">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            </label>
                        </div>
                        <button class="btn form__btn">Wyślij</button>
                    </form>
                </div>
            </div>
        </div>
    </header>