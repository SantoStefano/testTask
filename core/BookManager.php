<?php


class BookManager {
    private $title;
    private $year;
    private $publisher;

    public function __construct() {
        if (isset($_POST['submit'])) {
            $this->title = trim($_POST['title']);
            $this->year = trim($_POST['year']);
            $this->publisher = trim($_POST['publisher']);
        }
    }

    public function addBook() {
        $query = "INSERT INTO catalog (title, year, publisher) VALUES ('$this->title', $this->year, '$this->publisher')";
        $db = new Database('localhost', 'root', '', 'books');
        return $db->execQuery($query);
    }

}





