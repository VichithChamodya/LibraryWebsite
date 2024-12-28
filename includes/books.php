<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

  if (isset($_POST["submit"])) {

    move_uploaded_file($_FILES['file']['tmp_name'],"Image/books/".$_FILES['file']['name']);

    $bookName = $_POST["book_name"];
    $bookAuthor = $_POST["book_author"];
    $category = $_POST["category"];
    $bookId = $_POST["book_id"];
    $about = $_POST["about"];
    $description = $_POST["description"];
    $bookImg = $_FILES['file']['name'];

    createBook ($conn, $bookName, $bookAuthor, $category, $bookId, $about, $description, $bookImg);

  }