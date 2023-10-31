<?php  include('common/connection.php'); 
error_reporting(0); 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Appointment</title>
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
      .form {
    background-color: #919B9B;
    overflow: hidden;
    border-radius: 5px;
}
.form form  h2 {
    width: 50%;
    padding: 12px 20px;
    background-color: #203364;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 20px;
    color: white;
}
   .form form [type=submit]:hover {
    background-color: aqua;
    color: black; 
  }
     .form form{
        margin-left:500px;
      }
      .form form  [type=submit]{
        background-color: #203364;
        color: white;
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
  .form h3 {
    color: #082354;
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
<form method="POST" action="add-patients.php" enctype="multipart/form-data"> 

<!-- PHP Code For Insart Data for Database -->
<?php 

if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['date'])){
        
       $roles_id= $_POST ['roles_id'];
       $name= $_POST ['name'];
       $phone= $_POST ['phone'];
       $email= $_POST ['email'];
       $date= $_POST ['date'];
       $subject= $_POST ['subject'];
       $password = md5($_POST['password']??"12345");

       // User Tabale
       $user_data = "INSERT INTO users(roles_id,name,phone,password) VALUES(3,'$name','$phone','$password' )";
       if( $conn -> query( $user_data ) === TRUE ) {
           $usersid = $conn -> insert_id;
        
        // Insert Data into Table
         $sql="INSERT INTO patientserial (roles_id, name, phone, email, date, subject,password) VALUES
         (3,'$name','$phone', '$email', '$date', '$subject','$password')";

if($conn->query($sql) === TRUE){
       echo "Submit data successfully";
  }
  else{
    echo ( "Data Insert Error!" . $conn -> error);
  }  
}
}
?>

<legend><h2>Booking Form</h2></legend><br>

 <label for="name"><h3>Patient Name:</h3></label>
  <input type="text" name="name" placeholder="Enter Your Name">
  <br><br>
  <label for="phone"><h3>Phone Number:</h3></label>
   <input type="number" name="phone" placeholder="Enter your Phone number"><br>

   <label for="email"><h3>E-mail:</h3></label>
   <input type="email" name="email" placeholder="Enter Your Email"><br>

   <label for="date"><h3>Date:</h3></label>
   <input type="date" name="date" placeholder="Enter your Date"><br>
   <label for="subject"><h3>Subject:</h3></label>
  <textarea id="subject" name="subject" placeholder="Write your Subject..." style="height:77px"></textarea>
    <br>

    <label for="password"><h3>Password:</h3></label>
   <input type="password" name="password" placeholder="Enter Your Password"><br>

  <input type="submit" name="submit" value="submit">
 
  <!-- <a href="login.php">Login now</a> -->
</form>
</div>
</div> 

<!-- Header Page Link -->
<?php include_once 'footer.php';?>
</body>
</html>