// Add plugins
var gulp = require('gulp');

// Build
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');

var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var spritesmith = require('gulp.spritesmith');
var imagemin = require('gulp-imagemin');

var browserSync = require('browser-sync').create();

// Deploy
var tar = require('gulp-tar');
var gzip = require('gulp-gzip');
var sftp = require('gulp-sftp');
var ftp = require('gulp-ftp');

// Common
var del = require('del');
var gulpIf = require('gulp-if');
var runSequence = require('run-sequence');
var newer = require('gulp-newer');
var rev = require('gulp-rev');
var revReplace = require('gulp-rev-replace');
var rename = require('gulp-rename');
var combine = require('stream-combiner2').obj;
var debug = require('gulp-debug');

var isDevelopment = !process.env.NODE_ENV || process.env.NODE_ENV == 'development';

// Default task
gulp.task('default', function(){
  console.log("It's alive!!! Chords");
});

// Clean
gulp.task('clean', function(){
  return del('./crablog-wp/**/*');
});

// PHP
gulp.task('php', function(){
  return gulp.src('./src/php/**/*')
    .pipe(gulp.dest('./crablog-wp'));
});

// IMG
gulp.task('img_icon', function(){
  // return gulp.src(['./src/**/*.jpg', './src/**/*.png', './src/**/*.ico', '!src/images/icons/**/*', '!src/images/icons'])
  return gulp.src(['./src/img/icons/**/*'])
    .pipe(imagemin({
      progressive: true,
    }))
    .pipe(gulp.dest('./crablog-wp/img'));
});

gulp.task('img_main', function(){
  // return gulp.src(['./src/**/*.jpg', './src/**/*.png', './src/**/*.ico', '!src/images/icons/**/*', '!src/images/icons'])
  return gulp.src(['./src/img/main/**/*'])
    .pipe(imagemin({
      progressive: true,
    }))
    .pipe(gulp.dest('./crablog-wp'));
});

gulp.task('assets', function(){
  runSequence('img_icon', 'img_main');
});

//Fonts
gulp.task('fonts', function(){
  return gulp.src('./src/fonts/**')
    .pipe(gulp.dest('./crablog-wp/fonts'));
});

// Styles
gulp.task('sass', function(){
  return gulp.src('./src/styles/**/*.scss')
    .pipe(sass({
      includePaths: require('node-normalize-scss').includePaths
    }))
    .pipe(autoprefixer('last 2 versions', '> 1%', 'ie 11'))
    .pipe(gulpIf(!isDevelopment, combine(
      cssnano()
      // rename({suffix: '.min'}) ))
    )))
    .pipe(gulp.dest('./crablog-wp'));
});

// Scripts
gulp.task('scripts', function(){
  return gulp.src('./src/js/**')
    .pipe(gulpIf(!isDevelopment, combine(
      uglify(),
      // rename({suffix: '.min'})
    )))
    .pipe(gulp.dest('./crablog-wp/js'));
});



// complicated tasks
gulp.task('build', function(){
  runSequence('clean', 'php', 'assets', 'fonts', 'sass', 'scripts');
});

gulp.task('watch', function() {
  gulp.watch('./src/php/**/*.php', ['php']);
  gulp.watch('./src/img/**/*.*', ['assets']);
  gulp.watch(['./src/styles/**/*.scss'], ['sass']);
  gulp.watch(['./src/js/**/*.js'], ['scripts']);
})

gulp.task('serve', function(){
  browserSync.init({
    server: './crablog-wp'
  });

  browserSync.watch('./crablog-wp/**/*.*').on('change', browserSync.reload);
});

gulp.task('dev', function(){
  runSequence('build', ['watch', 'serve']);
});

gulp.task('dev_loh', function(){
  runSequence('build', 'watch');
});

// ===================
// DEPLOY TASKS
// ===================

// Make archive
gulp.task('archive', function() {
  return gulp.src('./crablog-wp/**/*')
    // .pipe(del('./archive.tar.gz'))
    .pipe(tar('archive.tar'))
    .pipe(gzip())
    .pipe(gulp.dest('.'))
  });

// Upload files to remote server
gulp.task('ftp', function() {
  return gulp.src("./archive.tar.gz")
    .pipe(ftp({
      host: "home.twinpro.ru",
      user: "twinpro",
      pass: "ip7ZBTB9",
      remotePath: "/mysite"
    }));
});

// gulp.task('sftp', function() {
//   return gulp.src("./archive.tar.gz")
//     .pipe(sftp({
//       host: "home.twinpro.ru",
//       user: "twinpro",
//       pass: "ip7ZBTB9"
//     }));
// });



// }
// );