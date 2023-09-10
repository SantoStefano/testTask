<?php

class Database {
  private $conn;

  public function __construct($server, $user, $password, $db) {
      $this->conn = mysqli_connect($server, $user, $password, $db);
      if (!$this->conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      mysqli_set_charset($this->conn, "utf8");
  }

  public function select($query) {
      $queryResult = [];
      $result = mysqli_query($this->conn, $query);
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $queryResult[] = $row;
          }
      }
      return $queryResult;
  }

  public function execQuery($query) {
      if (mysqli_query($this->conn, $query)) {
          return true;
      }
      return false;
  }
  

}




