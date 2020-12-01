const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');

const styles = () => {
    return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./')); 
} 
exports.styles = styles

const watch = () => {
    // gulp.watch('src/*.html', gulp.series(html, paths));
    gulp.watch('./scss/**/*.scss', gulp.series(styles));
    // gulp.watch('src/scripts/**/*.js', gulp.series(scripts));
    // gulp.watch([
    //     'src/fonts/**/*',
    //     'src/images/**/*',
    // ], gulp.series(copy));
};
exports.watch = watch;

 
// gulp.task('sass:watch', function () {
//   gulp.watch('./styles/**/*.scss', ['sass']);
// });

exports.default = gulp.series(gulp.parallel(watch))

