export const noJavascript = {
    init() {
        const getNoJsMessage = document.querySelector('#no-js-message');
        const getBody = document.querySelector('body');
        getBody.classList.replace('no-js', 'js');
        getNoJsMessage.remove();
    }
}