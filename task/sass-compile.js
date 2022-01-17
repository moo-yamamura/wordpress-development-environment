import gulp from 'gulp';
import { path } from './path.js'; // ファイルパス
import dartSass from 'gulp-dart-sass'; // sassコンパイル
import autoprefixer from 'gulp-autoprefixer'; // ベンダープレフィックス付与
import sourcemaps from 'gulp-sourcemaps'; // ソースマップ出力
import notify from 'gulp-notify';  // エラー通知
import plumber from 'gulp-plumber'; // エラー時のタスク停止防止
import sassGlob from 'gulp-sass-glob-use-forward'; // @use,@forward一括読み込み
// モード切替
import module from 'module';
const require = module.createRequire(import.meta.url);
const mode = require('gulp-mode')({
  modes: ['production', 'development'],
  default: 'development',
  verbose: false
});

//
// task
//////////////////////////////////////////////////////////////////////
const sassCompile = done => {
  gulp.src(path.scss.src)
    .pipe(plumber({
      errorHandler: notify.onError(`
❌ Sass Compile Error
<%= error.message %>`)
    }))
    .pipe(sassGlob())
    .pipe(mode.development(
      sourcemaps.init()
    ))
    .pipe(mode.development(
      dartSass({outputStyle: 'expanded'})
    ))
    .pipe(mode.production(
      dartSass({outputStyle: 'compressed'})
    ))
    .pipe(autoprefixer({
      cascade: true
    }))
    .pipe(mode.development(
      sourcemaps.write('/maps')
    ))
    .pipe(gulp.dest(
      path.scss.dest
    ))

  done();
};

export default sassCompile;