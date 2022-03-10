import gulp from 'gulp';
import { path } from './path.js'; // ファイルパス
import watch from 'gulp-watch'; // ファイル監視
import browserSync from 'browser-sync'; // ローカルサーバー
import sassCompile from './sass-compile.js'; // sassコンパイル
import javascriptLint from './javascript-lint.js'; // javascriptコードチェック
import javascriptCompile from './javascript-compile.js'; // javascriptコンパイル
import javascriptBundle from './javascript-bundle.js'; // javascriptバンドル
import staticDest from './static-dest.js'; // 静的ファイル出力（画像圧縮）

//
// task
//////////////////////////////////////////////////////////////////////
const browserReload = callback => {
  browserSync.reload();
  callback();
};

const localServer = done => {
  browserSync({
    proxy: 'localhost:8000',
    notify: false, // ブラウザ更新時に出てくる通知を非表示にする
    open: 'external', // ローカルIPアドレスでサーバを立ち上げる
  });

  watch(path.scss.src,
    gulp.series(
      sassCompile,
      browserReload
    )
  );

  watch(path.js.src,
    gulp.series(
      javascriptLint,
      javascriptCompile,
      javascriptBundle,
      javascriptBundleMinify,
      browserReload
    )
  );

  watch(path.file.static,
    gulp.series(
      staticDest,
      browserReload
    )
  );

  done();
};

export default localServer;