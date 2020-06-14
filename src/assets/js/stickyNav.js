const stickyNav = {
    nav: null,
    regularNav: null,
    sticky: null,
    coordinates: null,
    init() {
        this.regularNav = document.querySelector('.nav-second');
        this.nav = document.querySelector('.nav-second--sticky');
        this.coordinates = this.getCoords(this.regularNav).top;

        window.addEventListener('scroll', (e) => {
            this.checkStickyOrNot(this.coordinates);
        })
    },
    checkStickyOrNot(coordinates) {
        if (window.pageYOffset >= coordinates) {
            this.nav.classList.add('sticky');
        } else {
            this.nav.classList.remove('sticky');
        }
    },
    getCoords(elem) {
    let box = elem.getBoundingClientRect();

    return {
        top: box.top + pageYOffset,
        left: box.left + pageXOffset
    };
}
};
export default stickyNav