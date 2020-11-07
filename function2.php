<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    function basic(){
      echo "basic 함수가 기능하였습니다";
      echo "<br>";
    }
    basic();
    basic();

     ?>
     <h2>parameter &amp; argument</h2>
     <?php
     function sum($a,$b){

     echo($a+$b);
     print("<br>");
     }
     sum(2,4);
     ?>
     <h2>return</h2>
     <?php
     function sum2($left,$right){
       return $left+$right;
       echo 123123 //return 이후로는 함수가 종료된다.
     }
     print(sum2(2,4));
     file_put_contents('result.txt',sum2(2,4));
      ?>
  </body>
</html>
