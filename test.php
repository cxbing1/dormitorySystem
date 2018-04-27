<?php
session_start();
if(!empty($_GET['id']))
{
    $num=$_GET['id'];
    session_start();
    $_SESSION['uid']=$num;
   echo "<script>location.href='index.html'</script>";


}




?>