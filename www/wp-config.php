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
define('DB_NAME', 'yin_tools');

/** Имя пользователя MySQL */
define('DB_USER', 'yin_tools_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'yin_tools_admin');

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
define('AUTH_KEY',         'nC1#[Z9Upw}X[j)U<;,q ],)`2j^2-{H?Me(qLq{?;*yblA+Gzx`ER{9fd.CfE&8');
define('SECURE_AUTH_KEY',  '#J5iG6v~Mm,qZg4d;jh#IKwOrCF^MihMf5qjx@v`O!E~KfNPk,,&!_cs]Hi=#(sY');
define('LOGGED_IN_KEY',    'u.lwE<c&Em-EV=Px8)0L3`C<L7Q[z)/_-ZkJeg{I!?2]Dx`-}vo@%I4p#1I{*Z>)');
define('NONCE_KEY',        'G>)3oFZQx2JK([LziI>H.2tA/9Y`t=`m:w|E1`91dVC h.~Kt$>*d=?sQX5`pB/E');
define('AUTH_SALT',        '6v%i9{:aMLhX)d.&tLFeOrti1O-2LFFe$-Xt};Tu8Qc~T3yjGn*,-v_^)l4~CPfP');
define('SECURE_AUTH_SALT', '$u^{$2c[;p*hdQ=FC&XEw>#G*{u$bAD^*7V?(;aTQdY1Lv~E%JRt@6kZnRk!XD&H');
define('LOGGED_IN_SALT',   'De1_.kyHrvUDfzECc0sh0|b,8!oX^,TZwD|B5pgl_h9ZozS*SU8}2I6rdMT-Md]j');
define('NONCE_SALT',       '(9MI|~4:P=V5 |_D!K&zHVKurEl}l_swiclvqak9JBPk))MiHkl+kdkm]C;BNuOK');

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
