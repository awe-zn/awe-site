const gulp = require('gulp');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const scssFiles = './src/scss/style.scss';
const cssDest = './css';
const sassDevOptions = {outputStyle: 'expanded'}
const sassProdOptions = {outputStyle: 'compressed'}

function desenvolvimento() {
    return gulp.src(scssFiles)
      .pipe(sass(sassDevOptions).on('error', sass.logError))
      .pipe(gulp.dest(cssDest));
  }
function produção() {
    return gulp.src(scssFiles)
      .pipe(sass(sassProdOptions).on('error', sass.logError))
      .pipe(rename('style.min.css'))
      .pipe(gulp.dest(cssDest));
  }
exports.default = function() {
    gulp.watch(scssFiles, gulp.series(desenvolvimento, produção));
  };