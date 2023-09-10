<?php


require_once 'core/Db.php';
require_once 'core/BookManager.php';



$db = new Database('localhost', 'root', '', 'books');

$route = $_GET['route'];
$name = $_GET['name'];

switch ($route) {
  case NULL:
    $query = 'select * from catalog';
    $result = $db->select($query);
    require_once 'template/main.php';
    break;
  case 'publisher' :
    $query = "select * from catalog where publisher='$name'";
    $result = $db->select($query);
    require_once 'template/publisher.php';
    break;
  case 'addbook' :
  $bookManager = new BookManager();
  $addbook = $bookManager->addBook();

      if ($addbook) {
        header("Location:/");
    }
  require_once 'template/addbook.php';
  break;
  default:
  require_once 'template/404.php';
  break;
}