<?php

$test = "これはサンプルです。";

$testNum = 123;

echo $test;
echo $testNum;

$value = 10;
$result = $value == 20;
var_dump($result);

$a = "20";
$b = 20;

$result = $a == $b;
var_dump($result);

$result = $a === $b;
var_dump($result);

$value = 10;
++$value;
echo $value;

$value = 10;
--$value;
echo $value;

$value = 10;
$value += 5;
echo $value;

$value = 10;
$value -= 5;
echo $value;

$value = 'apple';
$value.= 'orange';
echo $value;

$value =10;
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';
echo $result;

// $array2 に spring, summer, autumn, winterを代入する。
$array2 = ["spring", "summer", "autumn", "winter"];
// $array2 から autumn を取り出して表示する。
echo $array2[2];
//=> autumn と表示される。

// $animals という連想配列を定義する
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
  ];

  // $animals から "猫" を取り出して表示する。
echo $animals["cat"];
// => 猫 と表示される

// $animals から　"鳥" を取り出して表示する。
echo $animals["bird"];
// => 鳥 と表示される
?>