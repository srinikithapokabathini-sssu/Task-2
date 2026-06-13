<?php
include "config.php";

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO posts (title, description) VALUES ('$title', '$description')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Post Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
</head>
<body>

<h2>Add New Post</h2>

<form method="post">

    <label>Title:</label><br>
    <input type="text" name="title" required>
    <br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea>
    <br><br>

    <button type="submit" name="submit">Add Post</button>

</form>

</body>
</html>