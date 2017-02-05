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
define('DB_NAME', 'cp84741_1');

/** Имя пользователя MySQL */
define('DB_USER', 'cp84741_1');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'vlados228');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')%A,HGe{9iNFhp2w4*U5+n.=3ywE( 3Y>7bY3yCC6k77=6{1+MYLEDPm7 qs(IJ9');
define('SECURE_AUTH_KEY',  '=4mrlZ%j{I)TQ!KdKa~y5{@lbE$?Ab;?4+zNZMORS!EC0n6[x&]{fvmY>@_{SR3l');
define('LOGGED_IN_KEY',    'Pu>P*Z_])s,xk?Np`} ax!XFb40`^(~E2`2$KC6*9svk?[D&crca5WHhiD3~G4B`');
define('NONCE_KEY',        '&#hX?oy5WY<+qp99L>9N9m~Eavt}n8ovG`{>Ag(RlW*BL-Zmj)d_Fz0vww|YONT2');
define('AUTH_SALT',        '|jO8c_**~{>H!7Mj-asiP:L[3oQ!Q!ODTDHMb:Sh_13qOUzc`lk,pbgmnmeu?8es');
define('SECURE_AUTH_SALT', 'QY2m!o0y)4sjAcrzLUsoGuz-=UBKvl3}$7*jZB/ich639g|NgdbVg$Jz-v+;;PZ$');
define('LOGGED_IN_SALT',   '.ucLKaW)UA~,~{Tf2.Gr:J;B$x)gl*pqWJ;bv&G4O,^#X,ul8gP/RBxHB6ZWB$[!');
define('NONCE_SALT',       ' {:4xkZ5E~0T?BSDU]9MKyc9yF,B2Bp3NngFRhG izIfPegD!y<G$UHH8Z`UxaHT');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
