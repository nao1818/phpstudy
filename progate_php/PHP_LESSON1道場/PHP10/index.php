<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$sumPrice = 0;
$maxPrice = 0;
$maxPriceMenu = '';

foreach ($menus as $menu) {
  echo $menu['name'].'は'.$menu['price'].'円です'.'<br>';
  $sumPrice += $menu['price'];
  $price = $menu['price'];
  $menu = $menu['name'];
  if ($maxPrice < $price) {
    $maxPrice = $price;
    $maxPriceMenu = $menu;
  }
}

echo '合計金額は'.$sumPrice.'円です';
echo '<br>';
echo $maxPriceMenu.'が最高価格で'.$maxPrice.'円です';


?>
