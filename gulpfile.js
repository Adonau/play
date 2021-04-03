const gulp = require('gulp');
const sass = require('gulp-sass');
const watch = require('gulp-watch');

const concat = require('gulp-concat');

gulp.task('sass-compail', function () {
    return gulp.src('./scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
})

gulp.task('watch', function () {
    gulp.watch('./scss/**/*.scss', gulp.series('sass-compail'))

})