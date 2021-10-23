<?php
            
    $host_db = "localhost";
    $user_db = "viniata_db";
    $pass_db = "_V4keshan2";
    $name_db = "viniata_db";
    
    //$conn = mysqli_connect($host_db, $user_db, $pass_db, $name_db);
    
    // Create connection
//$conn = new mysqli($host_db, $user_db, $pass_db);
$conn =  mysqli_connect($host_db, $user_db, $pass_db, $name_db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
/*
      $query = 'SELECT id, FIO FROM `studer`';

   // выполняем запрос к базе данных
      $result = mysqli_query($conn, $query);
var_dump($result);
   // выводим полученные данные
      while($row = $result->fetch_assoc()){
         echo  $row['id'];
         echo  ' - ';
         echo  $row['FIO'];
         echo  '<br>';
      }
*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            
        </style>
    </head>
    <body>
        
        <?php
            echo "dasdsssasd";
            $sql_txt = "SELECT COUNT(*) as cnt FROM studer ";
            $query = mysqli_query($conn, $sql_txt) or die(mysql_error());
		    $rows = mysqli_fetch_assoc($query);
		    $qty = $rows['cnt'];
		    echo $qty;
// текст SQL запроса, который будет передан базе

        
        ?>
        
        
    </body>
</html>


