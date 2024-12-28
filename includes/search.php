<?php

  require_once 'dbh.inc.php';

  if (isset($_POST['submit'])) {
    $search = $_POST ['search'];

    $sql = "SELECT * FROM books WHERE booksName LIKE '%$search%' OR booksAuthor LIKE '%$search%' OR booksCategory LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      if (mysqli_num_rows ($result)>0) {
        echo '<thead>
                <tr style="color: orange;">
                  <th>Book</th>
                  <th>Author</th>
                  <th>Category</th>
                </tr>
              </thead>';

        while ($row = mysqli_fetch_assoc ($result)) {
          echo '<thead>
                  <tr>
                    <td><a href = "search.books.php?book='.$row['booksName'].'">'.$row['booksName'].'</a></td>
                    <td>'.$row['booksAuthor'].'</td>
                    <td>'.$row['booksCategory'].'</td>
                  </tr>
                </thead>';
        }
      }

      else {
        echo  '<thead>
                <tr>
                  <td style="color: orange; font-weight: bold;">No results found</td>
                </tr>
              </thead>';
      }
    }
  }