export const noJavascript = {
    init() {
        const getBody = document.querySelector('body');
        getBody.classList.replace('no-js', 'js');
    }
}