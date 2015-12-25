var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// Run all tasks...
// $ gulp
// Run all tasks and minify all CSS and JavaScript...
// $ gulp --production
// Run a script in the terminal that watches for changes in the resource files and updates the outputs accordingly
// $ gulp watch
// Call a gulp task from elixir
// elixir(function(mix) {
//     mix.task('speak');
// });

// Minify SASS example (elixir)
elixir(function(mix) {
    mix.sass('app.scss');
});


// Minify CSS example (elexir)
//Combine passed CSS into one. CSS relative path is taken from resources/assets/css
//The default output filename and path is public/css/all.css
//To modify the output path pass it as the 2nd argument (optional, check the example)
elixir(function(mix) {
    mix.styles([
        'normalize.css',
        'main.css'
    ], 'public/assets/css');
});

// Minify HTML example, as a gulp task
var gulp = require('gulp');
var htmlmin = require('gulp-htmlmin');

//Example 1: Call this from the cmd line with $ gulp compress
gulp.task('compress', function() {
    return gulp.src('./storage/framework/views/**/*')
        .pipe(htmlmin({
            collapseWhitespace:    true,
            removeAttributeQuotes: true,
            removeComments:        true,
            minifyJS:              true
        }))
        .pipe(gulp.dest('./storage/framework/views/'));
});

//Example 2: $ gulp compress2nd
gulp.task('compress2nd', function() {
    return gulp.src('src/*.html')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dist'))
});
