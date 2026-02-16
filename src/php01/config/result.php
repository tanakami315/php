<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$type = htmlspecialchars($_POST['type'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は" . $my_name . "<br>";
print "希望の商品は" .$type. "<br>";
print "注文数は" .$number;
