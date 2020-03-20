<!doctype html>
<html lang="fr">
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

    <!--  favicon  -->
    <link rel="icon" href="./assets/img/icon.png">

    <title>Lysander Hans Curriculum Vitae</title>
</head>
<body class="no-js" aria-labelledby="body-header" itemtype="https://schema.org/Person" itemscope>
<noscript>Activer Javascript ou utiliser un navigateur récent (<a href="https://browsehappy.com/">vous
        trouvez une liste ici</a>) pour avoir une meilleure expérience sur ce site.
</noscript>
<header class="c-header" id="body-header">
    <h1 class="c-header__heading" role="heading" aria-level="1"><span itemprop="name">Lysander</span> <span itemprop="familyName">Hans</span>
        Curriculum Vitae</h1>
    <nav class="c-global o-nav" aria-label="Principale">
        <h2 role="heading" aria-level="2" id="global-header" class="c-global__heading sro">Navigation principale</h2>
        <label for="burger" class="c-global__label">Menu</label>
        <input type="checkbox" class="c-global__input u-hidden" id="burger">
        <ul class="c-global__list o-nav__list">
            <li class="c-global__item o-nav-item">
                <a href="#cv" class="c-global__link o-nav__link" title="Allez vers la section cv">Mon Cv</a>
            </li>
            <li class="c-global__item o-nav-item">
                <a href="#projects" class="c-global__link o-nav__link" title="Allez vers mes projets">Mes projets</a>
            </li>
            <li class="c-global__item o-nav-item c-dropdown">
                <button class="c-global__link o-nav__link c-dropdown__button">Français</button>
                <ul class="c-dropdown__content">
                    <li class="c-dropdown__item"><a href="/fr" class="c-dropdown__link">Deutsch</a></li>
                    <li class="c-dropdown__item"><a href="/en" class="c-dropdown__link">English</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<div class="c-fiche">
    <a href="#" class="c-fiche__link c-fiche__link--return"
       title="Allez vers la liste de recherche">Retour</a>
