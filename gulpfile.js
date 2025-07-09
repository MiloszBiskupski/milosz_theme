const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const watch = require('gulp-watch');

const paths = {
    scss: 'assets/style/scss/**/*.scss',
    cssOutput: 'assets/style/css'
};

function compileScss() {
    return gulp.src(paths.scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('styles.min.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.cssOutput));
}

function watchScss() {
    gulp.watch(paths.scss, compileScss);
}

exports.default = gulp.series(compileScss, watchScss);