// Imports
import {noJavascript} from './noJavascript';

//this 'app' object is going to assemble all fragments
const app = {
	noJavascript: null,
	init() {
        //initiate the noJavascript
        this.noJavascript = noJavascript;
        this.noJavascript.init();

        // todo: initiate the image slider

        // todo: initiate the project slider
        
    }
}
app.init();