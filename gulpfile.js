const path = require('path');

const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const plumber = require('gulp-plumber');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass');

const browserSync = require('browser-sync').create();

const cfg = require('./gulp.config.json');
const paths = cfg.paths;

gulp.task('browser-sync', function () {
  browserSync.init(cfg.browserSyncOptions, cfg.browserSyncWatchFiles);
});

gulp.task('scripts', function () {
  var scripts = [
    path.resolve(paths.node, 'jquery/dist/jquery.slim.js'),
    path.resolve(paths.node, 'bootstrap/dist/js/bootstrap.bundle.js'),
    path.resolve(paths.src, 'main.js')
  ];

  // gulp.src(scripts)
  //   .pipe(concat('theme.min.js'))
  //   .pipe(uglify())
  //   .pipe(gulp.dest(paths.js));

  gulp.src(scripts)
    .pipe(sourcemaps.init())
    .pipe(babel())
    .pipe(concat('theme.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.js));
});

gulp.task('scss', function () {
  return gulp.src(path.resolve(paths.scss, 'style.scss'))
    .pipe(plumber())
    .pipe(sass({ includePaths: [path.resolve(__dirname, 'node_modules')] }))
    .pipe(postcss())
    .pipe(gulp.dest(paths.css));
});

// gulp.task('styles', function (callback) {
//   gulpSequence('scss', 'minify-css')(callback);
// });

gulp.task('watch', function () {
  gulp.watch(paths.scss + '/**/*.scss', ['scss']);
  gulp.watch(paths.src + '/**/*.js', ['scripts']);
  // gulp.watch('./img/**', ['imagemin'])
});

gulp.task('watch-bs', ['browser-sync', 'watch'], function () {});
