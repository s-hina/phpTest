<?php

//1. 引数に税抜きの数値を指定して実行すると、税込み(消費税10%)の数値を返す関数を作成してください
function zeikomi($kakaku) {
    return $kakaku * 1.1;
}
echo zeikomi(1500) . "\n";

//2. $name と $age を仮引数に持ち $age が20以上の場合は $nameを返し、それ以外は「未成年」と返す関数を作成してください
function twenty($age, $name) {
    if ($age >= 20) {
        echo $name;
    } else {
        echo "未成年";
    }
}
echo twenty(22, "齋藤陽奈") . "\n";

//3. $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素の中央値を返す関数を作成してください。
$array = [1, 3, 5, 7, 9];
function median($arr) {
    //配列を昇順に並べ替え
    sort($arr);
    //配列の個数が偶数の場合
    if (count($arr) % 2 === 0) {
        return ($arr[(count($arr) / 2) - 1] + $arr[count($arr) / 2]) / 2;
    //配列の個数が奇数の場合
    } else {
        return ($arr[floor(count($arr) / 2)]);
    }

}
echo median($array) . "\n";

//4. $price と $amount という配列の仮引数を持ち、$price * $amount が1万以上なら20%引きの値を返す関数を作成してください
function discount($price, $amount) {
    if ($price * $amount >= 10000) {
        echo ($price * $amount) * 0.8;
    } else {
        echo $price * $amount;
    }
}
echo discount(1000, 10) . "\n";

//5. 【応用】次のプログラムは、配列の中で1番大きい値を返す min_array という関数を実装しようとしています。途中の部分を完成させてください。
$array_num = [3, 7, 1, 9, 5];
function min_array($arr) {
// とりあえず配列の最初の要素を1番小さい値とする
$min_number = $arr[0];
foreach($arr as $a) {
//どうしたらいいかわからない・・・・
    if($a < $min_number) {
        $min_number = $a;
    }    
}

return $min_number;
}
echo min_array($array_num) . "\n";
