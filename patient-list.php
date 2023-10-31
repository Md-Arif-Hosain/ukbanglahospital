
<?php

include( 'common/connection.php' );

?>

<!DOCTYPE html>
<link rel = 'icon' href = 'logo/logo1-r.png' type = 'image'>
<html>
<head>
<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin: 0 auto;
}

.patientlist {
    margin:0px 0px 40px 0px;
    text-align: center;
}
.patientlist h1 {
    text-align: center;
    color: white;
    background-color: #04AA6D;
    padding: 10px;
    margin: -7px 0px;
    margin:0 auto;
    width: 79%;
}

#customers td,
#customers th {
    border: 2px solid black;
    padding: 2px;
}

#customers tr:nth-child( even ) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}
#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #578574;
    color: white;
}
.filter {
    text-align: center;
    padding: 10px;
    width: 79%;
    background-color: #04AA6D;
    margin: 0 auto;
}
.filter input[ type = date ] {
    width: 40%;
    padding: 10px;
}
.filter input[ type = submit ] {
    width: 79px;
    padding: 9px;
}
.filter span {
    color:white;
    font-size: 22px;
}
.btn button {
    padding: 2px;
    color: white;
    background-color: #04AA6D;
    margin: 1px;
    border: none;
}
.btn input {
    padding: 2px;
    color: white;
    background-color: #04AA6D;
    margin: 1px;
    border: none;
}
.btn{
    display: flex;
}
</style>
</head>

<body>
<?php include( 'topbar.php' );

?>
<?php include( 'header.php' );
?>
<?php

//Delete Query
if ( isset( $_POST[ 'delete' ] ) && isset( $_POST[ 'id' ] ) && !empty( $_POST[ 'id' ] ) ) {
    $id = $_POST[ 'id' ];
    echo $id;
    $sql = "DELETE  FROM patientserial WHERE id='$id'";
    $result = $conn->query( $sql );
    
}

//Add DB TO Table
$sql = 'SELECT * FROM patientserial';
$result = $conn->query( $sql );

//Filter Query
if ( isset( $_GET[ 'date' ] ) ) {
    $filterDate = $_GET[ 'date' ];
    $sql = "SELECT * FROM patientserial WHERE date='$filterDate'";
    $result = $conn->query( $sql );
}

?>

<div class = 'patientlist'>
<h1>UK-Bangla Patient List</h1>
<!-- Filter Search Form -->
<form class = 'filter' action = 'patient-list.php' method = 'get'>
<span> Search Your Serial Date:  </span> <input type = 'date' name = 'date'><input type = 'submit' name = 'submit' value = 'Search'>
</form>
<!-- Start Table -->
<table id = 'customers'>
<thead>
<tr>
<th>id</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Date</th>
<th>Subject</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php
$id=1;
if ( $result->num_rows > 0 ) {
    //output data of each row
    while ( $row = $result->fetch_OBJECT() ) {
        ?>
        <tr>
        <td scope = 'row'><?php echo $id++; ?></td>
        <td scope = 'row'><?php echo $row->name ?>
        </td>
        <td scope = 'row'> <?php echo $row->phone ?>
        </td>
        <td scope = 'row'><?php echo $row->email ?>
        </td>
        <td scope = 'row'> <?php echo $row->date ?>
        </td>
        <td scope = 'row'><?php echo $row->subject ?>
        </td>
        <td scope = 'row' class="btn">
        <a href = "view-patient.php?id=<?php echo $row->id; ?>"><button>View</button></a>

        <!-- Delete Form-->
        <?php if(isset($_SESSION['roles_id']) && $_SESSION['roles_id']==2) { ?> 
        <a href = "edit-patient.php?id=<?php echo $row->id; ?>"><button>Edit</button></a>
        <form action = '' method = 'post'>
        <input type = 'hidden' value = "<?php echo $row->id; ?>" name = 'id'>
        <input type = 'submit' onclick ='return checkdelete()' value = 'delete' name = 'delete'>
        <!-- return -->
        </form>
        <?php } ?>
        </td>
        </tr>
        <?php
    }
}

?>

</tbody>
</table>
</div>
<?php include( 'footer.php' );
?>

<script>
    function checkdelete(){
        return confirm('Are you went to Delete your Serial');
    }
</script>
</body>

</html>