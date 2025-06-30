<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add News | IUT Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f6f9;
      color: #333;
    }

    header {
      background-color: #003366;
      color: white;
      padding: 20px;
      text-align: center;
    }

    main {
      max-width: 700px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-top: 0;
      font-size: 24px;
      border-bottom: 2px solid #ccc;
      padding-bottom: 10px;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    button {
      background-color: #0055a5;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #003f7f;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      color: #0055a5;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <h1>IUT Dashboard</h1>
  </header>

  <main>
    <h2>Add News Article</h2>
   <form action="save_news.php" method="POST" enctype="multipart/form-data">
  <label>Title:</label><br>
  <input type="text" name="title" required><br><br>

  <label>Content:</label><br>
  <textarea name="content" rows="5" cols="40" required></textarea><br><br>

  <label>Image:</label><br>
  <input type="file" name="image" accept="image/*" required><br><br>

  <button type="submit">Publish</button>
</form>

    <a href="dashboard.html">← Back to Dashboard</a>
  </main>

</body>
</html>
