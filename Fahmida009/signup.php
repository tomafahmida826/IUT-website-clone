<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];

  if ($password !== $confirm) {
    die("Passwords do not match!");
  }

  $hashed = password_hash($password, PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $fullname, $email, $username, $hashed);

  if ($stmt->execute()) {
    header("Location: login.html");
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}
?>
