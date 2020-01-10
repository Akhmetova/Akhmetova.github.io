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
define('DB_NAME', 'u33364_proectpor');

/** Имя пользователя MySQL */
define('DB_USER', 'u33364_vak');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'C.3_Et2Ers');

/** Имя сервера MySQL */
define('DB_HOST', 'u33364.mysql.masterhost.ru');

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
define('AUTH_KEY',         'Zpcp3r]YshXc(*,?Q^.Sm3U~Kh,48{|@guq8?:%fB2:[[H$^6^0wx3EU[.I?[Y:F');
define('SECURE_AUTH_KEY',  'tTEr61Im7]tz!iUXHoD0Yq-_/Z~/>jhh qz5fn{bDWO7g%qv}9w/N UrRW[qz$as');
define('LOGGED_IN_KEY',    'z#:d7B_PgxW*j/KAH}<0qD81.h:io&lmn<uHcDGq:SYRBOR,C>o s&D481g@Ya:;');
define('NONCE_KEY',        '`n]z1vB--VLDo/M%^I6,I#iIEqg%2a9`mv<@F+gkkqm&)Mg6rjNbBffQ&w_:W1$@');
define('AUTH_SALT',        'UZ11aqvX5dCWxnWf4qdbf%asnWkd8!+(-S7>h&~I77+~4@T-tA[x2_}nj3r+W)lq');
define('SECURE_AUTH_SALT', 'L`1wvkv3);5FmUn:V3LXrl+pK(3pet;VDqu}Z<8Cc*RG6DasRK.KL1iDZM/j]X5f');
define('LOGGED_IN_SALT',   'O3OER+=<S1{:^p1<K(W_]k~<rd[~u4hHEWKhO1>a1(HN+W)I#M$^e_j%#j.|J:q)');
define('NONCE_SALT',       '2n(p1zx~0a@&(h^< 35P0ZT&>$B?W^$cH:rsL0#>l;`z/G2=vqd0V#Fc9drLz=Lt');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'proectpor_';

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
