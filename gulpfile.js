var gulp = require('gulp'),
    cssmin = require('gulp-cssmin'),
    compass = require('gulp-compass'),
    uglify = require("gulp-uglify"),
    rename = require("gulp-rename"),
    ftp = require('gulp-ftp'),
    order = require("gulp-order"),
    concat = require('gulp-concat');

function swallowError(error) {
    console.log(error.toString());
    this.emit('end');
}

function getFtpOptions(path) {
    return {
        user: '*',
        pass: '*',
        port: 21,
        host: '*',
        remotePath: '*' + path
    };
}

gulp.task('styles', function () {
    gulp.src('scss/*.scss')
        .pipe(compass({
            config_file: './config.rb',
            css: 'css',
            sass: 'css'
        }))
        .pipe(ftp(getFtpOptions('css')))
        .pipe(gulp.dest('css'))
        .on('error', swallowError);
});


/**
 * if nid minimize css
 */
gulp.task('styles_min', function () {
    gulp.src('css/*.scss')
        .pipe(compass({
            config_file: './config.rb',
            css: 'css',
            sass: 'css'
        }))
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(ftp(getFtpOptions('css')))
        .pipe(gulp.dest('css'))
        .on('error', swallowError);
});


gulp.task('default', ['styles'], function () {
    gulp.watch('css/*.scss', ['styles']);
});

