<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>十天衆超越計算機</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <div class="menu-wrapper container">
    <img src="GlanblueCalculater_image/12345.jpg" class = "topimg1">
    <p>※十天衆超越素材の取得率進捗を計算するシンプルな計算機です</p>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
            <span>所持数</span>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="計算する">
      <p class = "copyright-index">※画像の著作権は権利者Cygames様へ帰属します。</p>
  </div>
</body>
</html>