const {
    src,
    dest,
    watch,
    parallel
} = require('gulp');

const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const concat = require('gulp-concat');
const browserSync = require('browser-sync');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

function css() {
    return src('src/sass/*.sass')
        .pipe(sass({
            includePaths: ['node_modules']
        }))
        .pipe(minifyCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(dest('./css/'))
}

function js() {
    return src('src/js/*.js')
        /* .pipe(concat('app.min.js')) */
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(dest('js/'))
}

function live() {
    browserSync.init({
        proxy: 'localhost/dialogo-site'
    });

    watch('src/sass/*.sass', css).on('change', browserSync.reload);
    watch('src/js/*.js', js).on('change', browserSync.reload);
    watch('layouts/*.php').on('change', browserSync.reload);
    watch('./*.php').on('change', browserSync.reload);
}

exports.js = js;
exports.css = css;
exports.live = live;
exports.default = parallel(css, js, live);