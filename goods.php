<?php
require_once 'DB.php';

echo "<h1>ТОВАРЫ <a href = './busket.php'><button>КОРЗИНА</button></a></h1>";

$sql = 'SELECT * FROM goods';
$query = $pdo->query($sql);
while($row = $query->fetch(PDO::FETCH_OBJ)){
    $form = "<form action = './add.php' method='get'>
            <input type = 'text' name = ".$row->id." placeholder = 'количество'>
            <input type = 'submit' value = 'купить'>
            </form>";
    
    echo '<li>';
    echo '<ul>'.$row->name.' | '.$row->parametr.'<br>'.
            $row->price.'грн '.$form.
         '</ul>';
    echo '</li>';
}


