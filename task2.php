<?php
/*PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう
課題1*/
$name = "まい";
if($name = "まい"){
    echo "あなたの名前です";
}

//課題2
for($i = 1; $i <= 10000; $i++){
    echo $i ++;
}

//課題3
$fruits = array("いちご","バナナ","りんご","ぶどう","さくらんぼ");
foreach ($fruits as $favorite){
    echo $favorite." ";
}
//課題4 正しいコード

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
//今回の場合、for($i =1; $i <=100; $i++)の方が分かりやすいと思います。

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}