var gulp = require('gulp'),
    livereload = require('gulp-livereload');
  	plumber = require( 'gulp-plumber' ),
  	watch = require( 'gulp-watch' ),
  	minifycss = require( 'gulp-minify-css' ),
  	jshint = require( 'gulp-jshint' ),
  	stylish = require( 'jshint-stylish' ),
  	uglify = require( 'gulp-uglify' ),
  	rename = require( 'gulp-rename' ),
  	notify = require( 'gulp-notify' ),
  	include = require( 'gulp-include' ),
  	concat = require('gulp-concat'),
    mainBowerFiles = require('main-bower-files'),
    del = require('del'),
  	sass = require( 'gulp-sass' );

var paths={
  'bower':'bower_components/',
  'lib':'lib/'
}

gulp.task('default', function() {
  // place code for your default task here
});

var onError = function( err ) {
  console.log( 'An error occurred:', err.message );
  this.emit( 'end' );
}

gulp.task('watch', function() {
  livereload.listen({ start: true });

  gulp.watch('./bower.json',['bower-copy']);

  gulp.watch('./scss/**/*.scss', ['scss']);

  gulp.watch(['./js/**/*.js','./js/*.js']).on( 'change', function( file ) {
    livereload.changed( file );
  });

  gulp.watch(['./**/*.php','*.php']).on( 'change', function( file ) {
    livereload.changed( file );
  });

});

gulp.task('js',function(args){
  livereload();
});

gulp.task('scss',function(){
	gulp.src( './scss/theme.scss' )
    .pipe( plumber( { errorHandler: onError } ) )
    .pipe( sass() )
    .pipe( rename('theme.css') )
    .pipe( gulp.dest( '.' ) )
    .pipe( minifycss() )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( gulp.dest( '.' ) )
    .pipe( livereload() );

})

gulp.task("clean", function (cb) {
  return del(['lib/'], cb);
});

gulp.task("bower-copy", ["clean"], function () {
    var bower = {
        "bootstrap": "bootstrap/dist/**/*.{js,map,css,ttf,svg,woff,woff2,eot}",
        "jquery": "jquery/dist/jquery*.{js,map}"
    }

    for (var destinationDir in bower) {
        gulp.src(paths.bower + bower[destinationDir])
          .pipe(gulp.dest(paths.lib + destinationDir));
    }
});
