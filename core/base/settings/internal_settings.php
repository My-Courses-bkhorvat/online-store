<?php
/*
 * File with internal settings for framework system
 */

/*
 * block the possibility of displaying the file through the address bar
 */
defined('VG_ACCESS') or die('Access denied');

/*
 * const TEMPLATE Path to folder with default template for user part
 *
 * const ADMIN_TEMPLATE Path to folder with template for admin part
 */
const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/view';

/*
 *  const COOKIE_VERSION Можливість змінити куку для того щоб могти заставаити перезайти користувачів сайту
 *  const CRYPT_KEY ключ шифрквання для кукі
 *  const COOKIE_TIME для адміна, щоб вилоговувалося через 60 хвилин
 *  const BLOCK_TIME кількість помилок привводі пароля
 */
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;

/*
 * const QTY кількість показуваних товарів
 * const QTY_LINKS кількість ссилок
 */
const QTY = 8;
const QTY_LINKS = 3;

/*
 * path for css, js for admin
 */
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

/*
 * path for css, js for user
 */
const USER_CSS_JS = [
    'styles' => ['css/style.css'],
    'scripts' => []
];

use core\base\exceptions\RouteException;

function autoloadMainClasses($class_name)
{
    $class_name = str_replace('\\', '/', $class_name);

    if (!@include_once $class_name . '.php') {
        throw new RouteException("Не правильне ім'я файлу для підключення - " . $class_name);
    }
}

spl_autoload_register('autoloadMainClasses');

