<?php include "inc/init.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <?php include "inc/head.php"; ?>
</head>
<body>
  <?php include "inc/header.php"; ?>
  <?php include "inc/body.php"; ?>
  <?php include "inc/footer.php"; ?>
  <?php if (OFFLINE) { ?>
    <div><a href="http://localhost/Clip/test/test.php" target="_blank">Lancer les tests du site</a></div>
  <?php } ?>
</body>
</html>