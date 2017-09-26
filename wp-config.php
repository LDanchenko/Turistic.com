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
define('DB_NAME', 'wordpress_loft');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'C9@dQ8|K[SG<Wwpp/y,G]]nG+5!&]?x!/5a{7:<IxUIA!ege:ngHzF$mUxiJt@**');
define('SECURE_AUTH_KEY',  '!U.]xGJoWp9`Dd3ok*Ul)%$V-me:x/]o}m[CYB>0& Og?{:,#tj^<&1pg X!z+U.');
define('LOGGED_IN_KEY',    '4qzzU~;0cO]W0Jzg]=Ue>ZxdL_/.|}!U4ZyS${mG{d+hd:[_B;xN+0~6ht]LgDI%');
define('NONCE_KEY',        'zXMsr]BsxH]U`c,_($kT;*iqWo|JD`s-ZuHs(TXyR-q73q>)!Pk1^Q)(tpkTOLQU');
define('AUTH_SALT',        'ba-d5>UFo@@F`#o!bfF7.>h3[Vq3vN!2yNy R^7stdj,)t}U8;f}&,*(bA?kb9BT');
define('SECURE_AUTH_SALT', 'Z7~<;FT$.q2$}iO2XMAA7h+emE5w{*#K]nkaQ3h`]iM5qrRM`tmOAL^>uUYIRY}q');
define('LOGGED_IN_SALT',   'V&z`I7&PrbaDJFmv*]6R%~v|as&t8sCyu7~i[dp3%rB11huCim~R-^izPyWww9?.');
define('NONCE_SALT',       ':+Z=k2q=g!nPI$W%)2$6:ittM.tUo*5fGOXCdp5y60a:>it08gi9N/$Q,yKaAc=u');

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

define('FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
