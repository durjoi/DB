<?php
  require_once 'init.php';
  // $db = DB::getInstance()->action("SELECT *", "users", ['id', '=', 6])->first();
  // $db = DB::getInstance()->query("SELECT * FROM users WHERE id = ?", [6])->first();
  $db = DB::getInstance()->get('users', ['id', '=', '6'])->first();
  print_r($db);
 ?>
