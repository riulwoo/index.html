<?php
function print_title(){
  if(isset($_GET["id"]))
  echo $_GET['id'];
  else {
  echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET["id"]))
  echo file_get_contents("data/".$_GET["id"]);
  else {
  echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.'){
      if($list[$i] != '..'){
    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
  }
}
$i = $i + 1;
}
  /*
  echo "<li>$list[0]</li>\n";
  echo "<li>$list[1]</li>\n";
  echo "<li>$list[2]</li>\n";
  echo "<li>$list[3]</li>\n";
  echo "<li>$list[4]</li>\n";
  echo "<li>$list[5]</li>\n";
  echo "<li>$list[6]</li>\n";
  */
}
 ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php /*isset — 변수가 선언되고 다음과 다른지 확인합니다.NULL*/
    print_title();
     ?>
  </title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?php /*data폴더에 data가 추가되면 자동으로 list화 시킴*/
    print_list();
     ?>
  </ol>
  <h2>
    <?php /*isset — 변수가 선언되고 다음과 다른지 확인합니다.NULL*/
    print_title();
     ?>
  </h2>
  <?php /*file_get_contents 전체 파일을 문자열로 읽습니다.*/
    print_description();
  ?>
</body>
</html>
