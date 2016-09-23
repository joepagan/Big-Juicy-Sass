// To comile this file with the includes below you will need gulp-include https://www.npmjs.com/package/gulp-include

// Imports
//=require "./includes/svg_handling.js"

var htmlElement = document.documentElement,
oldIeClass = "oldie";

function docReady(){

}

// If html element has "oldie" class name, use old doc ready for jquery 1
// classList not actually supported in ie8, so the else will deal with that
if (htmlElement.classList){
    // if no oldie class found use jquery 3 docReady
    if(!htmlElement.classList.contains(oldIeClass)){
        $(docReady);
    } else{
        // if oldie class found use jquery 1 docReady
        $(document).on("ready", function(){
            docReady();
        });
    }
} else {
    // if no oldie class found use jquery 3 docReady
    if(!new RegExp('(^| )' + oldIeClass + '( |$)', 'gi').test(htmlElement.className)){
        $(docReady);
    } else {
        // if oldie class found use jquery 1 docReady
        $(document).on("ready", function(){
            docReady();
        });
    }
}
