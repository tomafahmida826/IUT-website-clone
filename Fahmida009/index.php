<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Islamic University of Technology (IUT)</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo-container">
            <div class="logo">
                <img src="image/logo.png.jpg" alt="IUT Logo"> <!-- Replace with actual IUT logo -->
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="admission.html">Admission</a></li>
                <li><a href="academic.html">Academics</a></li>
                <li><a href="research-groups.html">Research</a></li>
                <li><a href="#">Campus Life</a></li>
                <li><a href="departments.html">Department</a></li>
                <li><a href="#">Message</a></li>
                <li><a href="administration.html">Administration</a></li>
                <li><a href="my-iut.html">My IUT</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="signup.html">Login</a></li>
              </ul>
        </nav>
    </header>


<section class="hero">
  <div class="hero-content">
    <h1>Welcome to the Islamic University of Technology</h1>
    <p>Empowering the Future of Engineering & Technology</p>
  </div>
</section>

<main>
  <section class="info">
    <div class="container">
      <h2>About IUT</h2>
      <p>The Islamic University of Technology (IUT) is a leading institution for technical education...</p>
      <a href="#">Learn More</a>
    </div>
  </section>

  <section class="news">
    <div class="container">
      <h2>Latest News</h2>
     <?php
$result = $conn->query("SELECT * FROM news ORDER BY created_at DESC LIMIT 2");
while ($row = $result->fetch_assoc()):
?>
  <div class="news-item">
    <h3><?= htmlspecialchars($row['title']) ?></h3>
    <?php if (!empty($row['image'])): ?>
      <img src="<?= htmlspecialchars($row['image']) ?>" alt="News Image" style="max-width:100%; height:auto;">
    <?php endif; ?>
    <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
  </div>
<?php endwhile; ?>

      <a href="news.php">View All News</a>
    </div>
  </section>
</main>

<footer>
  <div class="container">
    <p>&copy; 2025 Islamic University of Technology. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
