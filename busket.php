<?php
require_once 'DB.php';

echo '<h1>КОРЗИНА ПОКУПОК <a href = "./goods.php"><button>ТОВАРЫ</button></a></h1>';

$sql = 'SELECT * FROM busket';
$query = $pdo->query($sql);

$fullprice = 0;
echo '<ol>';
while($row = $query->fetch(PDO::FETCH_OBJ)){
    echo '<li>';
    $fullprice += $row->price;
    echo $row->name.' '.$row->count.' шт. '.$row->price.'грн. '
            . '<a href = "./delete.php?id='.$row->id.'"><button>удалить</button></a>';
    echo '</li>';
}
echo '</ol>';

echo '<br><br> Полная цена: '.$fullprice.'грн.  <a href = "./buy.php"><button>оплатить</button></a>'.
        ' <a href = "./delete.php"><button>Очистить корзину</button></a>';




