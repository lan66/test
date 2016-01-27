<?php
echo "5";
     $conn=mysql_connect("localhost", "root", "");
    $result=mysql_db_query("stu", "SELECT * FROM `stu_info`", $conn);
    /*if(!$conn){
        die("shibai".mysql_error());
    }*/
?>