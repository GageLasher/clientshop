<?php
require('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Client List</h2>
                <a href="create.php" class="btn btn-primary" role="button">New Client</a>
                <br>
                <table class="table">

                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $sql = "SELECT * FROM clients";
                           $result = $connection->query($sql);
                           if(!$result) {
                            die("Query Failed: " . $connection->error);
                           } 

                           while($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a href='edit.php?id=$row[id]' class='btn btn-success btn-sm'>Edit</a>
                                <a href='delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Delete</a>
                            </td
                            </tr>
                            ";
                           }

                        ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>