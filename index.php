<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP</title>
    <!-- link do bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="container">
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="/myshop/create.php" role="button">New Client</a>
        <br>
        <table>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </table>
            <tbody>
                <?php
                    $servename = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "myshop";

                    // Create connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    // Check connection 
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // read all row from database table
                    $sql = "SELECT * from clients";
                    $result = $connection->query($sql);

                    if ($result) {
                        die("Invalid query: " . $connection->error);
                    }

                    // read data of row
                    while($row = $result->fech_assoc()) {
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/myshop/edit.php?id=$row">Edit</a>
                                <a class="btn btn-primary btn-sm" href="/myshop/delete.php">Delete</a>
                            </td>
                        </tr>
                        ";
                    }
                ?>
                <tr>
                    <td>10</td>
                    <td>Bill Gates</td>
                    <td>bill.gates@microsoft.com</td>
                    <td>+1154622145</td>
                    <td>New York, USA</td>
                    <td>18/05/2022</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/myshop/edit.php">Edit</a>
                        <a class="btn btn-primary btn-sm" href="/myshop/delete.php">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>