<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submit Review</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Submit a Review</h2>
        <form action="review.php" method="POST">
            <label for="vehicle">Select Vehicle:</label>
            <select name="vehicle_id">
                <?php
                $query = "SELECT * FROM vehicles";
                $result = executeQuery($query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['id']."'>".$row['name']." (".$row['model'].")</option>";
                }
                ?>
            </select>

            <label for="rating">Rating (1-5):</label>
            <input type="number" name="rating" min="1" max="5" required>

            <label for="comment">Comment:</label>
            <textarea name="comment" required></textarea>

            <button type="submit" name="submit_review">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit_review'])) {
    $user_id = 1;  // Placeholder for session user ID
    $vehicle_id = $_POST['vehicle_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO reviews (user_id, vehicle_id, rating, comment) VALUES ('$user_id', '$vehicle_id', '$rating', '$comment')";
    executeQuery($query);
    echo "<script>alert('Review submitted successfully!'); window.location.href='dashboard.php';</script>";
}
?>
