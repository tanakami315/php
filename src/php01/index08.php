<?php
// $people = array('Taro', 'Jiro', 'Saburo');

// var_dump($people);

// echo $people[0];

// $people = array(
//     'person1' => 'Taro',
//     'person2' => 'Jiro',
//     'person3' => 'saburo'
// );

// foreach ($people as $person => $name){
//     print $person . "は" . $name . "です" . "<br />";
// }

$people =  [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['Hanako', 16, 'women']
];

foreach($people as $person){
    echo $person[0] . '(' . $person[1] . '歳'. $person[2]. ')'. '<br />';
}