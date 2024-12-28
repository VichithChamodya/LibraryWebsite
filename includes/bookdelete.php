<?php
    include_once 'functions.inc.php';
    include_once 'dbh.inc.php';

    if (isset($_POST['delete'])) {
        $bookBid = $_POST['book'];

        deleteBookByBid($conn, $bookBid);

        
    }
?>