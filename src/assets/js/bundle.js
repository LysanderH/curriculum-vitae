// Imports
import {noJavascript} from './noJavascript';
import imageSlider from './imageSlider';
import stickyNav from './stickyNav';


//this 'app' object is going to assemble all fragments
const app = {
	noJavascript: null,
    imageSlider: null,
    stickyNav: null,

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

        
    }
}
app.init();
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}