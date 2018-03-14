/**
 * PROJECT : justcoder
 * FILE : gulpfile.js
 * DATE : 2018/1/25 14:58
 * AUTHOR : Younger Shen <younger.shen@hotmail.com>
 */

var gulp = require('gulp');
var cssminify = require('gulp-minify-css');
var jsugify = require('gulp-uglify');
var concat = require('gulp-concat');
var replace = require('gulp-replace');
var rev = require('gulp-rev');


gulp.task('build_css', function() {

    gulp.src(['static/bootstrap-4.0.0-dist/css/bootstrap.min.css', 'static/css/justcoder.css'])
        .pipe(concat('bundle.min.css'))
        .pipe(cssminify())
        .pipe(gulp.dest('static/css'))
});

gulp.task('build_js', function(){
    gulp.src(['static/jquery/jquery-3.3.1.min.js', 'static/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js', 'static/js/justcoder.js'])
        .pipe(concat('bundle.min.js'))
        .pipe(jsugify())
        .pipe(gulp.dest('static/js'))
});

gulp.task('default', ['build_css', 'build_js']);