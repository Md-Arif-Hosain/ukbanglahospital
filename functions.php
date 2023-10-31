<?php
//db connection
require_once('common/connection.php');
?>

<?php

function getPatients(){
    global $conn;
    $sql="SELECT * FROM patientserial";
    return $result=$conn->query($sql);
}

function getPatient($id){   
    global $conn;
    $sql="SELECT * FROM patientserial where id=$id";
    return $result=$conn->query($sql);
}

function updatePatient(){
    if( isset( $_POST['update'])){
    global $conn;
    $id =$_POST['id'];
    $name =$_POST['name'];
    $phone = $_POST['phone'];
   $email = $_POST ['email'];
   $date = $_POST['date'];
   $subject =$_POST['subject'];

   $sql="UPDATE patientserial SET name='$name', phone='$phone', email='$email', date='$date', subject='$subject' where id=$id";
   if($conn->query($sql)){
      echo "<h2>Data Successfully Update</h2>";
   }else{
    echo "<h2>Sorry Something is worng</h2>";
   }
}
}


//Edit Doctors List 
function getDoctors(){
    global $conn;
    $sql="SELECT * FROM doctors_work";
    return $conn->query($sql);
}

function getDoctor($id){   
    global $conn;
    $sql="SELECT * FROM doctors_work where id=$id";
    return $conn->query($sql);
}

function updateDoctors(){
    if( isset( $_POST['update'])){

         // Upload File 
    $target_dir = "uploads/";
    if( isset( $_FILES['fileToUpload'] ) ) {
        $file_upload = $target_dir . time() . "_" . basename( $_FILES['fileToUpload']['name'] );
        move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $file_upload );
    }
    
    global $conn;
    $id =$_POST['id']??"";
    // $roles_id =$_POST['roles_id']??"";
    $dname =$_POST['dname'];
    $day = $_POST['day'];
   $dateTime = $_POST ['dateTime'];
   $deptname = $_POST['deptname'];
   $fileToUpload =$_POST['fileToUpload']??"";

   $sql="UPDATE doctors_work SET dname='$dname', day='$day', dateTime='$dateTime', 
   deptname='$deptname', fileToUpload='$fileToUpload' where id=$id";
   
   if($conn->query($sql)){
      echo "<h2>Data Successfully Update</h2>";
   }else{
    echo "<h2>Sorry Something is worng</h2>";
   }
}
}


