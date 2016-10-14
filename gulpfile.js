var gulp = require("gulp");
var sass = require("gulp-sass");
var sourcemaps = require("gulp-sourcemaps");
var uglify = require("gulp-uglify");
var rename = require("gulp-rename");
var jshint = require('gulp-jshint');
var imagemin = require("gulp-imagemin");
    // jpgs
    var imageminJpegRecompress = require('imagemin-jpeg-recompress');
    //pngs - using built in optipng (best lossless compression)
var notify = require("gulp-notify");
var include = require("gulp-include");
var livereload = require('gulp-livereload');
var concat = require('gulp-concat');
var resources = "./build/public/resources/site";
var paths = {
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
            paths.js+"/**/*.js",
            "!"+paths.js+"/**/*.min.js"
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

// the watch task
gulp.task("watch", function () {
    livereload.listen();
    gulp.watch(paths.scss+"/**/*.scss", ["sass"]);
    gulp.watch([
        paths.js+"/**/*.js",
        "!"+paths.js+"/**/*.min.js"],
        ["js"]);
    gulp.watch(paths.templates+"/**/*.{php,twig,html,json,xml}", ["templates"]);
});

//imagemin
gulp.task("imagemin", function(){
    return gulp.src(paths.images+"/**/*")
        .pipe(imagemin([
            imageminJpegRecompress({
                progressive: true,
                max: 80,
                min: 70
            })
        ]))
        .pipe(gulp.dest(paths.images));
});

// error function
function onError(err) {
    notify.onError({
        message: 'Error: <%= err %>'
    });
    this.emit('end');
}
