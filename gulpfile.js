var version = '2.0.0';


var gulp = require('gulp');

var browserSync = require('browser-sync').create();
const webp = require('gulp-webp');
var sass = require('gulp-sass'),
    sassVariables = require('gulp-sass-variables');
var uglify = require('gulp-uglify');
var pipeline = require('readable-stream').pipeline;
var svgSprite = require('gulp-svg-sprites');
var gih = require("gulp-include-html");
var processhtml = require('gulp-processhtml')
//
var gulpCopy = require('gulp-copy');
var ftp = require('vinyl-ftp');
var rep = require('gulp-replace-image-src');

var assetsDir = 'src/';
var deployDir = '/';

var sourceJSLibs = [
    'node_modules/jquery/dist/jquery.js',
    'node_modules/slick-carousel/slick/slick.js',
    'node_modules/lazyloadxt/dist/*.js',
    'node_modules/sticksy/dist/sticksy.min.js',
    'node_modules/@fancyapps/fancybox/dist/*.js',
    'node_modules/@fancyapps/fancybox/dist/*.css',
    'node_modules/mobile-detect/mobile-detect.js'

];

var sourceSCSSLibs = [
    'node_modules/slick-carousel/slick/slick.scss',
    'node_modules/slick-carousel/slick/slick-theme.scss'
];


gulp.task('sprites', function() {
    return gulp.src('src/images/icons/*.svg')
        .pipe(svgSprite({
            cssFile: "src/sass/_sprite.scss",
            baseSize: 25
        }))
        .pipe(gulp.dest("src/_assets"));
});


gulp.task('compress', function() {
    return pipeline(
        gulp.src('lib/*.js'),
        uglify(),
        gulp.dest('dist')
    );
});




gulp.task('sass_dist', function(done) {
    gulp.src("src/sass/*.scss")
        .pipe(sassVariables({

            $env: 'dist_view'
        }))
        .pipe(sass())

        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());

    done();
});


gulp.task('sass_dev', function(done) {
    gulp.src("src/sass/*.scss")
         .pipe(sassVariables({
            $env: 'development'
        }))
        .pipe(sass())
        .pipe(gulp.dest("src/css"));

    done();
});

gulp.task('serve', function(done) {

    browserSync.init({
        server: "src/"
    });

    gulp.watch(["src/sass/**/*.scss", "src/html/**/*.html"], gulp.series('build-html', 'sass_dev'));

    // gulp.watch(["src/*.html"]).on('change', () => {
    //     browserSync.reload();
    //     done();
    // });

      gulp.watch(["src/css/style.css"]).on('change', () => {
        browserSync.reload();
        done();
    });

    done();
});



gulp.task('webp', () =>
    gulp.src('src/img/*.png')
    .pipe(webp())
    .pipe(gulp.dest('src/img/webp/'))
);


gulp.task('build-html', function() {
    return gulp.src("src/html/**/*.html")
        .pipe(gih({
            'public': "./public/bizapp" + version,
            'version': version,

            baseDir: 'src/html/',
            ignore: 'src/html/partials/'
        }))
        .pipe(gulp.dest("src/"));
});



gulp.task('dist_push', function() {


    var conn = ftp.create({ //www/plrnk.dwtest.ru/
        host: '88.198.11.188',
        user: 'plrnk_dist',
        password: 'W3t8U0j7',
        parallel: 10
        //log:      gutil.log
    });


    var globs = [
        assetsDir + 'img/**',
        assetsDir + 'images/**',
        assetsDir + 'js/**',
        assetsDir + 'libs/**',
        assetsDir + 'fonts/**',
        assetsDir + 'css/**',
        assetsDir + '*.html'
    ];


    return gulp.src(globs, { base: assetsDir, buffer: false })
        .pipe(conn.newer('/')) // only upload newer files
        .pipe(conn.dest(deployDir));

      done();    


});



var desJSLibs = 'src/libs/';
var desSCSSLibs = 'src/sass/libs/'
var flatten = require('gulp-flatten');
var options = [];

gulp.task('copyJSlibs', function() {

    return gulp.src(sourceJSLibs)

        .pipe(gulpCopy(desJSLibs, options))
        .pipe(flatten())
        .pipe(gulp.dest(desJSLibs));

});


gulp.task('copySCSSlibs', function() {

    return gulp.src(sourceSCSSLibs)
        .pipe(gulpCopy(desSCSSLibs, options))
        .pipe(flatten())
        .pipe(gulp.dest(desSCSSLibs));

});

gulp.task('replace', function() {
   return  gulp.src('src/*.html')
    .pipe(rep({
      prependSrc : '/local/dist/images/',
      keepOrigin : false
    }) )
    .pipe(gulp.dest('src/'));

});


//gulp.task('deploy', gulp.series('build-html','sass_dist', 'replace', 'dist_push'));
gulp.task('default', gulp.series('serve'));
gulp.task('libs', gulp.series('copyJSlibs', 'copySCSSlibs'));