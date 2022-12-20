<?php require '../php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- user information -->



        <?php
session_start();
if (!isset($_SESSION['phone'])) {
  header("location: index.php");
}
else{


  $currentUser= $_SESSION['phone'];
  $s = "select * from registration where phone='$currentUser'";
  $result = $conn->query($s);
  if (mysqli_num_rows($result) > 0) {
    foreach($result as $row){
      ?>

<h4>Name :<?php echo $row['name']; ?></h4>
  <p>
  <h5>Gmail :<?php echo $row['email']; ?></h5>
  </p>
  <div class="">Phone :
    <?php echo $row['phone']; ?>
  </div>
  <?php
    }
  }

}
?>

</body>
</html>