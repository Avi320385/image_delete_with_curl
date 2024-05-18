<?php
//include'/ImageSize.php';
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
<img src="<?php echo $_SESSION['image']; ?>" alt="">
    <form action="CurlForm.php">
    <button type="<?php unlink( $_SESSION['image']); ?>">Delete image</button>
    </form>

   
</body>
</html>


