<?php include("../functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Users</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Manage Users</h2>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php
            $query = "SELECT * FROM users WHERE role='user'";
            $result = executeQuery($query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['role']."</td>
                        <td><a href='delete_user.php?id=".$row['id']."'>Delete</a></td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
