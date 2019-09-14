// Initialize modules
var gulp = require('gulp');
var sass = require('gulp-sass');

// Sass task: compiles the style.scss file into style.css
gulp.task('sass', function(){
    return gulp.src('scss/*.scss')
        .pipe(sass()) // compile SCSS to CSS
        .pipe(gulp.dest('css')); // put final CSS in dist folder
});

// Watch task: watch SCSS and JS files for changes
gulp.task('watch', function(){
    gulp.watch('scss/*.scss', gulp.series('sass'));
});

// Default task
gulp.task('default', gulp.series('sass', 'watch'));