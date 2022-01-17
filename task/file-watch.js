import gulp from 'gulp';
import { path } from './path.js'; // ファイルパス
import watch from 'gulp-watch'; // ファイル監視
import sassCompile from './sass-compile.js'; // sassコンパイル
import javascriptLint from './javascript-lint.js'; // javascriptコードチェック
import javascriptCompile from './javascript-compile.js'; // javascriptコンパイル
import javascriptBundle from './javascript-bundle.js'; // javascriptバンドル
import staticDest from './static-dest.js'; // 静的ファイル出力（画像圧縮）

//
// task
//////////////////////////////////////////////////////////////////////
const fileWatch = (done) => {
  watch(path.scss.src,gulp.series(sassCompile));

  watch(path.js.src,
    gulp.series(
      gulp.parallel(
        javascriptLint,
        javascriptCompile,
        javascriptBundle
      )
    )
  );
  
  watch(path.file.static, gulp.series(staticDest));

  done();
};

export default fileWatch;