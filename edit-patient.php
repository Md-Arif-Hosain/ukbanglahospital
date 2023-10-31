
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
 
  $queryData = getPatient($id);
  $data = $queryData->fetch_object();
}else{
  header("location: patient-list.php");
  //die();
  
}

//Update Teacher Query
if(isset($_POST['update']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])){
  updatePatient();

}
 ?>

<legend><h2>Booking Form</h2></legend><br>

 <label for="name">Patient Name:</label><br>
 <input type="hidden" value="<?php echo $data->id; ?>" id="name" name="id" placeholder="Enter Your Name">
  <input type="text"  value="<?php echo $data->name; ?>" name="name" placeholder="Enter Your Name">
  <br><br>
  <label for="phone">Phone Number:</label><br>
   <input type="number"  value="<?php echo $data->phone; ?>" name="phone" placeholder="Enter your Phone number"><br>

   <label for="email">E-mail:</label><br>
   <input type="email"  value="<?php echo $data->email; ?>" name="email" placeholder="Enter Your Email"><br>

   <label for="date">Date:</label><br>
   <input type="date"  value="<?php echo $data->date; ?>" name="date" placeholder="Enter your Date"><br>
   <label for="subject">Subject:</label><br><br>
    <textarea id="subject" type="text"  value="<?php echo $data->subject; ?>" name="subject" placeholder="Write your Subject..." style="height:77px"></textarea>
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