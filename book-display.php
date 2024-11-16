<?php
include 'book-connection.php';
?>

<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <a href="book.php" class="text-light">
            <button class="btn btn-primary" style="margin-top: 20px; margin-bottom: 30px; float: right;">ADD New Book</button>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Book No</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Author</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM book";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $BookName = $row['bookname'];
                        $Date = $row['pubdate'];
                        $Author = $row['Author'];

                        echo '
                            <tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $BookName . '</td>
                                <td>' . $Date . '</td>
                                <td>' . $Author . '</td>
                                <td>
                                  <button class="btn btn-primary"><a href="book-update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                                  <button class="btn btn-danger"><a href="book-delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                               </td>
                           </tr>';
                    }
                }
                ?>

         </tbody>
        </table>
       </div>
    </body>
</html>