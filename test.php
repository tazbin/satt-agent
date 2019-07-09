<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post" enctype="multipart/form-data">
      <input type="file" name="photo" value="">
      <button type="submit" name="button">go</button>
    </form>

    <?php

    if (isset($_POST['button'])) {

      $favicon = $_FILES['photo'];
      $favName = $_FILES['photo']['name'];
      $favTempName = $_FILES['photo']['tmp_name'];
      $favSize = $_FILES['photo']['size'];
      $favError = $_FILES['photo']['error'];
      $favType = $_FILES['photo']['type'];

      echo $favSize;
      exit();

    }


     ?>

  </body>
</html>
