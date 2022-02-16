<?php
session_start();
// print_r($_SESSION['picture']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
  img{
    border: 1px solid black;
  
  }
</style>
</head>
<body>
<form action="uploads.php" method="post" enctype="multipart/form-data">
  <label for="picture">IMAGE GALLERY</label><br><br>
  <p>This page displays the list of upload images</p>
  <input type="file" name="picture" id="picture"><br><br>
  <input type="submit" name="submit" value="Upload more"><br>
</form>
<br>
<br>
<br>
<div>
  <?php
  if(isset($_SESSION['picture'])){
    foreach($_SESSION['picture'] as $key=>$value){
    echo "<img src='".$value." 'alt='picture' width='200' height='200'/>";
  }
}
  ?>
  </div>
</body>
</html>