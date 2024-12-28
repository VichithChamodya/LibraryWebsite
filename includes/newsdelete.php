<?php
    include_once 'functions.inc.php';
    include_once 'dbh.inc.php';

    if (isset($_POST['submit'])) {
        $news = $_POST['news'];

        deleteNews($conn, $news);

    }
?>