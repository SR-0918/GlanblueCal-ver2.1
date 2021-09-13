<?php
class glanblueCal {
  private $name;
  private $progressRate;
  private $image;
  private $totalArchive = 0;
  private $comparetion;//比較用変数
  
  
  
  public function __construct($name, $progressRate, $image) {
    $this->name = $name;//名称
    $this->progressRate = $progressRate;//必要数
    $this->image = $image;//画像
  }
  

  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  //進捗率
  public function getProgressRate() {
    return $this->progressRate;
  }
  
  public function setTotalArchive($totalArchive) {
    $this->totalArchive = $totalArchive;
  }
  
  
  public function getTotalArchive() {
    return  $this->totalArchive;
  }
  

  public function getComparetion() {
    return floor(($this->totalArchive / $this->progressRate) * 100);
  }
}
?>