var gulp = require("gulp"),
sass = require("gulp-sass"),
sourcemaps = require("gulp-sourcemaps"),
uglify = require("gulp-uglify"),
rename = require("gulp-rename"),
jshint = require('gulp-jshint'),
imagemin = require("gulp-imagemin"),
notify = require("gulp-notify"),
include = require("gulp-include"),
livereload = require('gulp-livereload'),
concat = require('gulp-concat'),
resources = "./build/public/resources/site",
paths = {
    js: resources+"/js",
    css: resources+"/css",
    scss: resources+"/scss",
    images: resources+"/images",
    templates: "./build/craft/templates",
    vendor: "./build/public/resources/vendor"
};

// what is run with "gulp"
gulp.task("default", ["watch"]);

// sass task
gulp.task("sass", function () {
    return gulp.src([
        paths.scss+"/*.scss",
        "!"+paths.scss+"/*/*.scss"
      ])
      //.pipe(sourcemaps.init())
      .pipe(sass({outputStyle: "compressed"}).on("error", sass.logError))
      //.pipe(sourcemaps.write("./maps"))
      .pipe(gulp.dest(paths.css))
      .pipe(livereload()); // refresh the page
});

// js task
gulp.task("js", function() {
    // ignore .min.js files
    return gulp.src([
        paths.js+"/*.js",
        "!"+paths.js+"/*.min.js",
        "!"+paths.js+"/*/*.min.js"
        ])
        .pipe(include()) // include plugin allows includes in js files
        .pipe(jshint()) // run jshin
        .pipe(jshint.reporter('jshint-stylish')) // run the jshint prettyfier
        .pipe(sourcemaps.init()) // start creating the source maps
        .pipe(uglify()) // minify stuff
        .on('error', onError) // error handling
        .pipe(rename({
            suffix: ".min" // add ".min" to the end of the filename
        }))
        .pipe(sourcemaps.write()) // finish creating the source map
        .pipe(gulp.dest(paths.js)) // created minified files at this path
        .pipe(livereload()); // refresh the page
});

// templates task
gulp.task("templates", function(){
    // live reload on save of php/twig/html files
    return gulp.src(paths.templates+"/**/*.{php,twig,html,json,xml}")
    .pipe(livereload()); // refresh the page
});

// third party vendor css concat
gulp.task('vendorstyles', function() {
  return gulp.src([
    //   paths.vendor+"/magnific-popup/dist/magnific-popup.css",
    //   paths.vendor+"/slick-carousel/slick/slick.css",
    //   paths.vendor+"/slick-carousel/slick/slick-theme.css"
  ])
    .pipe(concat('vendorstyles.min.css'))
    .pipe(gulp.dest(paths.vendor+"/css"));
});

// third party vendor js concat
gulp.task('vendorscripts', function() {
  return gulp.src([
        // paths.vendor+"/modernizr-stripped/modernizr.js",
        // paths.vendor+"/moment/min/moment.min.js",
        // paths.vendor+"/waypoints/lib/noframework.waypoints.min.js",
        // paths.vendor+"/matchHeight/jquery.matchHeight-min.js",
        // paths.vendor+"/jquery-validate/dist/jquery.validate.min.js",
        // paths.vendor+"/materialize/js/parallax.js",
        // paths.vendor+"/slick-carousel/slick/slick.min.js",
        //
        // // GSAP
        // paths.vendor+"/gsap/src/minified/TimelineMax.min.js",
        // paths.vendor+"/gsap/src/minified/TimelineLite.min.js",
        // paths.vendor+"/gsap/src/minified/TweenMax.min.js",
        // paths.vendor+"/gsap/src/minified/plugins/ScrollToPlugin.min.js",
        // paths.vendor+"/gsap/src/minified/plugins/CSSPlugin.min.js",
        // paths.vendor+"/gsap/src/minified/easing/EasePack.min.js",
        // paths.vendor+"/gsap/src/minified/TweenLite.min.js",
        //
        // paths.vendor+"/magnific-popup/dist/jquery.magnific-popup.min.js",
        // paths.vendor+"/isotope/dist/isotope.pkgd.min.js",
        // paths.vendor+"/isotope-packery/packery-mode.pkgd.min.js",
        // paths.vendor+"/jquery-smartresize/jquery.debouncedresize.js",
  ])
    .pipe(concat('vendorscripts.min.js'))
    .pipe(gulp.dest(paths.vendor+"/js"));
});

// the watch task
gulp.task("watch", function () {
    livereload.listen();
    gulp.watch(paths.scss+"/**/*.scss", ["sass"]);
    gulp.watch([paths.js+"/**/*.js", "!"+paths.js+"/**/*.min.js"], ["js"]);
    gulp.watch(paths.templates+"/**/*.{php,twig,html,json,xml}", ["templates"]);
});

//imagemin
gulp.task("imagemin", function(){
    return gulp.src(paths.images+"/**/*")
        .pipe(imagemin(
            [
                imagemin.gifsicle({interlaced: true}),
                imagemin.jpegtran({progressive: true}),
                imagemin.optipng({optimizationLevel: 7}),
                imagemin.svgo({plugins: [{removeViewBox: false}]})
            ]
        ))
        .pipe(gulp.dest(paths.images));
});

// error function
function onError(err) {
    notify.onError({
        message: 'Error: <%= err %>'
    });
    this.emit('end');
}
