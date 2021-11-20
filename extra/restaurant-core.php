<?php
class Restaurant {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo;
  private $stmt;
  public $error;
  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
        ]
      );
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct() {
    $this->pdo = null;
    $this->stmt = null;
  }

  // (C) GET GUEST BOOK ENTRIES
  function get ($pid) {
    $this->stmt = $this->pdo->prepare(
      "SELECT * FROM  restaurant` WHERE `post_id`=? ORDER BY `datetime` DESC"
    );
    $this->stmt->execute([$pid]);
    return $this->stmt->fetchall();
  }

  function get_all () {
    $this->stmt = $this->pdo->prepare(
      "SELECT * FROM  restaurant"
    );
    $this->stmt->execute();
    return $this->stmt->fetchall();
  }
  // (D) SAVE GUEST BOOK ENTRY
  function save ($name, $location, $type, $avg_price, $avg_rating, $menu, $review_count) {
    try {
      $this->stmt = $this->pdo->prepare(
        "REPLACE INTO  `restaurant` (NULL,`name`, `location`, `type`, `avg_price`, `avg_rating`, `menu`, `review_count`) VALUES (?,?,?,?,?,?,?)"
      );
      $this->stmt->execute([$name, $location, $type, $avg_price, $avg_rating, $menu, $review_count]);
      return true;
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
  }
}

// (E) DATABASE SETTINGS - CHANGE TO YOUR OWN !
define("DB_HOST", "localhost");
define("DB_NAME",  "team05");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (F) NEW GUEST BOOK OBJECT
$REST = new Restaurant();