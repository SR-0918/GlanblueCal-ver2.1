<?php
require_once('GlanblueCalculater.php');

$decayWepons = new glanblueCal('朽ち果てた武器', 120,'GlanblueCalculater_image/kuchibuki.jpg');
$damasucusHopperCrystal = new glanblueCal('ダマスカス骸晶', 20 ,'GlanblueCalculater_image/gaisyou.png');
$starPiece = new glanblueCal('星晶の欠片', 7500, 'GlanblueCalculater_image/seisyounokakera.png');
$halo = new glanblueCal('各属性の天司の光輪', 80 , 'GlanblueCalculater_image/tenshiwakka.jpg');
$sixDragons = new glanblueCal('六竜素材', 50, 'GlanblueCalculater_image/rokuryu.png');
$silverPiece = new glanblueCal('各武器の銀片', 200 , 'GlanblueCalculater_image/ginpen.png');
$goldNugget = new glanblueCal('ヒヒイロカネ', 1 , 'GlanblueCalculater_image/hihiirokane.png');
$jewel = new glanblueCal('各属性の宝珠', 7500, 'GlanblueCalculater_image/houjyu.jpg');
$jine = new glanblueCal('各属性のジーン', 7500 , 'GlanblueCalculater_image/jine.jpeg');
$rupi = new glanblueCal('ルピ', 5100000, 'GlanblueCalculater_image/rupi.png' );
$magnaAnima = new glanblueCal('各属性のマグナアニマ', 50 , 'GlanblueCalculater_image/magnaanima.jpg');
$pushuke = new glanblueCal('各属性のプシュケー', 300 , 'GlanblueCalculater_image/pushuke.png');
$tenseiPiece = new glanblueCal('対応する天星の欠片', 50, 'GlanblueCalculater_image/tensei.png');
$bahamutePupleHone = new glanblueCal('バハムートの紫電角', 100 , 'GlanblueCalculater_image/bahatsuno.png');
$kyuukyou = new glanblueCal('究竟の証', 100, 'GlanblueCalculater_image/kyukyo.png');
$hekirei = new glanblueCal('碧麗の証', 2, 'GlanblueCalculater_image/hekirei.png');
$shisyouAnima = new glanblueCal('黄龍or黒麒麟のマグナアニマ', 30, 'GlanblueCalculater_image/shisyou.png');
$blight = new glanblueCal('対応する属性のブライト', 30, 'GlanblueCalculater_image/blight.png');
$weaponElement = new glanblueCal('対応する武器エレメント', 2000, 'GlanblueCalculater_image/element.png');
$colorElement = new glanblueCal('対応する属性エレメント', 2000, 'GlanblueCalculater_image/weapon.png');
$sixDragonsAnima = new glanblueCal('対応する属性の竜珠', 300, 'GlanblueCalculater_image/sixdragonanima.png');
$goldScale = new glanblueCal('真竜の金鱗', 50, 'GlanblueCalculater_image/kinrin.png');
$shumatsu = new glanblueCal('終末の暗晶', 30, 'GlanblueCalculater_image/ansyou.png');
$kyokushi = new glanblueCal('漆黒の棘翅', 30, 'GlanblueCalculater_image/kyokushi.png');
$makaku = new glanblueCal('狡知の魔角', 30, 'GlanblueCalculater_image/makaku.png');

$menus = array($decayWepons, $damasucusHopperCrystal, $starPiece, $halo, $sixDragons, $silverPiece, $goldNugget, $jewel, $jine, $rupi, $magnaAnima, $pushuke, $tenseiPiece, $bahamutePupleHone, $kyuukyou, $hekirei, $shisyouAnima, $blight, $weaponElement, $colorElement, $sixDragonsAnima, $goldScale, $shumatsu, $kyokushi, $makaku);

?>