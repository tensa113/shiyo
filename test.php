<?php
//練習１ 
echo "hello world!";
echo "\n";


//練習２
echo "paiza php講座";
echo "\n";

//練習３
echo "勇者はレベルアップした";
echo "\n";

//練習４
$a ="「 " ;
$b = 4 ;
$c = " + " ;
$d = 5 ;
$e = " = " ;
$f = 9 ;
$g = " 」";
echo $a.$b.$c.$d.$e.$f.$g;
echo "\n";

//練習５
$a = "「　";
$b = "現在日時：２０１９年０２月１日１０時２０分";
$c = "　」";
echo $a . $b . $c ;
echo "\n";


//練習６
$a = "「　";
$b = 2020;
$c ='年のオリンピック開催地は"東京"です。」';
echo $a . $b . $c;
echo "\n";


//練習７
if($a>=20)
{
    echo "タバコの購入は可能";
}
else
{
    echo "タバコの購入は違法です";
}
echo "\n";


//練習８
if($a>=60)
{
    echo "合格";
}
else
{
    echo "不合格";
}
echo "\n";


//練習９
if($a==100)
{
    echo "ジュースを買う";
}
elseif($a==200)
{
    echo "香ばしい唐揚げを買う";
}
else
{
    echo "家に帰る";
}
echo "\n";



//掛け算表を出力する
for ($a=1;$a<=9;$a++ )
{
    for ($b=1;$b<=$a;$b++)
    {
        echo $a . "x" . $b . "=". $a*$b ."  ";
    }
    echo "\n";
}


//1から10までのすべての奇数を出力する
for ($a = 1 ; $a <= 10 ; $a++){
    if ($a % 2 === 1){
    echo "1から10までの奇数は". $a . "\n";
    }
}


//成績判定
$a = 90 ;
 if ($a < 60)
 {
     echo "不合格";
 }
 elseif ($a >= 60 && $a < 70)
 {
     echo "合格";
 }
 elseif ($a >= 70 && $a < 80 )
 {
     echo "良い";
 }
 elseif ($a >= 80 && $a < 100)
 {
     echo "優秀"."\n";
 }
 else
{
     echo "入力エラー";
}



//直角三角形
for ($a = 1; $a < 6; $a++)
{
    for ($b = 1;$b <= $a;$b++)
    {
        echo "*" ;
    }
        echo "\n";
}


//2つの正整数で、最小公倍数を求められる
$a = 2;
$b = 8;
for ($c = $a; $c >= 1; $c ++) //$c是被除数
{
    if ($c % $a === 0 && $c % $b === 0 ) //$c除以$a.$b都没有余数 就是最小公倍数
    {
        echo "最小公倍数为"." ". $c."\n";
    break;
    }
}


//do whileで1～10000の合計を求める。
$a = 1;
$sum = 0;
do
{
    $sum = $sum + $a; 
    $a++;
    if($a > 10000)
   { 
       echo $sum. "\n";
    }
       
}
while ($a <= 10000);


//この日は今年の何日を求める
$today = date("z");
echo date("Y年m月d日");
echo "\n";
echo "今日は今年の" . $today . "日です". "\n";



//do whileで1～10000の合計を求める。
$a = 1;
$sum = 1;
do
{
    $a++;
    $sum = $sum + $a;
}
while ($a < 10000);
echo $sum . "\n";

//[0 1 1 2 3 5 8 13 21 34 55 89 ...]の数字の変化を分析し、ループで完成してください
$a = 0;
$b = 1;
echo $a . " " . $b;
for($i = 3; $i <= 7; $i++)
{
    $a = $a + $b;
    echo $a . " ";
    $b = $a + $b;
    echo $b . " ";
}
echo "\n";

//$sの計算式は、Sn = a + aa + aaa + aaaa + aa ... aです
$a = 0;
echo "Sn=";
for($i = 0; $i < 5;$i++)
{
    //10的1，2，3，4次方
    $a = pow(10,$i) + $a;
    //echo $a . "  " ;
    echo $a . "+";
}
echo "...1です。";

echo "\n";

//1,2,3,4四つの数字があるとする、お互いに重複しない3桁の数値を求める(24個)

