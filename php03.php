<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function twice($num) {
    return  $num * 2;    
}
echo twice(3);
echo "<br>";

//2.$a と $b を仮引数に持ち、 $a と $b を足した結果を返す関数を作成してください。
function sum($a, $b) {
    return $a + $b;
}
echo sum(1, 2) ;
echo "<br>";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
$array = [1, 3, 5, 7, 9];
function multi($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    echo $result;
}
multi($array);
echo "<br>";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
$array_num = [5, 7, 4, 2, 1, 3];
 function max_array($arr){
// とりあえず配列の最初の要素を1番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
     if($max_number < $a) {
        $max_number = $a;
     }
 }

 return $max_number;
 }
echo max_array($array_num);
echo "<br>";

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください。
//strip_tags → HTMLタグ,PHPタグの除去
$str = "<h1>PHP課題</h1>" . "<p>strip_tagsの使い方</p>";
echo strip_tags($str);
echo "<br>";

//array_push → 配列に要素を追加
$fruits = ["apple", "lemon", "orange"];
array_push($fruits, "melon", "peach");
echo $fruits;
foreach($fruits as $fruit) {
    echo $fruit;
    echo "<br>";
}

//array_merge → 配列の結合
$array1 = [1, 3, 5];
$array2 = [2, 4, 6];
$array3 = array_merge($array1, $array2);
print_r($array3);
echo "<br>";

//time → UNIXタイムスタンプの取得
echo "現在のUNIXタイムスタンプは" . time();
echo "<br>";

//mktime →　日時からUNIXタイムスタンプを取得
$tm = mktime(10, 10, 10, 6, 7, 2020);
echo "2020年7月6日10時10分10秒のUNIXタイムスタンプは" . $tm;
echo "<br>";

//date →　指定された日時を任意のフォーマットにして、日付文字列を返す
echo date("Y/m/d");
echo "<br>";

echo date("Y年m月d日 H時i分s秒");
echo "<br>";

?>