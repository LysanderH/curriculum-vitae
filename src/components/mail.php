<form action="/" method="post" class="form" id="contact-form">
    <?php if (isset($_SESSION['message'])): ?>
        <p class="form__error-message"><?= $_SESSION['message']; ?></p>
    <?php endif; ?>
    <div class="form__area">
        <label for="name" class="form__label">Votre nom</label>
        <input type="text" class="form__input" id="name" name="sender-name"
               placeholder="p. ex. Max Mustermann"
               value="<?php if (isset($_SESSION['true']['nameTrue'])) echo $_SESSION['true']['nameTrue']; ?>">
        <?php if (isset($_SESSION['error']['nameErr'])): ?>
            <label for="name" class="form__error"></label>
        <?php endif; ?>
    </div>
    <div class="form__area">
        <label for="mail" class="form__label">Votre adresse mail</label>
        <input type="email" class="form__input" id="mail" name="mail" placeholder="p. ex. example@mail.com"
               value="<?php if (isset($_SESSION['true']['mailTrue'])) echo $_SESSION['true']['mailTrue']; ?>">
        <?php if (isset($_SESSION['error']['mailErr'])): ?>
            <label for="mail" class="form__error"><?= $_SESSION['error']['mailErr']; ?></label>
        <?php endif; ?>
    </div>
    <div class="form__area">
        <label for="phone" class="form__label">Votre numéro de téléphone</label>
        <input type="tel" class="form__input" id="phone" name="phone-number"
               placeholder="p. ex. +32 (0) 471 55 33 04"
               value="<?php if (isset($_SESSION['true']['telTrue'])) echo $_SESSION['true']['telTrue']; ?>">
        <?php if (isset($_SESSION['error']['telErr'])): ?>
            <label for="phone" class="form__error"><?= $_SESSION['error']['telErr']; ?></label>
        <?php endif; ?>
    </div>
    <div class="form__area form__area--checkbox">
        <span class="form__header">Votre message</span>
        <label for="contact-reason1" class="form__contact-reason">Créer un projet avec moi
            <input type="checkbox" class="form__checkbox" name="contact-reason[]"
                   id="contact-reason1">
            <span class="form__checkmark"></span>
        </label>
        <label for="contact-reason2" class="form__contact-reason">J’aimerai bien t’angager
            <input type="checkbox" class="form__checkbox" name="contact-reason[]" id="contact-reason2">
            <span class="form__checkmark"></span>
        </label>
        <label for="contact-reason3"
               class="form__contact-reason">Merci de prendre contact avec moi
            <input type="checkbox" class="form__checkbox" name="contact-reason[]" id="contact-reason3">
            <span class="form__checkmark"></span>
        </label>
        <label for="contact-reason4"
               class="form__contact-reason">Jouer une partie d’échecs contre moi
            <input type="checkbox" class="form__checkbox" name="contact-reason[]" id="contact-reason4">
            <span class="form__checkmark"></span>
        </label>
    </div>
    <textarea name="content" id="content" rows="7" maxlength="1400"
              class="form__content">Bonjour,

Je suis intéressé(e) par votre travail. Êtes-vous toujours disponible?

Cordialement,<?php if (isset($_SESSION['true']['contentTrue'])) echo $_SESSION['true']['contentTrue']; ?></textarea>
    <?php if (isset($_SESSION['error']['mailErr'])): ?>
        <label for="content" class="form__error"><?= $_SESSION['error']['mailErr']; ?></label>
    <?php endif; ?>
    <p class="form__paragraph">Le contenu de votre message sera examiné pour des raisons de sécurité. Nous prenons la
        protection des données au sérieux. Les données saisies ne seront pas utilisées à des fins publicitaires.</p>
    <div class="form__area form__area--big-text">
        <label for="copy" class="form__copy form__contact-reason">Envoyez-moi une copie
            <input type="checkbox" class="form__checkbox" name="copy[]" id="copy">
            <span class="form__checkmark"></span>
        </label>
    </div>
    <button type="submit" class="form__button">Envoyer</button>
</form>