<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $content = $_POST['content'];

  // Image upload
  $image = $_FILES['image'];
  $img_name = basename($image["name"]);
  $target_dir = "uploads/";
  $target_file = $target_dir . time() . "_" . $img_name;

  if (move_uploaded_file($image["tmp_name"], $target_file)) {
    $stmt = $conn->prepare("INSERT INTO news (title, content, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $target_file);

    if ($stmt->execute()) {
      header("Location: dashboard.html?msg=News+with+image+added");
    } else {
      echo "DB Error: " . $stmt->error;
    }
    $stmt->close();
  } else {
    echo "Image upload failed!";
  }
}
?>