for ($a = 1; $a <= 4; $a++)
{
    for ($b = 1; $b <= 4; $b++)
    {
        for ($c = 1; $c <= 4; $c++)
        if( $a != $b && $a != $c && $b != $c)
        {
            echo $a . $b . $c ."  " ;
        }
    }
}
//これらx，y，zの3つの整数の数値を大きい値から小さい値に出力する
$x = 10;
$y = 30;
$z = 20;
if ($x > $y && $y > $z)
{
    echo $x . $y . $z . "\n";
}
elseif ($x > $z && $z> $y)
{
    echo $x. $z. $y. "\n";
}
elseif ($y > $x && $x > $z)
{
    echo $y . $x . $z. "\n";
}
elseif ($y > $x && $z > $x)
{
    echo $y . $z . $x. "\n";
}
elseif ($z > $x && $x > $y)
{
    echo $z . $x . $y. "\n";
}
else
{
    echo $z . $y . $x. "\n";
}

//101-200の間に複数の素数があると判断し、出力する(21個)	
$a = 101;
for( $a = 101; $a <= 200; $a++)
{
    $b = 2;
    for ( $b =2; $b < $a ; $b++)
    {
        if ( $a % $b == 0)
        {
            $b =0;
           break;
        }
    }
    // echo '#'.$b . '\n';
    if ( $b <> 0 )
    {
        echo $a . " ";
    }   
}

echo "\n";


//ひしがたを出力する
$n = 6;
for ( $a = 1; $a <= $n; $a++)
{
    for ( $b = 1; $b <= $n - $a; $b++)
    {
        echo " ";
    }
    for ( $c = 1; $c <= 2*$a; $c++)
    {
        echo "*";
    }
    echo "\n";
}
for ( $a = $n; $a >= 1; $a--)
{
    for ( $b = $n - $a; $b >= 1; $b--)
    {
        echo " ";
    }
    for ( $c = 2*$a; $c >= 1; $c--)
    {
        echo "*";
    }
    echo "\n";
}


echo "\n";

//一行の文字数を入力して、その中にある英文字の数、スペースの数、数字の数と他の文字の数をそれぞれ統計してください
$text = 'dffderdc  6666667';
preg_match_all( "/[0-9]{1}/",$text,$arr);//数値チェック
echo "数字の数は". count($arr[0]) . "\n";
preg_match_all("/[a-zA-Z]{1}/",$text,$arr1);//english check
echo "英文字の数は". count($arr1[0]) . "\n";
preg_match_all("/[^\s　]+/s",$text,$arr2);// スペース チェック
echo "スペースの数は". count($arr2[0]) . "\n";

echo "\n";


//101-200の間に複数の素数があると判断し、出力する(21個)	
for( $a = 101; $a <= 200; $a++)
{
    for ( $b = 2; $b <= $a; $b++)
    {
        if( $a % $b == 0)
        {
        break;
        }
    }
    if ( $b >= $a)
    {
        echo $a . " ";
    }
}

echo "\n";


//ひしがたを出力する
$n = 10;
for ($a = 1;$a <= 10;$a++)
{
    for ($b = 1;$b <= $n - $a;$b++)
    {
        echo " ";
    }
    for ($c = 1; $c <= $a*2-1;$c++)
    {
        echo "*";
    }
    echo "\n";
}
for ($a = $n;$a >= 1;$a--)
{
    for ($b = $n- $a;$b >= 1;$b--)
    {
        echo " ";
    }
    for ($c = $a*2-1;$c >= 1;$c--)
    {
        echo "*";
    }
    echo "\n";
}

echo "\n";

//今月のカレンダーを出力する(曜日も表示するように)
echo  " 日". " 月". " 火". " 水". " 木". " 金". " 土";
echo "\n";
for ($a = 0;$a <= 6;$a++)
{
    if ($a <  date('w',strtotime('2020-02-01')))
    {
        echo "   ";
    }
}
for ($b = 1;$b <= 29;$b++)
{
    if ($b < 10)
    {
        echo "  ". $b;
    }
    else
    {
        echo " ". $b;
    }
    if (5 < date('w',mktime(0,0,0,2,$b,2020)))
    {
     echo "\n";
    }
}

echo "\n";
//正の整数を素因数に分解します。
$num = 90;
$a = 2;
echo $num . "="; 
while ($num > $a)
{
    if ($num % $a == 0)
    {
        echo $a . "*";
        $num = $num / $a;
    }
    else
    {
        $a++;
    }
}
echo $num;

echo "\n";

//1,2,3,4四つの数字があるとする、お互いに重複しない3桁の数値を求める(24個)
for($num = 123;$num <= 432;$num++)
{
    $a = intval($num/ 100);
    $b = $num / 10 % 10; 
    $c = $num % 10;
    if($a != $b && $a != $c && $b != $c && $b < 5 && $c <5 && $b != 0 && $c != 0)
    {
        echo $num. " ";
    }
}






