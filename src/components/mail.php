<form action="index.php" method="post" class="contact__form">
    <div class="form__area">
        <label for="name" class="form__label">Votre nom</label>
        <input type="text" class="form__input" id="name" name="writer-name"
               placeholder="p. ex. Max Mustermann">
    </div>
    <div class="form__area">
        <label for="mail" class="form__label">Votre adresse mail</label>
        <input type="email" class="form__input" id="mail" name="mail" placeholder="p. ex. example@mail.com">
    </div>
    <div class="form__area">
        <label for="phone" class="form__label">Votre numéro de téléphone</label>
        <input type="tel" class="form__input" id="phone" name="phone-number"
               placeholder="p. ex. +32 (0) 471 55 33 04">
    </div>
    <div class="form__area form__area--checkbox">
        <span class="form__header">Votre message</span>
        <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason1">
                        <label for="contact-reason1" class="form__contact-reason">Créer un projet avec moi</label>
                    </span>
        <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason2">
                        <label for="contact-reason2" class="form__contact-reason">J’aimerai bien t’angager</label>
                    </span>
        <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason3">
                        <label for="contact-reason3"
                               class="form__contact-reason">Merci de prendre contact avec moi</label>
                    </span>
        <span class="form__span">
                        <input type="checkbox" class="form__checkbox" name="contact-reason" id="contact-reason4">
                        <label for="contact-reason4"
                               class="form__contact-reason">Jouer une partie d’échecs contre moi</label>
                    </span>

    </div>
    <textarea name="content" id="content" rows="7" maxlength="1400" class="form__content">Bonjour,

Je suis intéressé(e) par ton travail. Es-tu toujours disponible?

Cordialement,</textarea>
    <p class="form__paragraph">Le contenu de votre message sera examiné pour des raisons de sécurité. Nous prenons la protection des données au sérieux. Les données saisies ne seront pas utilisées à des fins publicitaires.</p>
    <div class="form__area form__area--big-text">
        <input type="checkbox" class="form__checkbox" name="accord" id="accord">
        <label for="accord" class="form__label form__label--long">J’accepte que mes données soient
            traitées, comme décrit dans la <a class="form__link">déclaration de consentement</a> d’AutoScout24. Je peux révoquer ce consentement à tout moment avec effet pour l’avenir.</label>
    </div>
    <div class="form__area form__area--big-text">
        <input type="checkbox" class="form__checkbox" name="copy" id="copy">
        <label for="copy" class="form__copy">Envoyez-moi une copie</label>
    </div>
    <input type="submit" class="form__button" value="Envoyer">
</form>