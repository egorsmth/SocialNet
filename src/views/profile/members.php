<?php
use hive2\models\User;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
</head>
<body>
<ul>
  <?php foreach ($members as $member): ?>
      <li><?=$member->getFirstName()?></li>
  <?php endforeach ?>
</ul>
</body>
</html>
