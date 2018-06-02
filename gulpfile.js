'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var server = require('browser-sync');
var mqpacker = require('css-mqpacker');
var minify = require('gulp-csso');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var svgmin = require('gulp-svgmin');
var copy = require('gulp-contrib-copy');
var clean = require('gulp-contrib-clean');
var injectSvg = require('gulp-inject-svg');
var inline_base64 = require('gulp-inline-base64');
var inlineimg = require('gulp-inline-image-html');
var inlineImagePath = require('gulp-inline-image-path');
var preprocess = require('gulp-preprocess');
// var sourcemaps = require('gulp-sourcemaps');

gulp.task('style', function () {
    gulp.src('scss/**/*.scss')
        .pipe(plumber())
        // .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(inline_base64({
            maxSize: 14 * 1024,
            debug: true
        }))
        .pipe(postcss([
            autoprefixer({
                browsers: [
                    'last 1 version',
                    'last 2 Chrome versions',
                    'last 2 Firefox versions',
                    'last 2 Opera versions',
                    'last 2 Edge versions',
                    'last 2 Safari versions',
                ]
            }),
            mqpacker({
                sort: true
            })
        ]))
        .pipe(minify())
        .pipe(rename(function (path) {
            path.extname = ".min.css"
        }))
        // .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('build/css'))
        .pipe(server.reload({ stream: true }));
});

gulp.task('images', function () {
    return gulp.src('img/**/*.{png,jpg,gif}')
        .pipe(imagemin({
            optimizationLevel: 5,
            progressive: true
        }))
        .pipe(gulp.dest('build/img'))
        .pipe(server.reload({ stream: true }));
});

gulp.task('symbols', function () {
    return gulp.src('img/*.svg')
        .pipe(svgmin(function getOptions(file) {
            var prefix = file.relative;
            prefix = prefix.replace('.svg', '');
            return {
                plugins: [{
                    cleanupIDs: {
                        prefix: prefix + '-',
                        minify: true
                    }
                }]
            }
        }))
        .pipe(gulp.dest('build/img'))
        .pipe(server.reload({ stream: true }));
});

gulp.task('fonts', function () {
    gulp.src('fonts/**/*.{woff,woff2}')
        .pipe(gulp.dest('build/fonts'));
});

gulp.task('script', function () {
    gulp.src('js/**/*.js')
        .pipe(gulp.dest('build/js'))
        .pipe(server.reload({ stream: true }));
});

gulp.task('html', function () {
    gulp.src('views/pages/**/*.html')
        // .pipe(inlineImagePath({path:"build/img"})) // It cant serve paths like build/img/**/
        .pipe(preprocess({
            context: {
                NODE_ENV: 'development',
                logged_in: true,
                DEBUG: true
            }
        })) //To set environment variables in-line
        .pipe(injectSvg())
        .pipe(inlineimg()) // less requests, but html has big size
        .pipe(gulp.dest('build'))
        .pipe(server.reload({ stream: true }));
});

gulp.task('copy', function () {
    gulp.src('**/*')
        .pipe(copy())
        .pipe(gulp.dest('build'));
});

gulp.task('clean', function () {
    gulp.src('build, {read: false}')
        .pipe(clean());
});

gulp.task('clean', function () {
    gulp.src('build')
        .pipe(clean());
});

gulp.task('build', ['clean', 'images', 'symbols', 'fonts', 'script'], function () {
    gulp.start(
        'style',
        'html'
    );
});

gulp.task('serve', [], function () {
    server.init({
        server: 'build',
        notify: false,
        open: false,
        ui: false
    });
    // TODO: this is a problem with serving img paths in html. Now it is hacked width build/img/ instead of /img/

    gulp.watch('scss/**/*.{scss,sass}', ['style']);
    gulp.watch('views/**/*.html', ['html']).on("change", server.reload);
    gulp.watch('js/**/*.js', ['script']).on("change", server.reload);
    gulp.watch('img/!**!/!*.svg', ['symbols']).on("change", server.reload);
    gulp.watch('img/!**!/!*.{png,jpg,gif}', ['images']).on("change", server.reload);
    gulp.watch('fonts/!**/!*.{woff,woff2}', ['fonts']).on("change", server.reload);
});
