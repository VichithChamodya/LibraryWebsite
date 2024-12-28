<?php
    include_once 'functions.inc.php';
    include_once 'dbh.inc.php';

    if (isset($_POST['formsubmit'])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $about = $_POST['about'];
        $image = $_POST['file'];
        $display = $_POST['file'];

        move_uploaded_file($_FILES['file']['tmp_name'],"Image/books/".$_FILES['file']['name']);

        updateNews($conn, $title, $date, $about, $image, $display);

        
    }
?>