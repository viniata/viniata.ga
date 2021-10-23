<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Новый сайт</title>
  <style>
      .leg { width: 400px;
           	 font-size:3vw;;
      }
  </style>
  
</head>
<body>

<?php 

$mysqli = new mysqli("localhost", "viniata_db", "_V4keshan2", "viniata_db");

$query = "

SELECT s1.FIO as FIO_s, 
       s1.phone_1 as phone_s_1,
       s1.phone_2 as phone_s_2, 
	  (select FIO from studer 
       where typerec = 'M' and studer_id = s1.id) as FIO_m,
      (select phone_1 from studer 
       where typerec = 'M' and studer_id = s1.id) as phone_m_1,
      (select phone_2 from studer 
       where typerec = 'M' and studer_id = s1.id) as phone_m_2,
	  (select FIO from studer 
       where typerec = 'F' and studer_id = s1.id) as FIO_f,
      (select phone_1 from studer 
       where typerec = 'F' and studer_id = s1.id) as phone_f_1,
      (select phone_2 from studer 
       where typerec = 'F' and studer_id = s1.id) as phone_f_2
FROM studer s1
WHERE 1=1 
  /* and s1.id = s2.studer_id */
  and typerec = 'S'
  /* and s1.id = 96 */

";
//<a href="tel:+380985554433">Позвоните нам!</a>
$result = $mysqli->query($query);

/* извлечение ассоциативного массива */
while ($row = $result->fetch_assoc()) {
    
    if ($row["phone_s_1"] == "null") {
        $phone_s_1_res = "";
    } elseif ($row["phone_s_1"] == "phone_2") {
        $phone_s_1_res = "";
    } else  {
        $phone_s_1_res = "<a href='tel:+".$row["phone_s_1"]."'>".$row["phone_s_1"]."</a>";
    }
    if ($row["phone_s_2"] == "null") {
        $phone_s_2_res = "";
    } elseif ($row["phone_s_2"] == "phone_2") {
        $phone_s_2_res = "";
    } else {
        $phone_s_2_res = "<a href='tel:+".$row["phone_s_2"]."'>".$row["phone_s_2"]."</a>";
    }
    
    if ($row["phone_m_1"] == "null") {
        $phone_m_1_res = "";
    } elseif ($row["phone_m_1"] == "phone_2") {
        $phone_m_1_res = "";
    } else  {
        $phone_m_1_res = "<a href='tel:+".$row["phone_m_1"]."'>".$row["phone_m_1"]."</a>";
    }
    if ($row["phone_m_2"] == "null") {
        $phone_m_2_res = "";
    } elseif ($row["phone_m_2"] == "phone_2") {
        $phone_m_2_res = "";
    } else {
        $phone_m_2_res = "<a href='tel:+".$row["phone_m_2"]."'>".$row["phone_m_2"]."</a>";
    }
    
    if ($row["phone_f_1"] == "null") {
        $phone_f_1_res = "";
    } elseif ($row["phone_f_1"] == "phone_2") {
        $phone_f_1_res = "";
    } else  {
        $phone_f_1_res = "<a href='tel:+".$row["phone_f_1"]."'>".$row["phone_f_1"]."</a>";
    }
    if ($row["phone_f_2"] == "null") {
        $phone_f_2_res = "";
    } elseif ($row["phone_f_2"] == "phone_2") {
        $phone_f_2_res = "";
    } else {
        $phone_f_2_res = "<a href='tel:+".$row["phone_f_2"]."'>".$row["phone_f_2"]."</a>";
    }
    
    
    echo "
    <br><br>
    <fieldset class='leg'>
      <legend> ".str_replace("null", "", $row["FIO_s"])." ".$phone_s_1_res." ".$phone_s_2_res." </legend>
        мама ".str_replace("null", "", $row["FIO_m"])." ".$phone_m_1_res." ".$phone_m_2_res." <br>
        папа ".str_replace("null", "", $row["FIO_f"])." ".$phone_f_1_res." ".$phone_f_2_res."
    </fieldset>
    
    

    ";
    
    
  
}


?>



</body>
</html>