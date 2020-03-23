<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!mJJkU)3mv3OL%S[!_/7r?NbexqralcJ%0|;BOO=h +]!([/gFnh7v0P]Uwtnm$Y' );
define( 'SECURE_AUTH_KEY',  'sj(ah,PZ%[pOj^IRdW}XPANMd::: &DU/>lLU4[QF5{H;b-Yg-<Q)1{Q:SB Fau<' );
define( 'LOGGED_IN_KEY',    'P?tcX@p#dGtYfl;pOxLaO>1)4}DnzV{LUWi[ZB~U&HMJ)M,kK5Prh*N]@u~sAU}?' );
define( 'NONCE_KEY',        'V`BAfS|=?l@k9;8b`CwMlt|w$szHXw(nB;j.s=8{V>CqTzrKRj^J]2H-$y13F:/J' );
define( 'AUTH_SALT',        '.Ha&]oq}..hdbJ.Kx%K)>~+cg$:L4%S9tpXYb1U(S DO&o_@#<E-%5+loEI~w+4-' );
define( 'SECURE_AUTH_SALT', '9ez~P)^y8b+-D],ihm^8MBX:h5/FckS19RRRmWHL@Bl&&9pbn=Rm7?Cb6pOd~Q{E' );
define( 'LOGGED_IN_SALT',   'J=GL!dk,h%k^bmSV5yzc<A4Er %%7~wz%vVaANIOD6cQ=&5e|^~#*sC.={Bku_B5' );
define( 'NONCE_SALT',       'oqy}~oSu=tMM|:bvj`*W^3#q,ma9qZBK~xG:]r<y`*i(=r<Y4bnb bG(=W.xy4K@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
