var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var reload = browserSync.reload;

gulp.task('hello', function() {
  console.log('Hello Goldwyn');
});

gulp.task('sass', function() {
  return gulp.src('src/scss/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(sass())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('watch', ['sass'], function() {
  browserSync.init({
    files: ['./**/*.php'],
    proxy: 'http://localhost:8888/wp-boilerplate',
    watchTask: true,
    port: 3000,
    reloadOnRestart: false,
  });
  gulp.watch('src/scss/**/*.scss', ['sass']);
  gulp.watch('src/js/**/*.js', browserSync.reload);
  gulp.watch('src/img/**/*.+(png|jpg|gif|svg)', ['images', reload]);
  gulp.watch('./*.php');
});



gulp.task('useref', function(){
  return gulp.src('./*.html')
    .pipe(useref())
    // Minifies only if it's a JavaScript file
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulp.dest('dist'))
    // Minifies only if it's a CSS file
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('dist'))
});

gulp.task('images', function(){
  return gulp.src('src/img/**/*.+(png|jpg|gif|svg)')
  .pipe(imagemin())
  .pipe(gulp.dest('dist/src/img'))
});

gulp.task('fonts', function() {
  return gulp.src('src/fonts/**/*')
  .pipe(gulp.dest('dist/src/fonts'))
})
