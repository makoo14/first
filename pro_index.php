<?php
class Menu {
  public $name;
  public $price;
  public $image;
  
  public function __construct($name,$price,$image) {
    $this->name     = $name;
    $this->price    = $price;
    $this->image    = $image;
  }
  
 // public function hello() {
 //   echo '私は'.$this->name.'です';
 // }
}

$juice  = new Menu('JUICE'  ,600,"/img/icon.png");
$coffee = new Menu('COFFEE' ,700,"/img/icon.png");
$curry  = new Menu('CURRY'  ,800,"/img/icon.png");
$pasta  = new Menu('PASTA'  ,900,"/img/icon.png");
// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入してください
  $menus=[$juice,$coffee,$curry,$pasta];


  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="pro_stylesheet.css">
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <div class="menu-items">
      <?php foreach($menus as $menu): ?>
        <div class="menu-item">        
            <img src="  <?php echo $menu->image ?>">        
            <h3 class="menu-item-name"><?php echo $menu->name  ?></h3>
            <p class="price"><?php echo $menu->price ?></p>
        </div>            
      <?php endforeach ?>
      
    </div>
  </div>
</body>
</html>
