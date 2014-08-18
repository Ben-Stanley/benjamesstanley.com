// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var jshint = require('gulp-jshint'),
    compass = require('gulp-compass'),
    minifycss = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename');


var paths = {
    styles: 'assets/styles/*.scss',
    scripts: 'assets/js/*.js'
};

gulp.task('compass', function() {
  gulp.src(paths.styles)
  .pipe(compass({
    css: 'assets/styles',
    sass: 'assets/sass',
    image: 'assets/images',
    require: ['susy', 'modular-scale'],
    require: ['breakpoint', 'modular-scale']
  }))
  .pipe(rename({suffix: '.min'}))
  .pipe(minifycss())
  .pipe(gulp.dest('assets/styles'));
});


JSHint, concat, and minify JavaScript
gulp.task('scripts', function() {
  return gulp.src(paths.scripts)
    .pipe(jshint())
    .pipe(jshint.reporter())
    .pipe(concat('styles.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

// Default Task
gulp.task('default', [ 'compass', 'scripts']);
