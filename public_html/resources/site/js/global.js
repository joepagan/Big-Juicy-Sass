// Console.logs will break IE7 so remove all when live if you care about that...

/**
 * SVG handling
 */
 if (!Modernizr.svg){

    // Get all img tag of the document and create variables
    var i=document.getElementsByTagName("img"),j,y;

    // For each img tag
    for(j = i.length ; j-- ; ){
 	   y = i[j].src;
 	   // If filenames ends with SVG
      if(y.indexOf("?") > -1){
        y = y.split("?")[0]; // removes query strings from images
      }
 	   if( y.match(/svg$/) ){

 	   	if (i[j].getAttribute('data-svg-fallback')) {
 	   	i[j].src = i[j].getAttribute('data-svg-fallback');
 	   	} else {
 	   // Replace "svg" by "png"
 	   i[j].src = y.slice(0,-3) + 'png';
 	   	}
 	   }
    }
 }

$(document).ready(function(){

});
