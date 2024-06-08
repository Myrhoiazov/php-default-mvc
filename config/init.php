<?php

define("ROOT", dirname(__DIR__));
const DEBUG = 1;
const ERROR_LOG_FILE = ROOT . '/tmp/error.log';
const WWW = ROOT . '/public';
const UPLOADS = WWW . '/uploads';
const APP = ROOT . '/app';
const CORE = ROOT . '/core';
const HELPERS = ROOT . '/helpers';
const CONFIG = ROOT . '/config';
const VIEWS = APP . '/Views';
const CACHE = ROOT . '/tmp/cache';
const LAYOUT = 'default';
const PATH = '';

const LOGIN_PAGE = PATH . '/login';

const DB = [
    'host' => '',
    'dbname' => '',
    'username' => '',
    'password' => '',
    'charset' => 'utf8mb4',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
];

const EMAIL = [
    'host' => '',
    'auth' => true,
    'username' => '',
    'password' => '',
    'secure' => 'tls', // ssl
    'port' => 587, // 25, 465, 2525
    'from_email' => '',
    'is_html' => true,
    'charset' => 'UTF-8',
    'debug' => 0,
];
