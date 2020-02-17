//Load Gulp + other packages
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    coffee = require('gulp-coffee'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util'),
    cleanCSS = require('gulp-clean-css'),
    clean = require('gulp-clean'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    coffeeConcat = require('gulp-coffeescript-concat'),
    gulpif = require('gulp-if'),
    concat = require('gulp-concat'),
    connect = require('gulp-connect-php'),
    del = require('del'),
	merge2 = require('merge2');

var paths = {
  source: './src/',
  scss: './src/assets/stylesheets/scss/',
  stylesheets: './src/assets/stylesheets/',
  coffee: './src/assets/javascripts/coffee/',
  customJS: './src/assets/javascripts/custom/',
  libs: './src/assets/javascripts/libs/',
  javascripts: './src/assets/javascripts/'
};

// Default task
gulp.task('default', ['connect-sync', 'clean-css-scripts', 'styles', 'clean-scripts', 'scripts']);

// Start PHP server + browser sync
gulp.task('connect-sync', function() {
  connect.server({
    base: paths.source
  }, function (){
    browserSync({
      proxy: '127.0.0.1:8000',
      open: false
    });
  });
 
  // Reload browser if dist folder is modified
  gulp.watch(paths.source+'**/*').on('change', function () {
    browserSync.reload();
    console.log('Changes detected in source folder. Browser reloading.');
  });
});

// Parse SASS
gulp.task('styles', function() {
  return gulp.src(paths.scss+'application.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS({debug: true}, function(details) {
      console.log(details.name + ' Original size: ' + details.stats.originalSize / 1000 + 'kB');
      console.log(details.name + ' Minified size: ' + details.stats.minifiedSize / 1000 + 'kB');
    }))
    .pipe(rename('application-'+((new Date()).getTime())+'.min.css'))
    .pipe(gulp.dest(paths.stylesheets));
});

// Watch SASS files for changes
gulp.watch(paths.scss+'*', ['clean-css-scripts','styles']);

gulp.task('clean-scripts', function () {
  return gulp.src(paths.javascripts+'/*.min.js', {read: false})
    .pipe(clean());
});

gulp.task('clean-css-scripts', function () {
  return gulp.src(paths.stylesheets+'/application-*.min.css', {read: false})
    .pipe(clean());
});

// Parse Coffeescript
gulp.task('scripts', function() {
  // return gulp.src([paths.libs+'*.js', paths.coffee+'*.coffee'])
  //return gulp.src(paths.coffee+'*.coffee')
  var coffee2go = gulp.src(paths.coffee+'*.coffee').pipe(coffee({bare: true}).on('error', gutil.log));
  var js2 = gulp.src(paths.customJS+'*.js');
	 
  return merge2([coffee2go, js2])
	.pipe(uglify().on('error', function(e){
        console.log(e);
     }))
    .pipe(concat('application-'+((new Date()).getTime())+'.min.js'))
    .pipe(gulp.dest(paths.javascripts));
});

// Watch Coffee files for changes
gulp.watch(paths.coffee+'*', ['scripts']);
gulp.watch(paths.customJS+'*', ['clean-scripts', 'scripts']);
gulp.watch(paths.stylesheets, ['clean-css-scripts', 'scripts']);
gulp.watch(paths.libs+'*', ['scripts']);

gulp.task('build', ['styles', 'clean-css-scripts', 'clean-scripts', 'scripts']);