<?php
include "db_conn.php";

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
   

   $sql = "INSERT INTO `activity`(`activity_id`, `activity_pic`,`activity_picrole`,`activity_name`, `activity_date`,`activity_time`,`activity_venue`, `club_id`,`activity_participant`,`activity_vip`,`activity_cost`,`activity_desc`) VALUES (NULL,'$activity_pic','$activity_picrole','$activity_name','$activity_date','$activity_time','$activity_venue','$club_id','$activity_participant','$activity_vip','$activity_cost', '$activity_desc')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: activity.php?msg=New record created successfully");
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

   <title>Add new activity</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#d9bdb3;">
      Persatuan Community of Bachelor in Statistics (COMOBISTA)
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Activities</h3>
         <p class="text-muted">Complete the form below to add a new activity</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:100vw; min-width:500px;">
            
               
                  <label class="form-label">Person in charge of activity:</label>
                  <input type="text" class="form-control" name="activity_pic" placeholder="Please insert your name">
              
               
                  <label class="form-label">Role:</label>
                  <input type="text" class="form-control" name="activity_picrole" placeholder="Please insert your role">
               
               
                  <label class="form-label">Activity Name:</label>
                  <input type="text" class="form-control" name="activity_name" placeholder="Please insert your activity name">
              

               
                  <label class="form-label">Activity Date:</label>
                  <input type="date" class="form-control" name="activity_date" placeholder="YYYY-MM-DD">
               

                
                  <label class="form-label">Activity Time:</label>
                  <input type="time" class="form-control" name="activity_time" placeholder="Time">
               

               
                  <label class="form-label">Activity Venue:</label>
                  <input type="text" class="form-control" name="activity_venue" placeholder="Please insert the venue">
               

			   
			      
                  <label class="form-label">Club ID:</label>
                  <input type="text" class="form-control" name="club_id" placeholder="Insert your club ID">
               
          

               
                  <label class="form-label">Partcipant list:</label>
                  <input type="text" class="form-control" name="activity_participant" placeholder="total of artcipant">
               
               
                  <label class="form-label">VIP list:</label>
                  <input type="text" class="form-control" name="activity_vip" placeholder="total of VIP">
              
               
                  <label class="form-label">Cost:</label>
                  <input type="text" class="form-control" name="activity_cost" placeholder="total cost">
               
               
                  <label class="form-label">Description:</label>
                  <input type="text" class="form-control" name="activity_desc" placeholder="Description">
               
          
     </div>

            
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="activity.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>