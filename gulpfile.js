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

var materialize_path = 'node_modules/materialize-css';


gulp.task('build_materialize', function(){
    gulp.src(materialize_path + '/dist/css/materialize.css')
        .pipe(gulp.dest('static/css'));

    gulp.src(materialize_path + '/dist/fonts/roboto/*')
        .pipe(gulp.dest('static/fonts/roboto'));

    gulp.src(materialize_path + '/dist/js/materialize.js')
        .pipe(gulp.dest('static/js'));

});

gulp.task('buildcss', function() {

    gulp.src('static/css/*.css')
        .pipe(concat('bundle.min.css'))
        .pipe(cssminify())
        .pipe(rev())
        .pipe(gulp.dest('static/css'))
        .pipe(rev.manifest('css-manifest.json'))
        .pipe(gulp.dest('static/css'));
});

gulp.task('buildjs', function(){
    gulp.src('static/js/*.js')
        .pipe(concat('bundle.min.js'))
        .pipe(jsugify())
        .pipe(rev())
        .pipe(gulp.dest('static/js'))
        .pipe(rev.manifest('js-manifest.json'))
        .pipe(gulp.dest('static/js'));
});

gulp.task('default', ['build_materialize', 'buildcss', 'buildjs']);