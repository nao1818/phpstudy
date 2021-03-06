<?php
class Menu {
  // name, price, imageプロパティのアクセス権をprivateにしてください
  private $name;
  private $price;
  private $image;

  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }

  public function hello() {
    echo '私は'.$this->name.'です';
  }

  // getNameメソッドを定義してください
  public function getName() {
    return $this->name;
  }

  // getImageメソッドを定義してください
  public function getImage() {
    return $this->image;
  }

  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }

}
?>