</div>
<main class="main" role="main">
    <section class="presentation" aria-labelledby="presentation-header">
        <div class="headline">
            <h2 role="heading" aria-level="2" id="presentation-header" class="presentation__header"><span class="sro">Présentation de </span>Lysander
                Hans</h2>
            <span class="headline__subheadline">Recherche stage en tant que web développeur</span>
        </div>
        <div class="tools">
            <a href="#" class="tools__link tools__link--save" title="Sauver ce site">
                <?php include 'components/save-icon.php'; ?>
                <span>Sauver</span>
            </a>
            <a href="#" class="tools__link tools__link--share" title="Partager se site">
                <?php include 'components/share-icon.php'; ?>
                <span>Partager</span>
            </a>
            <a href="javascript:window.print();" class="tools__link tools__link--print" title="Imprimer se site">
                <?php include 'components/print-icon.php'; ?>
                <span>Imprimer</span></a>
        </div>
        <?php include './components/carousel.php'; ?>
        <section class="overview">
            <h3 class="overview__header" role="heading" aria-level="3">
                Moi en résumé
            </h3>
            <div class="overview-headline">
                <span class="overview-headline__span">
                    Prix tout compris
                </span>
                <a href="#contact" class="overview-headline__link">Contactez-moi</a>
            </div>
            <div class="general">
                <div class="general__wrapper">
                    <?php include './components/road-icon.php'; ?>
                    <span class="general__span">Expérience de 3 ans</span>
                </div>
                <div class="general__wrapper">
                    <?php include './components/date-icon.php'; ?>
                    <span class="general__span" itemprop="birthDate">10 Âout 1995</span>
                </div>
                <div class="general__wrapper">
                    <?php include './components/speed-icon.php'; ?>
                    <span class="general__span">Après 3 tasses de thé, je donne 300%</span>
                </div>
                <ul class="general__list">
                    <li class="general__element">HTML</li>
                    <li class="general__element">CSS</li>
                    <li class="general__element">JavaScript</li>
                    <li class="general__element">PHP</li>
                    <li class="general__element">Wordpress</li>
                    <li class="general__element">Git</li>
                    <li class="general__element">Dessin</li>
                    <li class="general__element">Photoshop</li>
                    <li class="general__element">Illustrator</li>
                    <li class="general__element" itemprop="knowsLanguage">Français</li>
                    <li class="general__element" itemprop="knowsLanguage">Allemand</li>
                    <li class="general__element" itemprop="knowsLanguage">Anglais</li>
                </ul>
            </div>
            <div class="vendor">
                <div class="vendor__wrapper">
                    <span class="vendor__span vendor__span--big">La Calamine,</span>
                    <span class="vendor__span vendor__span" itemprop="jobTitle">Étudiant</span>
                    <span class="vendor__span vendor__span">Lysander</span>
                    <div class="vendor__rating"></div>
                </div>
                <a href="#contact" class="vendor__link vendor__link--contact">Contactez-moi</a>
                <a href="tel:0471553304" class="vendor__link vendor__link--tel">+32471 55 33 04</a>
            </div>
        </section>
    </section>

    <article class="cv">
        <h2 class="cv__header" role="heading" aria-level="2">CV</h2>
        <nav class="nav-second" role="navigation" aria-label="Secondaire">
            <h3 class="nav-second__header" role="heading" aria-level="3" id="nav-second__heade">
                Navigation secondaire
            </h3>
            <ul class="nav-second__list">
                <li class="nav-second__item">
                    <a href="#experience" class="nav-second__link">Expérience professionelle</a>
                </li>
                <li class="nav-second__item">
                    <a href="#studys" class="nav-second__link">Études</a>
                </li>
                <li class="nav-second__item">
                    <a href="#hobbys" class="nav-second__link">Loisirs</a>
                </li>
                <li class="nav-second__item">
                    <a href="#contact" class="nav-second__link">Contact</a>
                </li>
            </ul>
        </nav>
        <nav class="nav-second" role="navigation" style="display: none;">
            <h3 class="nav-second__header" role="heading" aria-level="3">
                Navigation secondaire
            </h3>
            <ul class="nav-second__list">
                <li class="nav-second__item">
                    <a href="#experience" class="nav-second__link">Expérience professionelle</a>
                </li>
                <li class="nav-second__item">
                    <a href="#studys" class="nav-second__link">Études</a>
                </li>
                <li class="nav-second__item">
                    <a href="#hobbys" class="nav-second__link">Loisirs</a>
                </li>
                <li class="nav-second__item">
                    <a href="#contact" class="nav-second__link">Contact</a>
                </li>
            </ul>
            <a href="#contact" class="nav-second__link nav-second__link--button">Contactez-moi</a>
        </nav>
        <section id="experience" class="experience">
            <h3 class="experience__header" role="heading" aria-level="3">Exprérience professionelle</h3>
            <dl class="experience__table">
                <dt class="experience__table-header"><span class="experience__span">2014-Aujourd’hui</span> La Calamine
                </dt>
                <dd class="experience__table-content experience__table-content--headline">Museum Vieille Montagne</dd>
                <dd class="experience__table-content experience__table-content--content">
                    Caisse, vente, information touristique, travail en autonomie
                </dd>
            </dl>
        </section>
        <section id="studys" class="studys">
            <h3 class="studys__header" role="heading" aria-level="3">Études</h3>
            <dl class="studys__table">
                <dt class="studys__table-header"><span class="studys__span">2016-aujourd’hui</span> Seraing</dt>
                <dd class="studys__table-content studys__table-content--headline">
                    Bachelier en Techniques graphiques Seraing
                </dd>
                <dd class="studys__table-content studys__table-content--content">Orientation Techniques infographiques
                </dd>
                <dd class="studys__table-content studys__table-content--content">Option Web-Multimédias</dd>
                <dd class="studys__table-content studys__table-content--content">Haute École de la Province de Liège
                </dd>
            </dl>
            <dl class="studys__table">
                <dt class="studys__table-header"><span class="studys__span">2014-2016</span>Liège</dt>
                <dd class="studys__table-content studys__table-content--headline">Bachelier en architecture
                    (réorientation)
                </dd>
                <dd class="studys__table-content studys__table-content--content">Université de Liège</dd>
            </dl>
            <dl class="studys__table">
                <dt class="studys__table-header"><span class="studys__span">2008-2014</span>La Calamine</dt>
                <dd class="studys__table-content studys__table-content--headline">CESS bilingue (allemand/français)</dd>
                <dd class="studys__table-content studys__table-content--content">Option sciences mathématiques</dd>
                <dd class="studys__table-content studys__table-content--content">Athénée César Frank La Calamine</dd>
            </dl>
        </section>
        <section id="hobbys" class="hobbys">
            <h3 class="hobbys__header" role="heading" aria-level="3">Loisirs</h3>
            <p class="hobbys__paragraph">J’ai beaucoup de loiris, comme le VTT et le dessin. Mais, ici j’aimerai vous
                parler de mon plus grand loisir, les échecs. Ce jeux m’occupe beaucoup, car d’une part, je joue moi
                même, mais surtout, je suis entraîneur. Pendant que j’étais actif comme joueur, j’ai remporté beaucoup
                de prix, entre autre j’ai acquis le titre de vice-champions de la Belgique dans la tranche d'âge -20
                ans. Maintenant, j’entraîne des enfants pour leurs donner les possibilités d’acquérir des titres de
                leur tour aussi. Mais pas que ça, je suis un partisan du fait que ce sport peux aider les élèves à
                améliorer leur compétances à l’école...</p>
        </section>
        <section class="contact" id="contact">
            <h3 class="contact__header" role="heading" aria-level="3">Contact</h3>
            <div class="map">
                <img src="./assets/img/staticmap.jpg" alt="Carte de la place ou Lysander vit" class="map__img">
                <section class="business-card">
                    <h4 class="business-card__header" role="heading" aria-level="4">
                        Hans Lysander
                    </h4>
                    <img src="./assets/img/logo_lysander.png" alt="Le logo de Lysander Hans"
                         class="business-card__logo">
                    <div class="business-card__address" itemprop="address" itemscope
                         itemtype="http://www.schema.org/PostalAddress">
                        <span itemprop="streetAddress">Rue Neuve 34,</span>
                        <span itemprop="postalCode">B-4720</span>
                        <span itemprop="addressLocality">La Calamine</span>
                        <span itemprop="addressCountry">Belgium</span>
                    </div>
                    <span itemprop="telephone"><a href="tel:+32471553304" class="business-card__link">Tel: +32 471 55 33 04</a></span>
                    <span itemprop="email"><a href="mailto:lysander.hans@hotmail.com" class="business-card__link">lysander.hans@hotmail.com</a></span>
                </section>
                <a href="https://www.google.com/maps/place/Rue+Neuve+34,+4720+La+Calamine/@50.7138483,6.0038169,17z/data=!3m1!4b1!4m5!3m4!1s0x47c090756d96115d:0x592420239b8a87d6!8m2!3d50.7138483!4d6.0060056"
                   class="map__link">Vers la carte</a>
            </div>
            <?php include './components/mail.php'; ?>
        </section>
    </article>
</main>
<footer>
    <section class="projects" id="projects" aria-labelledby="projets-header">
        <h2 id="projets-header" role="heading" aria-level="2" class="projects__header">Projets</h2>
        <section class="project" aria-label="">
            <h3 class="project__heading">Portfolio</h3>
            <img src="./assets/img/portfolio.jpg" alt="Image du portfolio de Lysander">
            <p class="project__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda
                autem cum deleniti deserunt dolorem dolorum explicabo magnam maxime necessitatibus, nemo non numquam
                obcaecati perferendis voluptas. Eius enim illo odio?</p>
            <a href="#" class="project__link">Voir le projet<span class="sro"> Portfolio</span></a>
        </section>
    </section>
        <p class="klein">&copy;Copyright 2018 Autoscout24 Belgium S.a. Tous droits réservés.</p>
</footer>
<script type="text/javascript" src="./assets/js/bundle.js"></script>
</body>
</html>
