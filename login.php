<?php
//db connection
include_once( 'common/connection.php' )
?>
<!DOCTYPE html>
<html>
<head>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1'>
<style>
.bda {
    font-family: Arial, Helvetica, sans-serif;
}
.containerlogin input[ type = number ], input[ type = password ] {
    width: 95%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.containerlogin button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 95%;
}

.containerlogin button:hover {
    opacity: 0.8;
}

.containerlogin {
    padding: 100px 16px;
    margin:0 auto;
    background-color: lightblue;
}

.containerlogin h2 {
    text-align: center;
    color: green;
}

.meleft {
    background-color: white;
    margin:0 auto;
    border: 2px solid green;
    padding: 15px;
    width: 500px;
    border-radius: 15px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and ( max-width: 556px ) {
    .meleft {
        width: 373px;
    }
}
@media screen and ( max-width: 420px ) {
    .meleft {
        width: 270px;
    }
}
</style>
</head>
<body>
<!-- Topbar -->
<?php include_once 'topbar.php';
?>
<!-- Header -->
<?php 
// include_once 'header.php';
?>
<?php
if ( isset( $_SESSION[ 'phone' ] ) ) {
    header( "location: index.php" );

   
} else {

    if ( isset( $_POST[ 'submit' ] ) ) {
        if ( isset( $_POST[ 'phone' ] ) && !empty ( $_POST[ 'phone' ] ) && isset( $_POST[ 'password' ] ) && !empty ( $_POST[ 'password' ] )) {

           $phone = $_POST[ 'phone' ];
           $password = md5($_POST['password']??"12345");

            $sql = "SELECT * From users where phone='$phone' and password='$password'";
            $result = $conn->query( $sql );

            if ( $result->num_rows==1 ) {
                $data = $result->fetch_object();
                $_SESSION[ 'phone' ] = $data->phone;
                $_SESSION[ 'roles_id' ] = $data->roles_id;
                 header( 'location: index.php' );

            } else {
                echo '<h2 style="color:red; text-align:center;">Phone number and Password not match.<h2>';
            }

         } 
    }
}

?>

<!-- Login PHP Query -->
<form action ='login.php' method = 'post'>

<div class = 'containerlogin bda'>

<div class = 'meleft'>
<h2>Login Form</h2>
<label for = 'phone'><b>Phone Number</b></label><br>
<input type = 'number' placeholder = 'Enter Phone Number' name = 'phone' required><br>

<label for = 'password'><b>Password</b></label><br>
<input type = 'password' placeholder = 'Enter Password' name = 'password' required>

<button type = 'submit' name='submit' value = 'submit'>Login</button>
<a href="logout.php">Logout</a>
</div>
</div>

</form>

<!-- Header -->
<?php include_once 'footer.php';
?>
</body>
</html>
