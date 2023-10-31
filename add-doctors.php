<?php  include('common/connection.php'); 
error_reporting(0);

session_start();
if(isset($_SESSION['phone'])){

} else{
  header("location: login.php");
}

include_once('functions.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Your Doctors</title>
  <link rel="icon" href="logo/logo1-r.png" type="image">
    <!-- FONT AWSOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
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
    background-color: aqua;
    
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
    <!-- Topbar Page Link -->
    <?php include_once 'topbar.php';?>

    <!-- Header Page Link -->
  <?php include_once 'header.php';?>
  
<div class="form">
<div class="container">  
<form method="POST" action="add-doctors.php" enctype="multipart/form-data"> 

<!-- PHP Code For Insart Data for Database -->
<?php 
if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['deptname'])){

       $roles_id= $_POST ['roles_id'];
       $name= $_POST ['name'];
       $day= $_POST ['day'];
       $phone= $_POST ['phone'];
       $dateTime= $_POST ['dateTime'];
       $deptname= $_POST ['deptname'];
       $fileToUpload= $_POST ['fileToUpload'];
       $password = md5($_POST['password']??"12345");

 // Upload File 
  $target_dir = "uploads/";
 if( isset( $_FILES['fileToUpload'] ) ) {
     $file_upload = $target_dir . time() . "_" . basename( $_FILES['fileToUpload']['name'] );
  move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $file_upload );
}   
  // User Tabale
  $user_data = "INSERT INTO users(roles_id,name,phone,password) VALUES(2,'$name','$phone','$password' )";
  if( $conn -> query( $user_data ) === TRUE ) {
      $usersid = $conn -> insert_id;
    
        
// Insert Data into Table
 $sql="INSERT INTO doctors_work(roles_id, name, day, phone, dateTime, deptname, fileToUpload, password) VALUES
   (2,'$name', '$day','$phone', '$dateTime', '$deptname','$file_upload','$password')";

if($conn->query($sql) === TRUE){
       echo "Submit data successfully";
  }
  else{ 
    echo "Error: " . $sql . "<br>" . $conn->error;
  }  
} 
}
?>

<legend><h2>Add Doctors</h2></legend><br>

 <label for="name"><h3>Doctor Name:</h3></label>
  <input type="text" name="name" placeholder="Enter Doctor Name">
  <br><br>
  <label for="day"><h3>Day Name</h3></label>
   <select type="text" name="day">
     <option value="volvo">Select Here</option> 
   <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
  </select>
  <label for="phone"><h3>Phone Number:</h3></label>
   <input type="number" name="phone" placeholder="Enter your Phone number"><br>

  <label for="dateTime"><h3>Date and Time:</h3></label>
  <input type="datetime-local" id="datetime" name="dateTime"><br>

  <label for="name"><h3>Department Name:</h3></label>
  <select type="text" name="deptname">
    <option value="volvo">Select Here</option>
    <option value="Cardiology">Cardiology</option>
    <option value="Neurology">Neurology</option>
    <option value="Diagnostics">Diagnostics</option>
    <option value="Dental">Dental</option>
    <option value="Orthopedics">Orthopedics</option>
    <option value="ICU Department">ICU Department</option>
    <option value="Emergency">Emergency</option>
    <option value="Laboratory Medicine">Laboratory Medicine</option>
  </select>
   <label for="file"><h3>Picture:</h3></label>
   <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Enter your Date"><br>

   <label for="password"><h3>Password:</h3></label>
   <input type="password" name="password" placeholder="Enter Your Password"><br>

  <input type="submit" name="submit" value="submit">
 
  <!-- <a href="login.php">Login now</a> -->
</form>
</div>
</div> 

<!-- Footer Page Link -->
<?php include_once 'footer.php';?>
</body>
</html>