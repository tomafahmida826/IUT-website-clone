<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>All News</title>
</head>
<body>
  <h2>All News</h2>
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

</body>
</html>
