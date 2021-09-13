<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>resultpage</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <div class="result-wrapper">
    <h2>RESULTS(※Lv150)</h2>
   
    <?php $totalProgress = 0; ?>

    <div class = "posessiontitle">
      <hr  size = "1" color = "">
      <h4 class = "need1">必要数</h4>
      <h4 class = "need2">所持数</h4>
      <hr  size = "1" color = "">
    </div>

    <?php foreach ($menus as $menu): ?>
      <?php 
        $totalArchive = $_POST[$menu->getName()];//postした値をtotalArchiveへ格納

        $menu->setTotalArchive($totalArchive);//totalArchiveへセット
        
         $totalProgress = ($totalArchive / ($menu->getProgressRate() * 10)) * 100;//10人分の素材にするため10倍にして計算
    
      ?>

      <p class="result-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $menu->getProgressRate() ?>
        個
      </p>

      <p class="result-price"><?php echo $totalArchive ?>(<?php echo $menu->getComparetion() ?>%)</p>

    <?php endforeach ?>
    
    <h3>10人合計進捗率: <?php echo $totalProgress ?>%</h3>
  </div>
</body>
</html>