<!doctype html>
<html lang="fr_FR">
<head>
    <!-- Meta information -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Curriculum vitae de Lysander Hans, étudiant en web-multimédia à la HEPL">
    <meta name="keywords" content="CV Lysander Hans étudiant web multimédia infographie">
    <meta name="author" content="Lysander Hans">
    <!-- stylesheets -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <title><?= _('Lysander Hans Curriculum Vitae'); ?></title>
</head>
<body class="no-js" aria-labelledby="body-header">
<p id="no-js-message"><?= _('Activer Javascript ou utiliser un navigateur récent ('); ?><a href="https://browsehappy.com/"><?= _('vous trouvez une liste ici'); ?></a><?= _(') pour avoir une meilleure expérience sur ce site.'); ?></p>
<header class="header" id="body-header">
    <h1 class="title" role="heading" aria-level="1"><?= _('Lysander Hans Curriculum Vitae'); ?></h1>
    <nav class="global nav" aria-label="<?= _('Principale'); ?>">
        <h2 role="heading" aria-level="2" id="global-header" class="sro sro--title"><?= _('Navigation principale'); ?></h2>
        <label for="burger" class="global__label"><?= _('Menu'); ?></label>
        <input type="checkbox" class="hidden" id="burger">
        <ul class="global__list nav__list">
            <li class="global-item nav-item">
                <a href="" class="global__link nav__link" title="go to the homepage"><?= _('Navigation Item') ?></a>
            </li>
            <li class="global-item nav-item">
                <a href="" class="global__link nav__link" title="go to the homepage">Navigation Item</a>
            </li>
            <li class="global-item nav-item dropdown">
                <button class="global__link nav__link dropdown__button">Navigation Item</button>
                <ul class="dropdown__content">
                    <li class="dropdown__item"><a href="" class="dropdown__link">Dropdown Item</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<div class="fiche">
    <a href="#" class="fiche__link fiche__link--return"
       title="Allez vers la liste de recherche"><?= _('Retour'); ?></a>
