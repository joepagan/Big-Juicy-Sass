var gulp = require("gulp"),
sass = require("gulp-sass"),
sourcemaps = require("gulp-sourcemaps"),
uglify = require("gulp-uglify"),
rename = require("gulp-rename"),
imagemin = require("gulp-imagemin"),
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
    return gulp.src([
        paths.scss+"/*.scss",
        "!"+paths.scss+"/*/*.scss"
    ])
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: "compressed"}).on("error", sass.logError))
    .pipe(sourcemaps.write("./maps"))
    .pipe(gulp.dest(paths.css))
    .pipe(livereload()); // refresh the page
});

gulp.task("jsLintPartials", function(){
    return gulp.src([
        paths.js+"/*/*.js",
        "!"+paths.js+"/*.js",
        "!"+paths.js+"/*.min.js"
    ])
    .pipe(jshint()) // run jshin
    .pipe(jshint.reporter('jshint-stylish')); // run the jshint prettyfier
});

// js task
gulp.task("js", function() {
    // ignore .min.js files
    return gulp.src([
        paths.js+"/*.js",
        "!"+paths.js+"/*/*.js",
        "!"+paths.js+"/*.min.js",
        "!"+paths.js+"/*/*.min.js"
    ])
    .pipe(include()) // include plugin allows includes in js files
    .pipe(jshint()) // run jshin
    .pipe(jshint.reporter('jshint-stylish')) // run the jshint prettyfier
    //.pipe(sourcemaps.init()) // start creating the source maps
    .pipe(uglify(
        {
            mangle: {
                except: ["jQuery", "$"]
            },
            compress: {
                sequences     : true,  // join consecutive statemets with the “comma operator”
                properties    : true,  // optimize property access: a["foo"] → a.foo
                dead_code     : true,  // discard unreachable code
                drop_debugger : true,  // discard “debugger” statements
                unsafe        : false, // some unsafe optimizations (see below)
                conditionals  : true,  // optimize if-s and conditional expressions
                comparisons   : true,  // optimize comparisons
                evaluate      : true,  // evaluate constant expressions
                booleans      : true,  // optimize boolean expressions
                loops         : true,  // optimize loops
                unused        : true,  // drop unused variables/functions
                hoist_funs    : true,  // hoist function declarations
                hoist_vars    : false, // hoist variable declarations
                if_return     : true,  // optimize if-s followed by return/continue
                join_vars     : true,  // join var declarations
                cascade       : true,  // try to cascade `right` into `left` in sequences
                side_effects  : true,  // drop side-effect-free statements
                warnings      : true,  // warn about potentially dangerous optimizations/code
        	}
        }
    )) // minify stuff
    .on('error', onError) // error handling
    .pipe(rename({
        suffix: ".min" // add ".min" to the end of the filename
    }))
    //.pipe(sourcemaps.write()) // finish creating the source map
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
        paths.js+"/*/*.js",
        paths.js+"/*.js",
        "!"+paths.js+"/*.min.js"
    ], ["js", "jsLintPartials"]);
    gulp.watch([
        paths.templates+"/**/*.{php,twig,html,json,xml}",
        paths.templates+"/*.{php,twig,html,json,xml}"
    ], ["templates"]);
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
