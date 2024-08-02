var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    cleanCSS = require('gulp-clean-css'),
    rev = require('gulp-rev'),
    del = require('del'),
    parseArgs = require('minimist'),
    sourcemaps = require('gulp-sourcemaps'),
    gulpif = require('gulp-if'),
    importFresh = require('import-fresh'),
    sassGlob = require('gulp-sass-glob'),
    autoprefixer = require('autoprefixer'),
    postcss = require('gulp-postcss'),
    sassVariables = require('gulp-sass-variables'),
    babel = require('gulp-babel');

var config = {
    assetsDir: './assets',
    cssDir: './assets/css',
    jsDir: './assets/js',
    sassPattern: './_include/sass/*.scss',
    scriptSources: './_include/scripts/source.js',
    production: !!parseArgs(process.argv)['production'],
    sourceMaps: !parseArgs(process.argv)['production'],
    // revManifestPath: './assets/rev-manifest.json',
    en: !!parseArgs(process.argv)['en'],
    nodeModule: ['./node_modules'],
    productionUrl: '',
    productionUrlEn: ''
};

// Compile Sass files into /css
gulp.task('sass', function(done) {
    if (config.production && config.en) {
        del.sync([config.productionUrlEn + config.cssDir + '/*'], {force: true});
    } else if (config.production){
        del.sync([config.productionUrl + config.cssDir + '/*'], {force: true});
    } else {
        del.sync([config.cssDir + '/*'], {force: true});
    }

    var stream = gulp.src(config.sassPattern)
        .pipe(sassVariables({
            $dir: config.en ? 'ltr' : 'rtl'
        }))
        .pipe(gulpif(config.sourceMaps, sourcemaps.init()))
        .pipe(sassGlob())
        .pipe(sass({style: 'compressed', includePaths: config.nodeModule}))
        .on('error', sass.logError)
        .pipe(postcss([ autoprefixer() ]))
        .pipe(cleanCSS({ compatibility: 'ie8' ,level: {1: {specialComments: 0}}}))
        // .pipe(rev())
        .pipe(gulpif(config.sourceMaps, sourcemaps.write('.')));

    if (config.production && config.en) {
        stream = stream
            .pipe(gulp.dest(config.productionUrlEn + config.cssDir));
            // .pipe(rev.manifest(config.productionUrlEn + config.revManifestPath,{base: config.productionUrlEn + config.assetsDir, merge: true}))
            // .pipe(gulp.dest(config.productionUrlEn + config.assetsDir));
    } else if (config.production){
        stream = stream
            .pipe(gulp.dest(config.productionUrl + config.cssDir));
            //.pipe(rev.manifest(config.productionUrl + config.revManifestPath,{base: config.productionUrl + config.assetsDir, merge: true}))
            //.pipe(gulp.dest(config.productionUrl + config.assetsDir));
    } else {
        stream = stream
            .pipe(gulp.dest(config.cssDir));
            //.pipe(rev.manifest(config.revManifestPath,{base: config.assetsDir, merge: true}))
            //.pipe(gulp.dest(config.assetsDir));
    }

    return stream;
});

// Minify compiled Js
gulp.task('js', function(done) {
    var sourceFile = importFresh(config.scriptSources);

    if (config.production && config.en) {
        del.sync([config.productionUrlEn + config.jsDir + '/*'], {force: true});
    } else if (config.production) {
        del.sync([config.productionUrl + config.jsDir + '/*'], {force: true});
    } else {
        del.sync([config.jsDir + '/*'], {force: true});
    }

    var stream = gulp.src(gulpif(config.en, sourceFile.jsEn, sourceFile.js))
        .pipe(gulpif(config.sourceMaps, sourcemaps.init()))
        .pipe(babel({presets: ['@babel/env'], ignore: config.nodeModule, compact: false}))
        .pipe(concat('script.js'))
        .pipe(uglify())
        //.pipe(rev())
        .pipe(gulpif(config.sourceMaps, sourcemaps.write('.')));

    if (config.production && config.en) {
        stream = stream
            .pipe(gulp.dest(config.productionUrlEn + config.jsDir));
            ///.pipe(rev.manifest(config.productionUrlEn + config.revManifestPath,{base: config.productionUrlEn + config.assetsDir, merge: true}))
            //.pipe(gulp.dest(config.productionUrlEn + config.assetsDir));
    } else if (config.production){
        stream = stream
            .pipe(gulp.dest(config.productionUrl + config.jsDir));
            //.pipe(rev.manifest(config.productionUrl + config.revManifestPath,{base: config.productionUrl + config.assetsDir, merge: true}))
            //.pipe(gulp.dest(config.productionUrl + config.assetsDir));
    } else {
        stream = stream
            .pipe(gulp.dest(config.jsDir));
            //.pipe(rev.manifest(config.revManifestPath,{base: config.assetsDir, merge: true}))
            //.pipe(gulp.dest(config.assetsDir));
    }

    return stream;
});

// Dev task with browserSync
gulp.task('watch', function(done) {
    gulp.watch('_include/sass/**/*.scss', gulp.parallel('sass'));
    gulp.watch('_include/scripts/**/*.js', gulp.parallel('js'));
    done();
});

// Run everything
gulp.task('default', gulp.series(gulp.parallel('sass', 'js', 'watch')));
gulp.task('all', gulp.series(gulp.parallel('sass', 'js')));
