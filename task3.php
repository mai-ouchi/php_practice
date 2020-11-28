<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP/Laravel 04 関数を理解しよう</title>
</head>

<body>

<?
/* php/laravel_4 課題
1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/

function nibai($num1){
    echo $num1 * 2;
}

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a, $b){
 echo $a + $b;
 }
 
 //3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
 
 $arr = array(1,3,5,7,9);
 
 function times($arr){
     for ($i =1; $i <= $arr; $i++;){
         $result *= $i;
     }
     return $result;
 }

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
$arr = array(2,5,9,7,3,1,8,6,4);

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 
 foreach($arr as $a){
 //どうしたらいいかわからない
 if($a => $max_number){
     $max_number = $a;
 }
 return $max_number;
 }
 
echo max_array($arr);

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

// ・strip_tags ⇒htmlタグを取り除く
$html = 'テスト<br><p>テスト</p><strong>テスト</strong>';
echo strip_tags($html,'<br>');
/*結果
テストテストテスト
<br>は削除されて<p>と<strong>だけ反映される
*/


// ・array_push　⇒１つ以上の要素を配列の最後に追加する
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
/*結果
=>     [1] => orange
=>     [2] => banana
=>     [3] => apple
=>     [4] => rasberry
*/

// ・array_merge ⇒ひとつまたは複数の配列を結合する
$japanese = array("桃","林檎","葡萄");
$english = array("peach","apple","grape");

$fruit = array_merge($japanese,$english);

echo $fruit;
//結果　桃　林檎　葡萄　peach apple grape

// ・time ⇒現在時刻のUnixスタンプを取得する。
/*time()だけだと「Unix エポック以降に計算された秒数」だけが表示されるので、
現在時刻を表示したい場合はタイムゾーンの設定がセットで必要。*/
  date_default_timezone_set('Asia/Tokyo'); 
  $Time = date('h:i:s a', time()); 
  echo $Time;
//結果　06:26:04 pm

//日付も表示する場合
$DateAndTime = date('Y-m-d h:i:s a', time());
echo $DateAndTime;
//結果　2020-11-28 06:33:17 pm

//　・mktime ⇒時間、分、秒、月、日、年の順で数値を入れると特定の日時を表示できる。
/*表示がいらないところは０にすればOK
例）私の生まれた日*/
$mybirthday = mktime(10,41,0,9,29,1984);
echo '私は' .date('Y年m月d日', $mybirthday).'に生まれました。'."<br>";
echo '生まれた時刻は'.date('h時:i分',$mybirthday).'です。';
/*結果
私は1984年9月29日に生まれました。
生まれた時刻は10時41分です。*/

//　・date　⇒日付の表示フォーマットを指定する。
$today = date('Y年m月d日h時:i分',time());
echo '今'.$today.'です。';
/*結果
今2020年11月28日●時●分です。*/

?>

</body>
</html>