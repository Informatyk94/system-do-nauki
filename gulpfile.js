//Deklaracja zmiennych
var sass = require('gulp-sass');
var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var runSequence = require('run-sequence');

//Definicja tasków
gulp.task('sass', () => {
    return gulp.src('resources/assets/sass/**/*.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

//Definicja tasków
gulp.task('watch', ['browserSync', 'sass'], () => {
    gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
});



//Definicja tasków
gulp.task('browserSync', function () {
    browserSync.init({
        server: {
            baseDir: 'app'
        },
    })
});



//Definicja tasków
gulp.task('default', function (callback) {
    runSequence(['watch', 'sass', 'browserSync'],
        callback
    )
})

//Definicja tasków
gulp.task('build', function (callback) {
    runSequence('clean:dist', ['default', 'images', 'fonts'], 'useref', 'scripts',
        callback)
})
