<?php
// function outputNumber($a)
// {
//     echo "引数の値は". $a."です";
//     return;
// }

// outputNumber(2);

// function outputHello()
// {
//     echo "Hello world";
// }

// outputHello();

// function text($score1, $score2, $score3)
// {
// $sum = $score1 + $score2 + $score3;

// if ($sum > 100){
//     echo "合計点は{$sum}なので合格です";
// }
// else{echo "合計点は{$sum}なので不合格です";
//     }
// }

// echo(text(80, 60, 90));

// function exam($side1, $side2, $height)
// {
//     $S1 = ($side1)* $height / 2;
//     $S2 = ($side1)* $height;
//     $S3 = ($side1 + $side2) * $height / 2;
//     echo "三角形の面積は{$S1}";
//     echo "<br />";
//     echo "四角形の面積は{$S2}";
//     echo "<br />";
//     echo "台形の面積は{$S3}";
//     echo "<br />";

//     }

// echo(exam(10, 20, 5));

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);



