const gulp         = require('gulp'),
      sass         = require('gulp-sass'),
      rename       = require('gulp-rename'),
      php          = require('gulp-connect-php'),
      clean        = require('gulp-clean'),
      coffee       = require('gulp-coffee'),
      jslint       = require('gulp-jslint'),
      merge2       = require('merge2'),
      gutil        = require('gulp-util'),
      uglify       = require('gulp-uglify-es').default,
      concat       = require('gulp-concat'),
      autoprefixer = require('gulp-autoprefixer'),
      cleanCSS     = require('gulp-clean-css'),
      fs           = require('fs'),
      fileChecksum = require('gulp-file-checksum'),
      sort         = require('gulp-sort'),
      browserSync  = require('browser-sync').create();

const { series, parallel } = require('gulp');

var paths = {
  source: './src/',
  scss: './src/assets/stylesheets/scss/',
  stylesheets: './src/assets/stylesheets/',
  coffee: './src/assets/javascripts/coffee/',
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

// Compile Coffee into JS
function compileScripts() {
  var coffee2go = gulp.src(paths.coffee+'*.coffee').pipe(sort()).pipe(coffee({bare: true}).on('error', gutil.log));
  var js2 = gulp.src(paths.customJS+'*.js').pipe(sort());

  return merge2([coffee2go, js2])
    // .pipe(jslint())
    // .pipe(jslint.reporter('default'))
    .pipe(uglify().on('error', function(e){
        console.log(e);
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
  gulp.watch(paths.coffee + '**/*.coffee', series(cleanScripts, compileScripts, checksumScripts));
  gulp.watch(paths.customJS + '**/*.js', series(cleanScripts, compileScripts, checksumScripts));
  // Auto reload doesn't currently work (only refreshes once, browsersync disconnecs afterwards)
  // gulp.watch('./src/layouts/*.php').on('change', reload);
  // gulp.watch('./src/partials/*.php').on('change', reload);
  // gulp.watch('./src/views/**/*.php').on('change', reload);
  // gulp.watch('./src/views/**/*.php', reload);
}

// exports.watch = watch;
exports.default = series(cleanStyle, compileStyle, checksumStyle, cleanScripts, compileScripts, checksumScripts, server);