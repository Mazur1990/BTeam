var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

// gulp.task('default', ['sass', 'watch', 'browser-sync']);


gulp.task('sass', done => {
  return gulp.src('./scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./build/'))
    .pipe(browserSync.stream())
    done();
});


gulp.task('watch', function(){
  gulp.watch('scss/**/*.scss', gulp.series('sass'));
  browserSync.reload();
});

gulp.task('browser-sync', () => {
  browserSync.init({
    proxy: 'http://localhost/BTeam_rev2/'
  });

  gulp.watch('**/*.php').on("change", reload);
  gulp.watch('**/*.css').on("change", reload);

});

gulp.task('default', gulp.parallel(
        'sass',
        'watch',
        'browser-sync'
  )
);