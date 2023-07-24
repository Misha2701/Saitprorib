<?php 
/* Принимаем данные из формы */ 
  $name = $_POST["name"]; 

  $comment = $_POST["comment"]; 
 
/* Подключаемся к БД */ 
$db = mysqli_connect("localhost", "root", ""); 
mysqli_select_db($db, "db"); 
 
 
 $sql = "INSERT INTO db(name, comment) VALUES ('$name',  '$comment')"; 
 $result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysqli_error($db)); 
 
$result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysqli_error($db)); 
if (mysqli_error($db)) 
{ 
  echo 'Ошибка'; 
} else { 
  echo 'Форма успешно выполнена'; 
} 
?>
