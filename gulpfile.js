var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('scss', function() {
gulp.src('resources/assets/scss/*.scss')
.pipe(sass().on('error', sass.logError))
.pipe(gulp.dest('public/css/'))
});

gulp.task('watch', function(){
gulp.watch('resources/assets/scss/*.scss', ['scss']);
});

gulp.task('default', ['watch']);
