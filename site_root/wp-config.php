<?php
/**
 * �������� ��������� WordPress.
 *
 * ���� ���� �������� ��������� ���������: ��������� MySQL, ������� ������,
 * ��������� �����, ���� WordPress � ABSPATH. �������������� ���������� ����� �����
 * �� �������� {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} �������. ��������� MySQL ����� ������ � �������-����������.
 *
 * ���� ���� ������������ ��������� �������� wp-config.php � �������� ���������.
 * ������������� ������������ ���-���������, ����� ����������� ���� ����
 * � ������ "wp-config.php" � ��������� ��������.
 *
 * @package WordPress
 */

// ** ��������� MySQL: ��� ���������� ����� �������� � ������ �������-���������� ** //
/** ��� ���� ������ ��� WordPress */
define('DB_NAME', 'guardsof');

/** ��� ������������ MySQL */
define('DB_USER', 'u_guardsof');

/** ������ � ���� ������ MySQL */
define('DB_PASSWORD', '6h6lMSws');

/** ��� ������� MySQL */
define('DB_HOST', 'localhost');

/** ��������� ���� ������ ��� �������� ������. */
define('DB_CHARSET', 'utf8');

/** ����� �������������. �� �������, ���� �� �������. */
define('DB_COLLATE', '');

/**#@+
 * ���������� ����� � ���� ��� ��������������.
 *
 * ������� �������� ������ ��������� �� ���������� �����.
 * ����� ������������� �� � ������� {@link https://api.wordpress.org/secret-key/1.1/salt/ ������� ������ �� WordPress.org}
 * ����� �������� ��, ����� ������� ������������ ����� cookies �����������������. ������������� ����������� ����� ��������������.
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
 * ������� ������ � ���� ������ WordPress.
 *
 * ����� ���������� ��������� ������ � ���� ���� ������, ���� �� ������ ������������
 * ������ ��������. ����������, ���������� ������ �����, ����� � ���� �������������.
 */
$table_prefix  = 'wp_';

/**
 * ���� ����������� WordPress, �� ��������� ����������.
 *
 * �������� ���� ��������, ����� ��������� �����������. ��������������� MO-����
 * ��� ���������� ����� ������ ���� ���������� � wp-content/languages. ��������,
 * ����� �������� ��������� �������� �����, ���������� ru_RU.mo � wp-content/languages
 * � ��������� WPLANG �������� 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * ��� �������������: ����� ������� WordPress.
 *
 * �������� ��� �������� �� true, ����� �������� ����������� ����������� ��� ����������.
 * ������������ �������������, ����� ������������ �������� � ��� ������������ WP_DEBUG
 * � ���� ������� ���������.
 */
define('WP_DEBUG', false);

/* ��� ��, ������ �� �����������. �������! */

/** ���������� ���� � ���������� WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** �������������� ���������� WordPress � ���������� �����. */
require_once(ABSPATH . 'wp-settings.php');
