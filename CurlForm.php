<?php
    session_start();

   
 
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    




<form action="imageSize.php" method="POST">
        Width:<input type="number"name="width">
        <button type="submit">Resize image</button> <br>
        <a href="Delete.php">Delete</a> 
       


 
     
     
    </form>

 
    <img src="<?php echo $_SESSION['image']; ?>" alt="">
 


   
</body>

</html>