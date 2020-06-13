// Imports
import {noJavascript} from './noJavascript';
import imageSlider from './imageSlider';


//this 'app' object is going to assemble all fragments
const app = {
	noJavascript: null,
    imageSlider: null,

	init() {
        //initiate the noJavascript
        this.noJavascript = noJavascript;
        this.noJavascript.init();

        // todo: initiate the image slider
        this.imageSlider = imageSlider;
        this.imageSlider.init();
        // todo: initiate the project slider

        // todo: initiate the share button
        
    }
}
app.init();