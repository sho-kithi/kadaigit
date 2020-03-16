<?php


/*
nameにあなたの名前を代入し、 if文で $name があなたの名前だったら 
「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください
*/

$name = "ido shota";


if ($name) {
    echo "井戸　翔太";
} else {
    echo "あなたの名前ではありません。";
}

echo "\n";


//for文を使って、1から10000までの合計の値を表示してください。

for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}

echo $total;

echo "\n";


//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。

$fruits = array("appple","orenge","banana","Grape","Kiwi");

foreach($fruits as $fruits){
    echo "好きな果物は". $fruits;
    echo "\n";
}


/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 101;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

