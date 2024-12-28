<?php
    include_once 'functions.inc.php';
    include_once 'dbh.inc.php';

    if (isset($_POST['formsubmit'])) {
        $bookId = $_GET['book'];
        $bookName = $_POST['book_name'];
        $bookAuthor = $_POST['book_author'];
        $bookCategory = $_POST['category'];
        $bookBid = $_POST['book_id'];
        $about = $_POST['about'];
        $description = $_POST['description'];
        $image = $_POST['file'];

        move_uploaded_file($_FILES['file']['tmp_name'],"Image/books/".$_FILES['file']['name']);

        updateBookById($conn, $bookId, $bookName, $bookAuthor, $bookCategory, $bookBid, $about, $description, $image);

        header('location:../admin.page.php');
        exit();

    }
?>