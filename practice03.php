<?php
 echo "hello!";
 
 //if
 echo "\n";
 if ($name="natsumi"){
     echo "私はnatsumiです";
 }   else{
     echo "あなたの名前ではありません";
 }
 
 //switch
 echo "\n";
 switch($name="natsumi"){
    case "natsumi";
       echo "私はnatsumiです";
       break;
    
    default;
       echo "あなたの名前ではありません";
       break;
 }
 
 
 echo "\n";
 $total=0;
 echo $total;
 
 for($i=1; $i<=1000; $i++) {
     $total += $i;
 }
   echo $total;
 
 echo "\n";
 $fruits = array("orange","strawbery","peach","moango","pinapple");
 
 foreach($fruits as $fruit){
     echo "要素は".$fruit;
     echo "\n";
 }
 
 echo "\n";
$i=1;

for($i=1; $i<=100; $i++){

// 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

//start,endを使う
echo "\n";
$start=1;
$end=100;

for ($i=$start; $i<=$end; $i++){
    
    if($i % 5 == 0){
      echo $i;
    }
}

