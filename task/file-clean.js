import { buildDirectory } from './path.js'; // ファイルパス
import del from 'del'; // ファイル削除

//
// task
//////////////////////////////////////////////////////////////////////
const fileClean = (done) => {
  del(`${buildDirectory}/assets/**/*`);
  done();
};

export default fileClean;