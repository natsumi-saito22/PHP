<?php

 //課題１
    echo "\n";
        function twice($x){
            $result = 2*$x;
            return $result;
          }
            echo twice(6);

 // 課題２
    echo "\n";
        function f($a, $b){
            $result = $a+$b;
            return $result;
          }
             echo f(3,7);
 
 //課題３
     echo "\n";
        $arr = [1,3,5,7,9];

        function sum($arr){
           $result = $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
           return $result;
          }
            echo sum($arr);
 
 //課題４
     echo "\n";
        $arr=[1,0,7,5];
        function max_array($arr){
          $max_number =$arr[1];
    
        foreach($arr as $a){
          if ($max_number<$a){
              $max_number=$a;
             }
         } 
           return $max_number;
      }
          echo max_array($arr);
 
 /*
 課題５
  strip_tags
 */
 echo "\n";
$html_code = "<html><body><title>Today's lucn</title><p>今日のオススメランチはオムライスです。</p></body></html>";
$html_code_result = strip_tags($html_code);
echo $html_code_result;

 
 //array_push
  echo "\n";
  $fruits=["banana","peach","mango"];
  
 array_push($fruits,"orange","lemon");
  print_r($fruits);
  
  //array_merge
  echo "\n";
  $array1=[1,2,3];
  $array2=[10,20,30];
  $array3=["natsumi","sakura","miku"];
  
  $array=array_merge($array1,$array2,$array3);
  print_r ($array);
  
  //time
  echo "\n";
  $timestamp=time();
  echo $timestamp;
  
  //mktime
 echo "\n";
 $timestamp=mktime(0,0,0,11,22,2019);
 echo $timestamp;
 
 //date
 echo "\n";
 echo date("Y/m/d");
 echo "<br>";
