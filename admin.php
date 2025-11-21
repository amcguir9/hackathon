<link rel="stylesheet" href="style.css">
<?php
$rows = file("registrations.txt", FILE_IGNORE_NEW_LINES);
?>

<?php foreach ($rows as $row): ?>
  <?php
   $parts = explode(",", $row);
   // $parts[0] is name, [1] email, etc.
  ?>
  <div class="card">
    <p>Name: <?= $parts[0] ?></p>
    <p>Email: <?= $parts[1] ?></p>
    <p>Track: <?= $parts[2] ?></p>
    <p>Shirt: <?= $parts[3] ?></p>
    <p>Laptop: <?= $parts[4] ?></p>
  </div>
<?php endforeach; ?>