<?php
// for ($i = 1; $i<=5; $i++){
//     echo $i*2;
//     echo "<br />";
// }

// $i = 0;

// while($i < 3){
//     echo 'i = '. $i . '<br />';
//     $i += 1;
// } 

// $i =1;
// while($i <= 20){
//     echo $i . '<br />';
//     $i += 1;
// } 

// $count = 1;
// while($count < 100){
//     if($count === 20){
//         break;
//     }
//     if($count %3 === 0){
//         $count++;
//         continue;
//     }
//     echo $count. "<br />";
//     $count ++;
// }

// $num = 1;
// // do {
// //     echo "num = " . $num . "<br />";
// //     $num ++;
// // } while ($num < 3);

// while($num <= 50){
//     if($num % 3 === 0 and $num % 5 === 0){
//         echo "{$num}はFizzBuzz" . "<br />";
//     }
//     elseif($num % 3 === 0){
//         echo "{$num}はFizz" . "<br />";
//     }
//     elseif($num % 5 === 0){
//         echo "{$num}はBuzz" . "<br />";
//     }
//     else{
//         echo "{$num}は" . $num . "<br />";
//     }
//     $num++;
// }

for($i =1; $i < 6; $i++){
    for($j =1; $j < 6; $j++){
        echo "●";
    }
    echo "<br />";
}