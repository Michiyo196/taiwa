var gulp = require('gulp');
var sass = require('gulp-sass'); //Sassコンパイル
var plumber = require('gulp-plumber'); //エラー時の強制終了を防止
var notify = require('gulp-notify'); //エラー発生時にデスクトップ通知する
var sassGlob = require('gulp-sass-glob'); //@importの記述を簡潔にする
var browserSync = require('browser-sync'); //ブラウザ反映
var postcss = require('gulp-postcss'); //autoprefixerとセット
var autoprefixer = require('autoprefixer'); //ベンダープレフィックス付与
var cssdeclsort = require('css-declaration-sorter'); //css並べ替え
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var imageminJpg = require('imagemin-jpeg-recompress');
var imageminPng = require('imagemin-pngquant');
var imageminGif = require('imagemin-gifsicle');
var svgmin = require('gulp-svgmin');
var ejs = require("gulp-ejs");
var rename = require("gulp-rename"); //.ejsの拡張子を変更

// scssのコンパイル
gulp.task('sass', function () {
  return gulp
    .src('./wp/wp-content/themes/taiwa/sass/**/*.scss', { sourcemaps: true })
    .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))//エラーチェック
    .pipe(sassGlob())//importの読み込みを簡潔にする
    .pipe(sass({
      outputStyle: 'expanded' //expanded, nested, campact, compressedから選択
    }))

    .pipe(postcss([autoprefixer(
      {
        // ☆IEは11以上、Androidは4.4以上
        // その他は最新2バージョンで必要なベンダープレフィックスを付与する
        "overrideBrowserslist": ["last 2 versions", "ie >= 11", "Android >= 4"],
        cascade: false
      }
    )]))

    .pipe(gulp.dest('./wp/wp-content/themes/taiwa/css', { sourcemaps: './maps' }));//コンパイル後の出力先
});

// 保存時のリロード
gulp.task('browser-sync', function (done) {
  browserSync.init({

    //ローカル開発
    server: {
      baseDir: "./",
      index: "index.html"
    }
  });
  done();
});

gulp.task('bs-reload', function (done) {
  browserSync.reload();
  done();
});



// 監視
gulp.task('watch', function (done) {
  gulp.watch('./wp/wp-content/themes/taiwa/sass/**/*.scss', gulp.task('sass')); //sassが更新されたらgulp sassを実行
  gulp.watch('./wp/wp-content/themes/taiwa/sass/**/*.scss', gulp.task('bs-reload')); //sassが更新されたらbs-reloadを実行
  gulp.watch('./**/*.*', gulp.task('bs-reload'));
});

// default
gulp.task('default', gulp.series(gulp.parallel('browser-sync', 'watch')));

gulp.task('imagemin', function () {
  // jpeg,png,gif
  gulp
    .src('./images_moto/**/*.+(jpg|jpeg|png|gif)') // 1
    .pipe(changed('./wp/wp-content/themes/taiwa/')) // 2
    .pipe(imagemin([ // 3
      imageminPng(),
      imageminJpg(),
      imageminGif({
        interlaced: false,
        optimizationLevel: 3,
        colors: 180
      })
    ]))
    .pipe(gulp.dest('./wp/wp-content/themes/taiwa/'));
  // svg
  return gulp
    .src('./images_moto/**/*.+(svg)') // 4
    .pipe(changed('./wp/wp-content/themes/taiwa/'))
    .pipe(svgmin()) // 5
    .pipe(gulp.dest('./wp/wp-content/themes/taiwa/'));
});


