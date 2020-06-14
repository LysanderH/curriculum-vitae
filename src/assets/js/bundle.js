// Imports
import {noJavascript} from './noJavascript';
import imageSlider from './imageSlider';
import stickyNav from './stickyNav';


//this 'app' object is going to assemble all fragments
const app = {
    noJavascript: null,
    imageSlider: null,
    stickyNav: null,

    checkbox1: document.querySelector('#contact-reason1'),
    checkbox2: document.querySelector('#contact-reason2'),
    checkbox3: document.querySelector('#contact-reason3'),
    checkbox4: document.querySelector('#contact-reason4'),
    textarea: document.querySelector('#content'),

    init() {
        //initiate the noJavascript
        this.noJavascript = noJavascript;
        this.noJavascript.init();

        // initiate the image slider
        this.imageSlider = imageSlider;
        this.imageSlider.init();

        // initiate the stickyNav
        this.stickyNav = stickyNav;
        this.stickyNav.init();

        this.checkbox1.addEventListener('change', (e) => {
            if (this.checkbox1.checked) {
                this.textarea.value += 'Bonjour,\n' +
                    '\n' +
                    'Je suis intéressé(e) par votre travail. Êtes-vous toujours disponible?\n' +
                    '\n' +
                    'Cordialement,';
            } else {
                this.textarea.value = this.textarea.value.replace('Bonjour,\n' +
                    '\n' +
                    'Je suis intéressé(e) par votre travail. Êtes-vous toujours disponible?\n' +
                    '\n' +
                    'Cordialement,','')
            }
        })
        this.checkbox2.addEventListener('change', (e) => {
            if (this.checkbox2.checked) {
                this.textarea.value += '\nJ’ai une place de libre dans mon agence, si tu es intéressé.';
            } else {
                return this.textarea.value = this.textarea.value.replace('\nJ’ai une place de libre dans mon agence, si tu es intéressé.','');
            }
        })
        this.checkbox3.addEventListener('change', (e) => {
            if (this.checkbox3.checked) {
                this.textarea.value += '\nContacte moi s.t.p.';
            } else {
                return this.textarea.value = this.textarea.value.replace('\nContacte moi s.t.p.','');
            }
        })
        this.checkbox4.addEventListener('change', (e) => {
            if (this.checkbox4.checked) {
                this.textarea.value += '\nJ’aimerai aussi jouer une partie d’échecs.';
            } else {
                return this.textarea.value = this.textarea.value.replace('\nJ’aimerai aussi jouer une partie d’échecs.','');
            }
        })
    }
}
app.init();



