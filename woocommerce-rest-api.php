<？php
//クライアントライブラリを含める
require_once'class-wc-api-client.php ';

$ Consumer_key = 'ck_fcedaba8f0fcb0fb4ae4f1211a75da72'; //ここに独自のコンシューマキーを追加します
$ Consumer_secret = 'cs_9914968ae9adafd3741c818bf6d704c7'; //ここに独自の消費者シークレットを追加します
$ store_url = 'http：// localhost /'; //接続するストアにホームURLをここに追加します

//クラスを初期化します
$ wc_api = new WC_API_Client（$ Consumer_key、$ Consumer_secret、$ store_url）;
？>
