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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ft_server' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-qmQ7Hft&M^`&l[u|.@eg#096_-,cR|]JwY2BOa0Ne[r_x+X~sO*Dg -Y7a7^qPH');
define('SECURE_AUTH_KEY',  'P7~UXaP=N>@94#8$:&N*|6 xK}T&4U=62|{5,i|a^M`gs.fI.yIeQOCKaw`DGon4');
define('LOGGED_IN_KEY',    'G_@WaRJ|I**@f5I)m_9RZ|R0$6_2|y&XHEXg{loq6+(2L~jagN$Kt;!REoW--oq(');
define('NONCE_KEY',        '>wk9l9O))>4ELS/G2po(+`3XD.1^|tJU.f.0cs*S^!ssJ0`a!uk4Vr)fgjd&ke|U');
define('AUTH_SALT',        'N+j5lHPrn69NmeKY4~d|O7~sD6,yXh2&Jw`]eu{c{a*1~RH=}mS5WYn{_6h`U~!,');
define('SECURE_AUTH_SALT', '-,9;Sc=<@-.IdT,AXL4+yrDU6_i^g`BWtYSyzP|aG_wH+ K*!9|oWt3u.-QwCVaA');
define('LOGGED_IN_SALT',   'k^&ETS2-4t:.E4n&I@WPL$_<8|dX;y^T~6<{xm)Q[ub;f%vx+[Gf|Q`|!d(`Q%5t');
define('NONCE_SALT',       'ixqVs<jzn3.~S: --T~PQoW&-9Fly?|d0@VfU%dkaDl`,.?{x<vr:;c]<MvQG9:{');

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
