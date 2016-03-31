var gulp = require("gulp"),
sass = require("gulp-sass"),
sourcemaps = require("gulp-sourcemaps"),
uglify = require("gulp-uglify"),
rename = require("gulp-rename"),
jshint = require('gulp-jshint'),
notify = require("gulp-notify"),
include = require("gulp-include"),
livereload = require('gulp-livereload'),
resources = "./build/public/resources/site",
paths = {
    js: resources+"/js",
    css: resources+"/css",
    scss: resources+"/scss",
    images: resources+"/images",
    templates: "./build/craft/templates"
};

// what is run with "gulp"
gulp.task("default", ["watch"]);

// sass task
gulp.task("sass", function () {
    return gulp.src(paths.scss+"/**/*.scss")
      .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: "compressed"}).on("error", sass.logError))
      .pipe(sourcemaps.write("./maps"))
      .pipe(gulp.dest(paths.css))
      .pipe(livereload()); // refresh the page
});

// js task
gulp.task("js", function() {
    // ignore .min.js files
    return gulp.src([paths.js+"/**/*.js", "!"+paths.js+"/**/*.min.js"])
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
    gulp.watch([paths.js+"/**/*.js", "!"+paths.js+"/**/*.min.js"], ["js"]);
    gulp.watch(paths.templates+"/**/*.{php,twig,html,json,xml}", ["templates"]);
});

// error function
function onError(err) {
    notify.onError({
        message: 'Error: <%= err %>'
    });
    this.emit('end');
}
