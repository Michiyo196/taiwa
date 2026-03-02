<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_taiwa' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rfwqw.fJg:VUD,]Dz/Omr7`e],CK,: <)T;=e:uv]i~Y0;CS6nd!*-pX[:{`sJPm' );
define( 'SECURE_AUTH_KEY',  'pYs$6BD=r3un,_<d&4U;1-7*;=&VZV3LS:P8b<N<CM^|Kf%07q/1]lzx1Zz#RX~k' );
define( 'LOGGED_IN_KEY',    '!?#GOO?hg4S1:Vw#1sqMaSmFt{6v,^B%$kh8V=uU>Awc,k0ijD0Q@;=Yi)*hVxaw' );
define( 'NONCE_KEY',        ']u`(E!hG4 :(0enukzSRW.ZB+t3[oKz;U93um3:H@:1{a;r4t+2!]kO4ynoo{MhB' );
define( 'AUTH_SALT',        '3oMH:u)fMJQQHL~uk`E6|>&p<)r~KmGH&j2dW{QF1KnPmce#2*Q sXl)q3cNnzP_' );
define( 'SECURE_AUTH_SALT', '9$p-rzagRh3%Ao9Kx)U}!Wo1yGQC[c.X?1^qLo|2{IX@N;0*^-*B(;xO{R_>BDpf' );
define( 'LOGGED_IN_SALT',   '=*]PQ_3ND&2&;gG)*^fijVea>4u9v x}J,lGsD:KU3F#BLKO,cW5%*{U?_c_BOCY' );
define( 'NONCE_SALT',       '*@TK<>Q@3;Agb*K,|mrI)(:g6X)ki,Vm6g{tHOCkO#rl?|2IT(eScc*m0dO3qM/b' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
