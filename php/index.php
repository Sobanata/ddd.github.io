<?php
$link=mysqli_connect('localhost', 'root', '' , 'SalonA');
$result = mysqli_query($link,"SELECT * FROM tovar");
$rows = mysqli_num_rows($result);







?>


<img src="t.jpg">
<img src="../images/lak.jpg" width="250">
<?
for ($i = 0 ; $i < $rows ; ++$i)
   {
$row = mysqli_fetch_array($result); 

   ?>
<img src "<? echo ($row['image']);  
?>"
width=200 height=200>
<?echo($row['image']);
echo "<br>";
echo $row['tov'];
echo "<br>";
echo $row['kol'];
   }	
   
?>