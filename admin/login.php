<?php
include("../functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form action="login.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="admin_login">Login</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['admin_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Default admin credentials
    $default_email = 'admin@example.com';
    $default_password = 'admin123'; // This is the plain text password

    // Check if the input matches the default credentials
    if ($email === $default_email && $password === $default_password) {
        // Simulate successful login
        session_start();
        $_SESSION['admin_id'] = 1; // Assuming admin ID is 1
        header("Location: dashboard.php");
        exit();
    } else {
        // Query the database for admin credentials
        $query = "SELECT * FROM users WHERE email='$email' AND role='admin'";
        $result = executeQuery($query);
        $admin = mysqli_fetch_assoc($result);

        if ($admin && password_verify($password, $admin['password'])) {
            session_start();
            $_SESSION['admin_id'] = $admin['id'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid credentials');</script>";
        }
    }
}
?>