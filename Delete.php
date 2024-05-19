<?php
//include'/ImageSize.php';
    session_start();
    $pic=$_SESSION['image'];
    if($pic !='')
    {
        unlink($pic);
        header('Location: Curlform.php');
    }
?>




