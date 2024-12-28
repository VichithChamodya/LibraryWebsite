<?php

require_once 'includes\dbh.inc.php';

if(isset($_POST['add_book'])){

   $book_name = $_POST['booksName'];
   $book_auther = $_POST['booksAuthor'];
   $book_category = $_POST['booksCategory'];
   $book_bid = $_POST['booksBid'];
   $book_image = $_FILES['booksImage']['name'];
   $book_image_tmp_name = $_FILES['booksImage']['tmp_name'];
   $book_image_folder = 'uploaded_img/'.$book_image;

   if(empty($book_name) || empty($book_auther) || empty($book_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO books (booksName, booksAuthor, booksImage) VALUES('$book_name', '$book_auther', '$book_image')";
      $upload = mysqli_query($conn, $insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:admin_page.php');
};