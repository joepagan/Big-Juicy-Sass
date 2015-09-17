Big-Juicy-Sass
==============

Just my own personal boilerplate, you don't have to use it, but it's filled with stuff that I find really useful.

I find it quite useful for templating on a local environment with includes and such.

I have now added all the bower resources into the repo, as it gives you access to the resources straight away...

If you do want the absolute latest versions of the resources "CD" into the top-level directory (where bower.json lives) then use "bower install" in cmd line.

Some resources are not available in bower, so I will try keep them as up to date as I can in here here (placeholders.js & my preferred stripped down version of modernizr).

## SASS/SCSS/CSS

Includes:

- SASS REM (bower) - [https://github.com/ry5n/rem/](https://github.com/ry5n/rem/)
- Normalise (bower) - [http://necolas.github.io/normalize.css/](http://necolas.github.io/normalize.css/)
- Font Awesome (bower) - [http://fortawesome.github.io/Font-Awesome/](http://fortawesome.github.io/Font-Awesome/)

## JS/jQuery
Lots of plugin here:

- jQuery 1.11.3 (CDN & local fallback (bower))
- jQuery 2.1.4 (CDN & local fallback (bower))
- jQuery Migrate (bower) - [https://github.com/jquery/jquery-migrate/](https://github.com/jquery/jquery-migrate/)
- Respond JS (bower) - [https://github.com/scottjehl/Respond](https://github.com/scottjehl/Respond)
- Velocity (bower) - [http://julian.com/research/velocity/](http://julian.com/research/velocity/)
- GSAP (bower) - [http://greensock.com/gsap](http://greensock.com/gsap)
    - jQuery GSAP
    - TimelineLite
    - TimelineMax
    - TweenLite
    - TweenMax
    - EasePack
- Modernizr.js - (bower) [https://modernizr.com/](https://modernizr.com/)
- Moment.js - (bower) [http://momentjs.com](http://momentjs.com)
- Magnific Popup (bower) - [https://github.com/dimsemenov/magnific-popup](https://github.com/dimsemenov/magnific-popup)
- Photoswipe (bower)
- Slick Carousel (bower) - [http://kenwheeler.github.io/slick/](http://kenwheeler.github.io/slick)
- jQuery Validate (bower) - [https://github.com/jzaefferer/jquery-validation](https://github.com/jzaefferer/jquery-validation)
- Waypoints.js (bower) - [https://github.com/imakewebthings/jquery-waypoints](https://github.com/imakewebthings/jquery-waypoints)
- html5shiv (bower) - [https://github.com/afarkas/html5shiv](https://github.com/afarkas/html5shiv)

### Non Bower resources
These resources are either not available in bower OR, in the case of modernizr, it's more specific to my own projects

- Placeholder.js 4.0.1 - [http://jamesallardice.github.io/Placeholders.js/](http://jamesallardice.github.io/Placeholders.js/))
- Modernizr.js stripped down - 2.8.3 - [http://modernizr.com/download/#-csstransforms-csstransforms3d-csstransitions-canvas-video-inputtypes-inlinesvg-svg-touch-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes-load](http://modernizr.com/download/#-csstransforms-csstransforms3d-csstransitions-canvas-video-inputtypes-inlinesvg-svg-touch-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes-load)
    - css 2d transform
    - css 3d transforms
    - css transitions
    - canvas
    - html5 video
    - input types
    - inline svg
    - svg
    - touch events
    - modernizr.load
    - add css classes
