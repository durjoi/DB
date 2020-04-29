<?php
    use Config\Env;
    require_once 'init.php';

    class DB {
      private static $instance = null;
      private $_query,
              $_pdo,
              $_error = false,
              $_results,
              $_count = 0;


      final private function __construct() {
        try {
          $this->_pdo = new PDO('mysql:host='.Env::get('mysql/host').';dbname='.Env::get('mysql/db'),Env::get('mysql/username'),Env::get('mysql/password'));
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
      }

      final private function __clone() {
        return self::$instance;
      }

      public static function getInstance() {
        if(!isset(self::$instance)) {
          self::$instance = new DB;
        }
        return self::$instance;
      }
    }
 ?>