</div>
<main class="main" role="main">
    <section class="presentation" aria-labelledby="presentation-header">
        <div class="headline">
            <h2 role="heading" aria-level="2" id="presentation-header" class="presentation__header">Lysander Hans</h2>
            <span class="headline__subheadline"><?= _('Recherche stage en tant que web développeur'); ?></span>
        </div>
        <div class="tools">
            <a href="#" class="tools__link tools__link--save" title="Sauver ce site">
                <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg" id="icon_star">
                    <path d="M23.7 9.7h-7.1L14.1 2c-.1-.5-.6-1-1.1-1-.5 0-1 .5-1.1 1L9.4 9.7H2.3c-.6 0-1.3.2-1.3 1 0 .4.1 1 .5 1.2l6 3.6-2.4 8c-.1.5.2 1.1.6 1.3.2.1.4.2.6.2.3 0 .5 0 .8-.2L13 20l5.9 4.8c.2.2.4.2.8.2.2 0 .4-.1.7-.2.4-.2.7-.8.5-1.3l-2.4-8 6-3.6c.4-.2.5-.8.5-1.2 0-.8-.7-1-1.3-1z"></path>
                </svg>
                <span><?= _('Sauver'); ?></span>
            </a>
            <a href="#" class="tools__link tools__link--share" title="<?= _('Partager se site'); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="12 10.2 23.9 23.7" id="icon_share">
                    <path d="M17 19.1c1.6 0 3 1.3 3 3s-1.3 3-3 3-3-1.3-3-3 1.4-3 3-3m0-2c-2.7 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.3-5-5-5zM31.9 10.2c-2.2 0-4 1.8-4 4 0 .3.1.7.1 1l-5.4 2.7c.4.5.7 1.1 1 1.8L29 17c.7.8 1.8 1.3 2.9 1.3 2.2 0 4-1.8 4-4 0-2.3-1.8-4.1-4-4.1zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM31.9 25.9c-1.2 0-2.2.5-2.9 1.3l-5.3-2.8c-.2.6-.6 1.2-.9 1.8L28 29c-.1.3-.1.6-.1.9 0 2.2 1.8 4 4 4s4-1.8 4-4-1.8-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z">
                    </path>
                </svg>
                <span><?= _('Partager'); ?></span>
            </a>
            <a href="javascript:window.print();" class="tools__link tools__link--print" title="<?= _('Imprimer se site'); ?>">
                <svg class="cldt-action-icon-image" data-icon="print" x="0px" y="0px" width="24px" height="24.3px"
                     viewBox="17.2 12 27 27" id="icon_print">
                    <g>
                        <g>
                            <path d="M37.2,22.8c-0.6,0-1.1,0.5-1.1,1.1c0,0.6,0.5,1.1,1.1,1.1s1.1-0.5,1.1-1.1C38.3,23.3,37.8,22.8,37.2,22.8L37.2,22.8z"/>
                        </g>
                        <rect x="24.8" y="31" width="8" height="1"/>
                        <rect x="24.8" y="33" width="5" height="1"/>
                        <path d="M37.2,20v-5.3h-16V20h-4v13h4v6c0,0,0,0,8,0c5.1,0,8-3,8-6h4V20H37.2z M23.2,16.7h12V20h-12V16.7z M35.6,33c0,2.2-3.1,1-3.1,1s0.2,3.4-3.3,3.4s-6.4,0-6.4,0V33v-2v-2.4h12.8c0,0,0,0.8,0,2.4C35.6,31.6,35.6,32.2,35.6,33L35.6,33z M39.2,31h-2c0-1.9,0-4,0-4h-16v4h-2v-9h20V31z"/>
                    </g>
                </svg>
                <span><?= _('Imprimer'); ?></span></a>
        </div>
    </section>
    <section class="slider">
        <h2 class="slider__header" role="heading" aria-level="2">
            <?= _('Slider'); ?>
        </h2>
        <button class="slider__navigation slider__navigation-left"></button>
        <img src="./assets/img/lysander-min.jpg"
             srcset="./assets/img/lysander-min.jpg 1x, ./assets/img/lysander.jpg 2x" alt="<?= _('Portrait de Lysander Hans'); ?>"
             class="slider__img slider__img--1 animated" data-id="0">
        <img src="./assets/img/lysander2-min.jpg"
             srcset="./assets/img/lysander-min2.jpg 1x, ./assets/img/lysander2.jpg 2x"
             alt="<?= _('Portrait de Lysander Hans'); ?>" class="slider__img slider__img--2 animated" data-id="1">
        <img src="./assets/img/lysander3-min.jpg"
             srcset="./assets/img/lysander-min3.jpg 1x, ./assets/img/lysander3.jpg 2x"
             alt="<?= _('Portrait de Lysander Hans'); ?>" class="slider__img slider__img--3 animated" data-id="2">
        <button class="slider__navigation slider__navigation-right"></button>
    </section>
    <section class="overview">
        <h2 class="overview__header" role="heading" aria-level="2">
            <?= _('Front-End'); ?>
        </h2>
        <div class="overview-headline">
                <span class="overview-headline__span">
                    <?= _('Prix tout compris'); ?>
                </span>
            <a href="#contact" class="overview-headline__link"><?= _('Contactez-moi'); ?></a>
        </div>
        <div class="general">
            <div class="general__wrapper">
                <svg width="160" height="280" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <use xlink:href="#icon_km">
                        <symbol id="icon_km" viewBox="5 5 24 16.1" x="0px" y="0px" width="19px" height="15.1px">
                            <rect x="15.7" y="5.6" width="1.5" height="3.1"/>
                            <rect x="15.7" y="11.6" width="1.5" height="3.1"/>
                            <rect x="15.7" y="17.6" width="1.5" height="3.1"/>
                            <polygon points="10.4,5.6 7.1,20.7 8.9,20.7 12.2,5.6"/>
                            <polygon points="20.8,5.6 24.3,20.6 26.1,20.6 22.5,5.6"/>
                        </symbol>
                    </use>
                </svg>
                <span class="general__span"><?= _('Expérience de 3 ans'); ?></span>
            </div>
            <div class="general__wrapper">
                <svg width="160" height="280" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <use xlink:href="#icon_first-registration">
                        <symbol id="icon_first-registration" width="19px" height="16.0px" viewBox="-1 2 23 16.1">
                            <path d="M17.7 1.9H15V.6c0-.3-.3-.6-.6-.6-.4 0-.6.3-.6.6v1.2H5.3V.6C5.3.3 5 0 4.6 0c-.3 0-.6.3-.6.6v1.2H1.3C.6 1.9 0 2.4 0 3.1v14.3c0 .7.6 1.2 1.3 1.2h16.4c.7 0 1.3-.5 1.3-1.2V3.1c0-.7-.6-1.2-1.3-1.2zm0 15.3H1.3v-14H4v.6c0 .4.3.6.6.6.4 0 .6-.3.6-.6v-.6h8.5v.6c0 .4.3.6.6.6.4 0 .6-.3.6-.6v-.6h2.7v14z"/>
                            <path d="M7.4 13H9V8.4H7.7v-.8c.3-.1.6-.2.9-.2.2-.1.5-.2.7-.4h.9v6h1.4v1H7.4v-1z"/>
                            <path class="st0"
                                  d="M7.4 13H9V8.4H7.7v-.8c.3-.1.6-.2.9-.2.2-.1.5-.2.7-.4h.9v6h1.4v1H7.4v-1z"/>
                        </symbol>
                    </use>
                </svg>
                <span class="general__span" itemprop="birthDate"><?= _('10 Âout 1995'); ?></span>
            </div>
            <div class="general__wrapper">
                <svg width="160" height="280" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <use xlink:href="#icon_power">
                        <symbol id="icon_power" width="19px" height="16.2px" viewBox="4 5 23 16.2">
                            <g>
                                <path d="M16.1,15.2c0,0,0.1-0.1,0.1-0.1l1.8-5.7c0.1-0.2,0-0.4-0.2-0.4c-0.2-0.1-0.4,0-0.5,0.1L13.9,14c0,0,0,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c-0.2,0.5-0.1,1.1,0.3,1.4c0.1,0.1,0.2,0.2,0.3,0.2c0.3,0.1,0.6,0.2,1,0.1c0.3-0.1,0.6-0.3,0.7-0.6C16,15.3,16.1,15.3,16.1,15.2z"/>
                                <path d="M10.1,20.6c-2.1-1.5-3.4-3.9-3.4-6.7c0-4.5,3.7-8.2,8.2-8.2c4.5,0,8.2,3.7,8.2,8.2c0,2.7-1.3,5.2-3.4,6.7h1.9c1.7-1.7,2.7-4.1,2.7-6.7c0-5.2-4.3-9.5-9.5-9.5c-5.2,0-9.5,4.3-9.5,9.5c0,2.6,1,4.9,2.7,6.7H10.1z"/>
                            </g>
                        </symbol>
                    </use>
                </svg>
                <span class="general__span"><?= _('Après 3 tasses de thé, je donne 300%'); ?></span>
            </div>
            <ul class="general__list">
                <li class="general__element"><?php _('HTML'); ?></li>
                <li class="general__element"><?php _('CSS'); ?></li>
                <li class="general__element"><?php _('JavaScript'); ?></li>
                <li class="general__element"><?php _('PHP'); ?></li>
                <li class="general__element"><?php _('Wordpress'); ?></li>
                <li class="general__element"><?php _('Git'); ?></li>
                <li class="general__element"><?php _('Dessin'); ?></li>
                <li class="general__element"><?php _('Photoshop'); ?></li>
                <li class="general__element"><?php _('Illustrator'); ?></li>
                <li class="general__element" itemprop="knowsLanguage"><?php _('Français'); ?></li>
                <li class="general__element" itemprop="knowsLanguage"><?php _('Allemand'); ?></li>
                <li class="general__element" itemprop="knowsLanguage"><?php _('Anglais'); ?></li>
            </ul>
        </div>
        <div class="vendor">
            <div class="vendor__wrapper">
                <span class="vendor__span vendor__span--big"><?= _('La Calamine,'); ?></span>
                <span class="vendor__span vendor__span" itemprop="jobTitle"><?= _('Étudiant'); ?></span>
                <span class="vendor__span vendor__span">Lysander</span>
                <div class="vendor__rating"></div>
            </div>
            <a href="#contact" class="vendor__link vendor__link--contact">Contactez-moi</a>
            <a href="tel:0471553304" class="vendor__link vendor__link--tel">+32471 55 33 04</a>
        </div>
    </section>
    <section class="cv">
        <h2 class="cv__header" role="heading" aria-level="2">CV</h2>
        <nav class="nav-second" role="navigation" aria-label="Secondaire">
            <h3 class="nav-second__header" role="heading" aria-level="3" id="nav-second__heade">
                Navigation secondaire<?= _('navigation secondaire'); ?>
            </h3>
            <ul class="nav-second__list">
                <li class="nav-second__item">
                    <a href="#experience" class="nav-second__link"><?= _('Expérience professionelle'); ?></a>
                </li>
                <li class="nav-second__item">
                    <a href="#studys" class="nav-second__link"><?= _('Études'); ?></a>
                </li>
                <li class="nav-second__item">
                    <a href="#hobbys" class="nav-second__link"><?= _('Loisirs'); ?></a>
                </li>
                <li class="nav-second__item">
                    <a href="#contact" class="nav-second__link"><?= _('Contact'); ?></a>
                </li>
            </ul>
        </nav>
        <section class="navigation-wrapper">
            <h3 class="navigation-wrapper__header" role="heading" aria-level="3">
                Hans Lysander
            </h3>
            <nav class="nav-second" role="navigation">
                <h4 class="nav-second__header" role="heading" aria-level="4">
                    <?= _('Navigation secondaire'); ?>
                </h4>
                <ul class="nav-second__list">
                    <li class="nav-second__item">
                        <a href="#experience" class="nav-second__link"><?= _('Expérience professionelle'); ?></a>
                    </li>
                    <li class="nav-second__item">
                        <a href="#studys" class="nav-second__link"><?= _('Études'); ?></a>
                    </li>
                    <li class="nav-second__item">
                        <a href="#hobbys" class="nav-second__link"><?= _('Loisirs'); ?></a>
                    </li>
                    <li class="nav-second__item">
                        <a href="#contact" class="nav-second__link"><?= _('Contact'); ?></a>
                    </li>
                </ul>
                <a href="#contact" class="nav-second__link nav-second__link--button"><?= _('Contactez-moi'); ?></a>
            </nav>
        </section>
        <section id="experience" class="experience">
            <h3 class="experience__header" role="heading" aria-level="3"><?= _('Exprérience professionelle'); ?></h3>
            <dl class="experience__table">
                <dt class="experience__table-header"><span class="experience__span"><?= _('2014-Aujourd’hui'); ?></span> <?= _('La Calamine'); ?>
                </dt>
                <dd class="experience__table-content experience__table-content--headline"><?= _('Museum Vieille Montagne'); ?></dd>
                <dd class="experience__table-content experience__table-content--content">
                    <?= _('Caisse, vente, information touristique, travail en autonomie'); ?>
                </dd>
            </dl>
        </section>
        <section id="studys" class="studys">
            <h3 class="studys__header" role="heading" aria-level="3"><?= _('Études'); ?></h3>
            <dl class="studys__table">
                <dt class="studys__table-header"><span class="studys__span"><?= _('2016-aujourd’hui'); ?></span> <?= _('Seraing'); ?></dt>
                <dd class="studys__table-content studys__table-content--headline">
                    <?= _('Bachelier en Techniques graphiques Seraing'); ?>
                </dd>
                <dd class="studys__table-content studys__table-content--content"><?= _('Orientation Techniques infographiques'); ?>
                </dd>
                <dd class="studys__table-content studys__table-content--content"><?= _('Option Web-Multimédias'); ?></dd>
                <dd class="studys__table-content studys__table-content--content"><?= _('Haute École de la Province de Liège'); ?>
                </dd>
            </dl>
            <dl class="studys__table">
                <dt class="studys__table-header"><span class="studys__span"><?= _('2014-2016'); ?></span><?= _('Liège'); ?></dt>
                <dd class="studys__table-content studys__table-content--headline"><?= _('Bachelier en architecture (réorientation)'); ?>
                </dd>
                <dd class="studys__table-content studys__table-content--content"><?= _('Université de Liège'); ?></dd>
            </dl>
            <dl class="studys__table">
                <dt class="studys__table-header"><span class="studys__span"><?= _('2008-2014'); ?></span><?= _('La Calamine'); ?></dt>
                <dd class="studys__table-content studys__table-content--headline"><?= _('CESS bilingue (allemand/français)'); ?></dd>
                <dd class="studys__table-content studys__table-content--content"><?= _('Option sciences mathématiques'); ?></dd>
                <dd class="studys__table-content studys__table-content--content"><?= _('Athénée César Frank La Calamine'); ?></dd>
            </dl>
        </section>
        <section id="hobbys" class="hobbys">
            <h3 class="hobbys__header" role="heading" aria-level="3"><?= _('Loisirs'); ?></h3>
            <p class="hobbys__paragraph"><?= _('J’ai beaucoup de loiris, comme le VTT et le dessin. Mais, ici j’aimerai vous parler de mon plus grand loisir, les échecs. Ce jeux m’occupe beaucoup, car d’une part, je joue moi même, mais surtout, je suis entraîneur. Pendant que j’étais actif comme joueur, j’ai remporté beaucoup de prix, entre autre j’ai acquis le titre de vice-champions de la Belgique dans la tranche d\'âge -20 ans. Maintenant, j\'entraîne des enfants pour leurs donner les possibilités d’acquérir des titres de leur tour aussi. Mais pas que ça, je suis un partisan du fait que ce sport peux aider les élèves à améliorer leur compétances à l\'école...'); ?></p>
        </section>
        <section class="contact" id="contact">
            <h3 class="contact__header" role="heading" aria-level="3"><?= _('Contact'); ?></h3>
            <div class="map">
                <img src="./assets/img/staticmap.jpg" alt="<?= _('Carte de la place ou Lysander vit') ?>" class="map__img">
                <section class="business-card">
                    <h4 class="business-card__header" role="heading" aria-level="4">
                        <?= _('Hans Lysander'); ?>
                    </h4>
                    <img src="./assets/img/logo_lysander.png" alt="<?= _('Le logo de Lysander Hans'); ?>"
                         class="business-card__logo">
                    <div class="business-card__address" itemprop="address" itemscope
                         itemtype="http://www.schema.org/PostalAddress">
                        <span itemprop="streetAddress"><?= _('Rue Neuve 34,'); ?></span>
                        <span itemprop="postalCode"><?= _('B-4720'); ?></span>
                        <span itemprop="addressLocality"><?= _('La Calamine'); ?></span>
                        <span itemprop="addressCountry"><?= _('Belgium'); ?></span>
                    </div>
                    <span itemprop="telephone"><a href="tel:+32471553304" class="business-card__link"><?= _('Tel: +32 471 55 33 04'); ?></a></span>
                    <span itemprop="email"><a href="mailto:lysander.hans@hotmail.com" class="business-card__link"><?= _('lysander.hans@hotmail.com'); ?></a></span>
                </section>
                <a href="https://www.google.com/maps/place/Rue+Neuve+34,+4720+La+Calamine/@50.7138483,6.0038169,17z/data=!3m1!4b1!4m5!3m4!1s0x47c090756d96115d:0x592420239b8a87d6!8m2!3d50.7138483!4d6.0060056"
                   class="map__link"><?= _('Vers la carte'); ?></a>
            </div>
            <form action="index.php" method="post" class="contact__form">
                <div class="form__area">
                    <label for="name" class="form__label"><?= _('Votre nom'); ?></label>
                    <input type="text" class="form__input" id="name" name="writer-name"
                           placeholder="<?= _('p. ex. Max Mustermann'); ?>">
                </div>
                <div class="form__area">
                    <label for="mail" class="form__label"><?= _('Votre adresse mail'); ?></label>
                    <input type="email" class="form__input" id="mail" name="mail" placeholder="<?= _('p. ex. example@mail.com'); ?>">
                </div>
                <div class="form__area">
                    <label for="phone" class="form__label"><?= _('Votre numéro de téléphone'); ?></label>
                    <input type="tel" class="form__input" id="phone" name="phone-number"
                           placeholder="<?= _('p. ex. +32 (0) 471 55 33 04'); ?>">
                </div>
                <div class="form__area form__area--checkbox">
                    <span class="form__header"><?= _('Votre message'); ?></span>
                    <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason1">
                        <label for="contact-reason1" class="form__contact-reason"><?= _('Créer un projet avec moi'); ?></label>
                    </span>
                    <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason2">
                        <label for="contact-reason2" class="form__contact-reason"><?= _('J’aimerai bien t’angager'); ?></label>
                    </span>
                    <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason3">
                        <label for="contact-reason3"
                               class="form__contact-reason"><?= _('Merci de prendre contact avec moi'); ?></label>
                    </span>
                    <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason4">
                        <label for="contact-reason4"
                               class="form__contact-reason"><?= _('Jouer une partie d\'échecs contre moi'); ?></label>
                    </span>

                </div>
                <textarea name="content" id="content" cols="30" rows="10" class="form__content"><?= _('Bonjour,

Je suis intéressé(e) par ton travail. Es-tu toujours disponible?

Cordialement,'); ?></textarea>
                <p class="form__paragraph"><?= _('Le contenu de votre message sera examiné pour des raisons de sécurité. Nous prenons la protection des données au sérieux. Les données saisies ne seront pas utilisées à des fins publicitaires.') ?></p>
                <div class="form__area form__area--big-text">
                    <input type="checkbox" class="form__checkbox" name="accord" id="accord">
                    <label for="accord" class="form__label form__label--long"><?= _('J\'accepte que mes données soient traitées,
                        comme décrit dans la ') . '<a class="form__link">'._('déclaration de consentement').'</a>'._(' d\'AutoScout24. Je
                        peux révoquer ce consentement à tout moment avec effet pour l\'avenir.'); ?></label>
                </div>
                <div class="form__area form__area--big-text">
                    <input type="checkbox" class="form__checkbox" name="copy" id="copy">
                    <label for="copy" class="form__copy"><?= _('Envoyez-moi une copie'); ?></label>
                </div>
                <input type="submit" class="form__button" value="<?= _('Envoyer'); ?>">
            </form>
        </section>
    </section>
    <section class="projects" aria-labelledby="projets-header">
        <h2 id="projets-header" role="heading" aria-level="2" class="projects__header"><?= _('Projets'); ?></h2>
        <section class="project" aria-label="">
            <h3 class="project__heading"></h3>
        </section>
    </section>
</main>
<footer>

</footer>
<script type="text/javascript" src="./assets/js/bundle.js"></script>
</body>
</html>