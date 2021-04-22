const gulp = require('gulp');
const sass = require('gulp-sass');
const watch = require('gulp-watch');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const min = require("gulp-clean-css");

sass.compiler = require('node-sass');

gulp.task('sass-compail', function () {
    return gulp.src('./scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'))
})


gulp.task('autoprefixer', function () {
    return gulp.src('./css/main.css')

        .pipe(concat('main.css'))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))

        .pipe(gulp.dest('./css/'))
})

gulp.task('min', function () {
    return gulp.src('./css/main.css')

        .pipe(concat('min-main.css'))
        .pipe(min({
            level: 2
        }))

        .pipe(gulp.dest('./css'))
})

gulp.task('watch', function () {
    gulp.watch(['./scss/*.scss', './scss/base/*.scss', './scss/components/*.scss', './scss/layouts/*.scss', './scss/media/*.scss', './scss/pages/*.scss'], gulp.series('sass-compail'))
})

// gulp.watch('./scss/**/*.scss', gulp.series('sass-compail', 'autoprefixer', 'min'))