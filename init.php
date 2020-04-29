<?php
session_start();

$GLOBALS['config'] = [
  'mysql' => [
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'db' => 'multiauth_oop'
  ]
];

spl_autoload_register(function ($class) {
  $path = __DIR__.DIRECTORY_SEPARATOR.$class.".php";
  $path = str_replace("\\", DIRECTORY_SEPARATOR, $path);
  include_once($path);
});
