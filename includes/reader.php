<html>
    <head>
        <title>Book Reader</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }

            #book_content {
                max-width: 800px;
                margin: auto;
            }
        </style>
    </head>
    <body>

    <div id="book_content">
        
        <?php
        require_once 'database.handling.inc.php';

        $bookId = isset($_GET['id']) ? $_GET['id'] : 1; // Default to the first book

        $sql = "SELECT * FROM books WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $bookId);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                echo "<h1>{$row['title']}</h1>";
                echo "<p>Author: {$row['author']}</p>";
                echo $row['content'];
            } else {
                echo "<p>Book not found</p>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<p>Statement preparation failed</p>";
        }

        mysqli_close($conn);
        ?>

        <!-- Navigation links -->
        <div>
            <a href="?id=1">Book 1</a> |
            <a href="?id=2">Book 2</a>
            <!-- Add more links for other books -->
        </div>
    </div>

    </body>
</html>
