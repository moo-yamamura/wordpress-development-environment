import gulp from 'gulp'; // gulp
import sassCompile from './task/sass-compile.js'; // sassコンパイル
import javascriptLint from './task/javascript-lint.js'; // javascriptコードチェック
import javascriptCompile from './task/javascript-compile.js'; // javascriptコンパイル
import javascriptBundle from './task/javascript-bundle.js'; // javascriptバンドル
import javascriptBundleMinify from './task/javascript-bundle-minify.js'; // javascript圧縮（バンドル）
import staticDest from './task/static-dest.js'; // 静的ファイル出力（画像圧縮）
import localServer from './task/local-server.js'; // ローカルサーバー
import fileClean from './task/file-clean.js'; // ビルドファイル削除
import fileWatch from './task/file-watch.js'; // ファイル監視

//
// task
//////////////////////////////////////////////////////////////////////
export const build = gulp.series(
  gulp.parallel(
    sassCompile,
    javascriptLint,
    javascriptCompile,
    javascriptBundle,
    staticDest
  )
);
// single task
export {
  sassCompile,
  javascriptLint,
  javascriptCompile,
  javascriptBundle,
  javascriptBundleMinify,
  staticDest,
  localServer,
  fileClean,
  fileWatch
};