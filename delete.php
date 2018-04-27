<?php
include "conn.php";

if(!empty($_GET['id']))
{


        $num=$_GET['id'];


        $sql="delete from Student where number='$num'  ";
        $query=$db->query($sql);
        $sql2="delete from stu_dorm where Snumber='$num'";



            echo "<script>alert('删除成功');location.href='widgets.php'</script>";






}



?>