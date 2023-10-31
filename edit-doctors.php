<?php include('topbar.php'); ?>

<?php  include('common/connection.php'); 
if(!$_SESSION['phone']){
  header('location: login.php');
 } 
 if($_SESSION['roles_id']!=2){
   header('location: not-authorize.php');
  }

 include('functions.php');
?>
 
<!-- <?php
//session_start();
//if(isset($_SESSION['user_id'])){

//} else{
 // header("location: login.php");
//}
?> -->

<!DOCTYPE html>
<link rel="icon" href="logo/logo1-r.png" type="image">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regitration page</title>
  <link rel="icon" href="logo/logo1-r.png" type="image">

  <style>
    .form form input{
    width: 50%;
    padding: 12px 20px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    background-color:white;
    color:black;
    margin-top:10px;
      }

      .form form select{
    width: 50%;
    padding: 12px 20px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    background-color:white;
    color:black;
    margin-top:10px;
      }

      .form {
    background-color: #919B9B;
    overflow: hidden;
    border-radius: 5px;
}
    .form form  h2{
    width: 50%;
    padding: 12px 20px;
    background-color: green;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;   
    margin-top:20px;
    color:white;
   }
   .form form [type=submit]:hover {
    background-color: blue;
    
  }
     .form form{
        margin-left:500px;
      }
      .form form  [type=submit]{
        background-color: green;
      }
  
      .form form a{
      margin-left:190px;
      font-size:25px;
     } 
     .form form  textarea#subject {
    width: 48%;
    border-radius: 21px;
    padding: 11px;
    background: white;
}
  .form form [type=submit]{
    margin-bottom: 50px;
  }
  </style>
</head>
<body>  
<!-- Header and Topbar link -->

<?php include('header.php'); ?>

<div class="form">
<div class="container">  
<form method="POST" action="" enctype="multipart/form-data"> 

<!-- PHP Code For Insart Data for Database -->
<?php
 $data=[];

if(isset($_GET['id']) && !empty($_GET['id'])){
  $id =$_GET['id'];
 
  $queryData = getDoctor($id);
  $data = $queryData->fetch_object();
}else{
  header("location: patient-list.php");
  //die();
  
}

//Update Doctors Query
if(isset($_POST['update']) && !empty($_POST['dname']) && !empty($_POST['dateTime']) && !empty($_POST['deptname'])){
  updateDoctors();
}
 ?>

<legend><h2>Booking Form</h2></legend><br>

<label for="name"><h3>Doctor Name:</h3></label>
 <input type="hidden" value="<?php echo $data->id; ?>" id="name" name="id" placeholder="Enter Your Name">
  <input type="text"  value="<?php echo $data->name; ?>" name="name" placeholder="Enter Your Name">
  <br><br>
  <label for="day"><h3>Day Name</h3></label>
   <select type="text" value="<?php echo $data->day; ?>" name="day">
     <option value="volvo">Select Here</option> 
   <option <?php if($data->day == 'Saturday'){ echo 'selected';} ?>  value="Saturday">Saturday</option>
    <option <?php if($data->day == 'Sunday'){ echo 'selected';} ?> value="Sunday">Sunday</option>
    <option <?php if($data->day == 'Monday'){ echo 'selected';} ?> value="Monday">Monday</option>
    <option <?php if($data->day == 'Tuesday'){ echo 'selected';} ?> value="Tuesday">Tuesday</option>
    <option <?php if($data->day == 'Wednesday'){ echo 'selected';} ?> value="Wednesday">Wednesday</option>
    <option <?php if($data->day == 'Thursday'){ echo 'selected';} ?> value="Thursday">Thursday</option>
    <option <?php if($data->day == 'Friday'){ echo 'selected';} ?> value="Friday">Friday</option>
  </select><br>

  <label for="dateTime"><h3>Date and Time:</h3></label>
   <input type="datetime-local"  value="<?php echo $data->dateTime; ?>" name="dateTime" placeholder="Enter Your Email"><br>

   <label for="name"><h3>Department Name:</h3></label>
   <select type="text" value="<?php echo $data->deptname; ?>" name="deptname">
    <option value="volvo">Select Here</option>
    <option <?php if($data->deptname == 'Cardiology'){ echo 'selected';} ?> value="Cardiology">Cardiology</option>
    <option <?php if($data->deptname == 'Neurology'){ echo 'selected';} ?> value="Neurology">Neurology</option>
    <option <?php if($data->deptname == 'Diagnostics'){ echo 'selected';} ?> value="Diagnostics">Diagnostics</option>
    <option <?php if($data->deptname == 'Dental'){ echo 'selected';} ?> value="aDental">Dental</option>
    <option <?php if($data->deptname == 'Orthopedics'){ echo 'selected';} ?> value="Orthopedics">Orthopedics</option>
    <option <?php if($data->deptname == 'ICU Department'){ echo 'selected';} ?> value="ICU Department">ICU Department</option>
    <option <?php if($data->deptname == 'Emergency'){ echo 'selected';} ?> value="Emergency">Emergency</option>
    <option <?php if($data->deptname == 'Laboratory Medicine'){ echo 'selected';} ?> value="Laboratory Medicine">Laboratory Medicine</option>
  </select><br>
  <label for="file"><h3>Picture:</h3></label>
   <input type="file"  value="<?php echo $data->fileToUpload; ?>" name="fileToUpload" placeholder="Enter your Date"><br>

    <br>
    <input type="submit"  name="update" value="update">
  <!-- <a href="login.php">Login now</a> -->
</form>
</div>
</div> 

<!-- Header Page Link -->
<?php include('footer.php'); ?>

</body>
</html>