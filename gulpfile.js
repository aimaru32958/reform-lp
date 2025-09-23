// 「gulp」
const gulp = require("gulp");
// 「sass を css にコンパイル」
const sass = require("gulp-sass")(require("sass"));
// 「自動的にベンダープレフィックスを追加」「cssをソート」
const postcss = require("gulp-postcss");
// 「自動的にベンダープレフィックスを追加」
const autoprefixer = require("autoprefixer");
// 「cssをソート」
const cssSorter = require("css-declaration-sorter");
// 「メディアクエリ コンパイル時にまとめられる」
const mmq = require("gulp-merge-media-queries");
//  「ブラウザの立ち上げ」「変更を検知し、リロードする」
const browserSync = require("browser-sync");
// 「cssの圧縮処理」
const cleanCss = require("gulp-clean-css");
// 「jsの圧縮処理」
const uglify = require("gulp-uglify");
// 「コンパイル後の名称変更」
const rename = require("gulp-rename");
// 「html を 整理」
const htmlBeautify = require("gulp-html-beautify");


function test(done){
    console.log('Hello Gulp');
    done();
}

// 「sassをコンパイル」
function compileSass(){
    return gulp.src("./src/sass/**/*.scss")
    // ここにコンパイルの処理を記載する
    .pipe(sass())                                      // 「sass を css にコンパイル」
    // .pipe(postcss([autoprefixer(),cssSorter()]))    // 「自動的にベンダープレフィックスを追加」「cssをソート」
    .pipe(postcss([autoprefixer()]))                   // 「自動的にベンダープレフィックスを追加」のみ有効にする
    .pipe(mmq())                                       // 「メディアクエリ コンパイル時にまとめられる」
    .pipe(gulp.dest("./assets/css/"))                 // 「コンパイル先指定」
    .pipe(cleanCss())                                  // 「cssの圧縮処理」
    .pipe(rename({                                     // 「名称変更」
        suffix:".min"
    }))
    .pipe(gulp.dest("./assets/css/"))                 //「コンパイル先指定」
}


// 「各ファイルの編集を検知し、「コンパイル」と「リロード」」
function watch() {
    gulp.watch("./src/sass/**/*.scss" , gulp.series(compileSass,browserReload));
    gulp.watch("./src/js/**/*.js" , gulp.series(minJs,browserReload));
    gulp.watch("./src/img/**/*" , gulp.series(copyImage,browserReload));
    gulp.watch("./*.html" , gulp.series(browserReload));
    gulp.watch("./*.php" , gulp.series(browserReload));
}

//「ブラウザの立ち上げ」「変更を検知し、リロードする」
function browserInit(done) {
    browserSync.init({
        proxy:"http://reform-lp.local/"
    });
    done();
}

//「リロード」
function browserReload(done) {
    browserSync.reload();
    done();
}

// 「jsをコンパイル,jsの圧縮ファイル生成」
function minJs() {
    return gulp.src("./src/js/**/*.js")
    .pipe(gulp.dest("./assets/js/"))    // 複製（通常コンパイル）
    // ここにコンパイルの処理を記載する
    .pipe(uglify())                      // 圧縮処理
    .pipe(rename({                       // 名称変更
        suffix:".min"
    }))                                  
    .pipe(gulp.dest("./assets/js/"))    // コンパイル先指定
}

// 「imgデータの複製」
function copyImage() {
    return gulp.src("./src/img/**/*")
    // 
    .pipe(gulp.dest("./assets/img/"))  // 複製
}

exports.test = test ;
exports.compileSass = compileSass ;
exports.watch = watch ;
exports.browserInit = browserInit ;
exports.dev = gulp.parallel(browserInit,watch) ;
exports.minJs = minJs ;
exports.copyImage = copyImage ;
exports.build = gulp.parallel(compileSass,minJs,copyImage);