const gulp         = require('gulp'),
      sass         = require('gulp-sass'),
      rename       = require('gulp-rename'),
      php          = require('gulp-connect-php'),
      clean        = require('gulp-clean'),
      autoprefixer = require('gulp-autoprefixer'),
      cleanCSS     = require('gulp-clean-css'),
      browserSync  = require('browser-sync').create();
const { series } = require('gulp');

// Delete old css file
function cleanStyle() {
  return gulp.src('./src/assets/stylesheets/application-*.min.css', {read: false})
    .pipe(clean());
}

// Compile SCSS into CSS
function compileStyle() {
  return gulp.src('./src/assets/stylesheets/scss/application.scss')
    .pipe(sass().on('error', sass.logError))          // Compile SCSS into CSS
    .pipe(autoprefixer())                             // Run autoprefixer on CSS
    .pipe(cleanCSS({debug: true}, function(details) { // Minify CSS
      console.log(details.name + ' Original size: ' + details.stats.originalSize / 1000 + 'kB');
      console.log(details.name + ' Minified size: ' + details.stats.minifiedSize / 1000 + 'kB');
    }))
    .pipe(rename('application-'+((new Date()).getTime())+'.min.css')) // Rename CSS file
    .pipe(gulp.dest('./src/assets/stylesheets'))      // Save CSS file
    // .pipe(browserSync.stream())
}

// Start local PHP server
function phpConnect() {
  php.server({
    base: './src/',
    port: 8010,
    keepalive: true
  });
}

// Connect browserSync and watch files for changes
function watch() {
  php.server({
    base: './src/',
    port: 8000,
    keepalive: true
  }, function() {
    browserSync.init({
      server: {
        proxy: 'localhost:8000',
        baseDir: './src/'
      },
      open: false
    });
  });
  gulp.watch('./src/assets/stylesheets/scss/**/*.scss', series(cleanStyle, compileStyle));
  // gulp.watch('./src/layouts/*.php').on('change', browserSync.reload);
  // gulp.watch('./src/partials/*.php').on('change', browserSync.reload);
  // gulp.watch('./src/views/**/*.php').on('change', browserSync.reload);
  gulp.watch('./src/**/*').on('change', function() {
    browserSync.reload();
  });
  // Reload doesn't currently work
}

// exports.watch = watch;
exports.default = series(cleanStyle, compileStyle, watch);