const gulp         = require('gulp'),
      sass         = require('gulp-sass'),
      rename       = require('gulp-rename'),
      php          = require('gulp-connect-php'),
      clean        = require('gulp-clean'),
      jshint       = require('gulp-jshint'),
      stylish      = require('jshint-stylish'),
      terser       = require('gulp-terser'),
      concat       = require('gulp-concat'),
      autoprefixer = require('gulp-autoprefixer'),
      cleanCSS     = require('gulp-clean-css'),
      fileChecksum = require('gulp-file-checksum'),
      sort         = require('gulp-sort'),
      browserSync  = require('browser-sync').create();

const { series, parallel, dest } = require('gulp');

var paths = {
  source: './src/',
  scss: './src/assets/stylesheets/scss/',
  stylesheets: './src/assets/stylesheets/',
  customJS: './src/assets/javascripts/custom/',
  libs: './src/assets/javascripts/libs/',
  javascripts: './src/assets/javascripts/'
};

// Delete old css file
function cleanStyle() {
  return gulp.src(paths.stylesheets + 'application.min.css', {read: false, allowEmpty: true})
    .pipe(clean());
}

// Compile SCSS into CSS
function compileStyle() {  
  return gulp.src(paths.scss + 'application.scss')
    .pipe(sass().on('error', sass.logError))          // Compile SCSS into CSS
    .pipe(autoprefixer())                             // Run autoprefixer on CSS
    .pipe(cleanCSS({debug: true}, function(details) { // Minify CSS
      console.log(details.name + ' Original size: ' + details.stats.originalSize / 1000 + 'kB');
      console.log(details.name + ' Minified size: ' + details.stats.minifiedSize / 1000 + 'kB');
    }))
    .pipe(rename('application.min.css')) // Rename CSS file
    .pipe(gulp.dest(paths.stylesheets))               // Save CSS file
    .pipe(browserSync.stream());
}

// Checksum CSS
function checksumStyle() {
  return gulp.src(paths.stylesheets + 'application.min.css')
    .pipe(fileChecksum({
      template: '{md5}',
      output: 'css_hash.cfg'
    }))
    .pipe(gulp.dest(paths.source + 'libs'));
}

// Delete old js file
function cleanScripts() {
  return gulp.src(paths.javascripts + 'application.min.js', {read: false, allowEmpty: true})
    .pipe(clean());
}

// Check Javascripts
function lintScripts() {
  return gulp.src(paths.javascripts + '**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
}

// Compile Coffee into JS
function compileScripts() {
  // return gulp.src(paths.javascripts + '**/*.js')
  return gulp.src([paths.libs + 'utilities.js', paths.libs + 'cookie.js', paths.libs + 'howler.min.js', paths.libs + 'helpers.js', paths.libs + 'browser-interaction-timer.js', paths.customJS + '**/*.js'])
    // .pipe(sort())
    .pipe(terser({
      format: {
        comments: false
      }
    }))
    .pipe(concat('application.min.js'))
    .pipe(gulp.dest(paths.javascripts));
}

// Checksum JS
function checksumScripts() {
  return gulp.src(paths.javascripts + 'application.min.js')
    .pipe(fileChecksum({
      template: '{md5}',
      output: 'js_hash.cfg'
    }))
    .pipe(gulp.dest(paths.source + 'libs'));
}

function reload(done) {
  browserSync.reload();
  done();
}

// Connect browserSync and watch files for changes
function server() {
  php.server({
    base: paths.source
  }, function() {
    browserSync.init({
      proxy: '127.0.0.1:8000',
      open: false
    });
  });
  gulp.watch(paths.scss + '**/*.scss', series(cleanStyle, compileStyle, checksumStyle));
  gulp.watch(paths.coffee + '**/*.coffee', series(cleanScripts, lintScripts, compileScripts, checksumScripts));
  gulp.watch([paths.javascripts + '**/*.js', '!' + paths.javascripts + 'application.min.js'], series(cleanScripts, lintScripts, compileScripts, checksumScripts));
  // gulp.watch(paths.libs + '**/*.js', series(cleanScripts, lintScripts, compileScripts, checksumScripts));
  // Auto reload doesn't currently work (only refreshes once, browsersync disconnecs afterwards)
  // gulp.watch('./src/layouts/*.php').on('change', reload);
  // gulp.watch('./src/partials/*.php').on('change', reload);
  // gulp.watch('./src/views/**/*.php').on('change', reload);
  // gulp.watch('./src/views/**/*.php', reload);
}

// exports.watch = watch;
exports.default = series(cleanStyle, compileStyle, checksumStyle, cleanScripts, lintScripts, compileScripts, checksumScripts, server);