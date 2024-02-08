<?php
include "db_conn.php";
$activity_id = $_GET["activity_id"];

if (isset($_POST["submit"])) {
   $activity_pic = $_POST['activity_pic'];
   $activity_picrole = $_POST['activity_picrole'];
   $activity_name = $_POST['activity_name'];
   $activity_date = $_POST['activity_date'];
   $activity_time = $_POST['activity_time'];
   $activity_venue = $_POST['activity_venue'];
   $club_id = $_POST['club_id'];
   $activity_participant = $_POST['activity_participant'];
   $activity_vip = $_POST['activity_vip'];
   $activity_cost = $_POST['activity_cost'];
   $activity_desc = $_POST['activity_desc'];
  

  $sql = "UPDATE `activity` SET `activity_pic`='$activity_pic',`activity_picrole`='$activity_picrole',`activity_name`='$activity_name',`activity_date`='$activity_date',`activity_time`='$activity_time',`activity_venue`='$activity_venue',`club_id`='$club_id',`activity_participant`='$activity_participant',`activity_vip`='$activity_vip', `activity_cost`='$activity_cost',`activity_desc`='$activity_desc' WHERE activity_id = $activity_id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: activity.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="style4.css">

  <title>Edit Activity</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #d9bdb3;">
    Persatuan Community of Bachelor in Statistics (COMOBISTA)
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Activity</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `activity` WHERE activity_id = $activity_id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center" style="background-color: #d9bdb3;">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        
          
            <label class="form-label">Number :</label>
            <input type="text" class="form-control" name="activity_id" value="<?php echo $row['activity_id'] ?>">
          
            <label class="form-label">Person in Charge:</label>
            <input type="text" class="form-control" name="activity_pic" value="<?php echo $row['activity_pic'] ?>">
          
            <label class="form-label">Role:</label>
            <input type="text" class="form-control" name="activity_picrole" value="<?php echo $row['activity_picrole'] ?>">

            <label class="form-label">Activity Name:</label>
            <input type="text" class="form-control" name="activity_name" value="<?php echo $row['activity_name'] ?>">
        
            <label class="form-label">Date:</label>
            <input type="date" class="form-control" name="activity_date" value="<?php echo $row['activity_date'] ?>">
            <label class="form-label">Time:</label>
            <input type="time" class="form-control" name="activity_id" value="<?php echo $row['activity_time'] ?>">

            <label class="form-label">Venue:</label>
            <input type="text" class="form-control" name="activity_id" value="<?php echo $row['activity_venue'] ?>">
       
          <label class="form-label">Club ID:</label>
          <input type="text" class="form-control" name="club_id" value="<?php echo $row['club_id'] ?>">
      
          <label class="form-label">Parcipant list:</label>
            <input type="number" class="form-control" name="activity_participant" value="<?php echo $row['activity_participant'] ?>">

          <label class="form-label">Vip list:</label>
          <input type="number" class="form-control" name="activity_vip" value="<?php echo $row['activity_vip'] ?>">

          <label class="form-label">Cost:</label>
            <input type="text" class="form-control" name="activity_cost" value="<?php echo $row['activity_cost'] ?>">
          <label class="form-label">Description:</label>
            <input type="text" class="form-control" name="activity_desc" value="<?php echo $row['activity_desc'] ?>">

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="activity.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>