<?php  include('common/connection.php'); 
include('functions.php');
 ?>

<!DOCTYPE html>
<link rel="icon" href="logo/logo1-r.png" type="image">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View page</title>
  <link rel="icon" href="logo/logo1-r.png" type="image">
    <!-- FONT AWSOME CDN -->

  <style>
  .profile .col-6 {
    text-align: center;
    background-color: #1b5895cc;
    color: white;
    margin: 0px 20%;
    padding: 40px 0px;
    line-height: 26px;
}
.profile img{
  margin: 2px;
}
  </style>
</head>
<body>  
<!-- Header and Topbar link -->
<?php include('topbar.php'); ?>
<?php include('header.php'); ?>

<?php
    
// Veiw Query 
$data=[];
 //MSG Success
 if(isset($_GET['id']) && !empty ($_GET['id']) =='success'){
    $id= $_GET['id'];
 

//Select Tabale 
 $sql= "SELECT * FROM patientserial where id=$id";
 $result = $conn->query($sql);
 "$result->num_rows";

 if($result->num_rows==1){
    $data= $result->fetch_object();
 }

}
 ?>
    
     <div class="profile">
        <div class="col-12">
            <div class="img">
            <div class="col-6">
            <h1 style="margin:10px;">Patient Serial View</h1>
            <img src="img/13.jpg" width="100" height="100" alt="">
            <h2>ID:<?php echo "$data->id"?></h2>
            <h2>Name: <?php echo $data->name .' ' . $data->name; ?></h2>
            <h2>Phone: <?php echo "$data->phone" ?></h2>
            <h2>Email: <?php echo "$data->email" ?></h2>
            <h2>Date:<?php echo "$data->date" ?></h2>
            <h2>Subject: <?php echo "$data->subject" ?></h2>
    </div>
            </div>
        </div>
     </div>

<!-- Footer Page Link -->
<?php include_once 'footer.php';?>

</body>
</html>