<?php
    include_once 'functions.inc.php';
    include_once 'dbh.inc.php';

    if (isset($_POST['submit'])) {
        move_uploaded_file($_FILES['file']['tmp_name'],"Image/news/".$_FILES['file']['name']);

        $news = $_POST['news'];
        $about = $_POST['about'];
        $date = $_POST['date'];
        $image = $_FILES['file']['name'];
        $display = $_POST['on_off'];

        addNews($conn, $news, $date, $about, $image, $display);
    }
?>