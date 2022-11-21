<?php

/*
 * This file is for base config.
 *
 * This is config for quick deployment of the project to server
 */

/*
 * block the possibility of displaying the file through the address bar
 */
defined('VG_ACCESS') or die('Access denied');

/*
 * const SITE_URL - url domain
 *
 * const PATH - path to root folder of the project
 */
const SITE_URL = 'http://online-store';
const PATH = '/';

/*
 * Constants for connection to database
 */
const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DB_NAME = 'online_store';
