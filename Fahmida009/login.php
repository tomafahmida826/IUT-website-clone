<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
  $stmt->bind_param("ss", $username, $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
      $_SESSION['username'] = $user['username'];
      header("Location: dashboard.html");
    } else {
      echo "Invalid password!";
    }
  } else {
    echo "User not found!";
  }
}
?>
