<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'guardsof');

/** Имя пользователя MySQL */
define('DB_USER', 'u_guardsof');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '6h6lMSws');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '38HTt]5 |89h2;v@AmE&x7z@@3sS0/[&icN]$gSXN~C$e^S1=fT!A+9fr>x|;nRm');
define('SECURE_AUTH_KEY',  'Nj H?cCO5PqoQKJmTzwUn@]nPS BsLgGmvv6AM[U};FYT^iY+#+_),`*{36BpwQ%');
define('LOGGED_IN_KEY',    'V]o@c5({|jF ,sHwU<!qp[<[^AOiSdMZM0uiFu n; kB>CU5I/a<:%8KuUOX |,I');
define('NONCE_KEY',        'U(/XP!NCDX+-P:9 rHyZnr*_+CA$et4znd%a)-Zi&vRFs^2>33!QE=Ri]E[Q|]:l');
define('AUTH_SALT',        '_;}GKR#Hlk.Xs^$h1sXh=YE@_y-$l`+Dk&nfd/q!*<v|fQ8@lL>As`(vV<L7nVNM');
define('SECURE_AUTH_SALT', 'G6ca3E!+HL=?#w$xG8-1i;CiXt(aAXq 7m1+!$IVe4UW2ix1>)F/w+1eH?>NY=8t');
define('LOGGED_IN_SALT',   ';bB%F.&NO;IX)m%7o6ftY|RwPIN%~hZ{yX%A<<C}9*)wKnBV1>U.~>A;!ju$on$<');
define('NONCE_SALT',       '4EHYEg|uwfX*N*4-&aI@ F?Q>)eo9/[W+-Q:uaf)Dwmtv-s,aL?-[)M(RHtP0JsH');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
