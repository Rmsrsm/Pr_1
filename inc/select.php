<?php
 $sql = "SELECT * FROM users ORDER BY RAND() LIMIT 1";
 // تخزين القيم 
 $result = mysqli_query($conn,$sql); 
 // استجلاب للقيم
 // ويخزنها على شكل مصفوفة
 $users= mysqli_fetch_all($result,MYSQLI_ASSOC);
?>