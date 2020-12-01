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
define( 'DB_NAME', 'couponadmin' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'couponadmin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'aXYEEYSqmmJYBqVY' );

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
define( 'AUTH_KEY',         'QB.&IkO,Np*AfF+ywAs%*6G:r=50e%[fM!Sdt)aZ^+$EyUnD]t}I-hbj{J)DrKgt' );
define( 'SECURE_AUTH_KEY',  'A+r8zS`O{6&$?At6FR[9nxj}5: 2x1nE> (EsjI>>OIKx66 ?x<zx0V^du&qp&O$' );
define( 'LOGGED_IN_KEY',    '0fNq.w~]diD>lsSGMt?_[h6qGzr7>eC>#=1.hEmppxZ>GW (}t=qff2>6a}P-GP;' );
define( 'NONCE_KEY',        ')m&F{[u*-C(%IYt/`m[9^1EO0>ic6uETJlZzy%I^)KI1`3C!6)H8_Q!W96Xi>%qT' );
define( 'AUTH_SALT',        'ji!4@!P^+>HvZkkprg( g&]nx|dJN[%S|1,8+!Hc+n|gqBlfeVABW@<eq^VdD&I3' );
define( 'SECURE_AUTH_SALT', '5V{V*Cu+@aBo$=x*njwv= :jHC7pb2]Cn*{I$%s6,^JFa?:uVrGhd| TZV2}#}!<' );
define( 'LOGGED_IN_SALT',   'GjP-]0bs3p(8</-R%C-DFWE%3-P &2Vu;`PMGGj3yKIL*X~X|TlP)7t<zpGF>;<C' );
define( 'NONCE_SALT',       '<jP#2l#r#194nG)G}4}TWW8< %#cebywKS`K|g[hMy+Q5F}4zQq7[iC/s+i`u@)T' );

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
