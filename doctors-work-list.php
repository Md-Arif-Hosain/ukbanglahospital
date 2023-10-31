<?php
include( 'common/connection.php' );

// session_start();
// if(isset($_SESSION['user'])){

// } else{
//   header("location: login.php");
// }
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
.patientlist h2 {
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

#customers tr:nth-child(even) {
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
.filter select[ type = deptname ] {
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
    $sql = "DELETE  FROM doctors_work WHERE id='$id'";
    $result = $conn->query( $sql );
}

//Add DB TO Table
$sql = 'SELECT * FROM doctors_work';
$result = $conn->query( $sql );

//Filter Query
if ( isset( $_GET[ 'deptname' ] ) ) {
    $filterDate = $_GET[ 'deptname' ];
    $sql = "SELECT * FROM doctors_work WHERE deptname='$filterDate'";
    $result = $conn->query( $sql );
}

?>

<div class = 'patientlist'>
<h1>UK-Bangla Doctors Work List</h1>
<h2><a href="add-doctors.php">Add Doctor</a></h2>
<!-- Filter Search Form -->
<form class = 'filter' action = 'doctors-work-list.php' method = 'get'>
<span> Search Your DeptName:  </span>
<select type="deptname" name="deptname">
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
  <input type = 'submit' name = 'submit' value = 'Search'>
</form>
<!-- Start Table -->
<table id = 'customers'>
<thead>
<tr>
<th>id</th>
<!-- <th>roles_id</th> -->
<th>Doctors Name</th>
<th>Day Name</th>
<th>DateTime</th>
<th>Dept Name</th>
<th>Picture</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php

if ( $result->num_rows > 0 ) {
    //output data of each row
    $id=1;
    while ( $row = $result->fetch_OBJECT() ) {
       
        $time=new DateTime($row->dateTime);
        $m=$time->format("i");
        $am=(int)$time->format("H");
        $minus=$am-12;
        $s=$time->format('d-m-Y');
        $t=$am>12?"$minus:$m pm":"$am:$m am";
        $total="$s $t";
        ?>
        <tr>
        <td scope = 'row'><?php echo $id++; ?></td>
        <!-- <td scope = 'row'><?php echo $row->roles_id ?></td> -->
        <td scope = 'row'><?php echo $row->name ?>
        </td>
        <td scope = 'row'> <?php echo $row->day ?>
        </td>
        <td scope = 'row'><?php echo $total ?>
        </td>
        <td scope = 'row'> <?php echo $row->deptname ?>
        </td>
        <td scope = 'row'><img src="<?php echo $row ->fileToUpload;?>"  width="30"/></td>
        <td scope = 'row' class="btn">

        <a href = "view-doctors.php?id=<?php echo $row->id; ?>"><button>View</button></a>

        <!-- Delete Form-->
        <?php if(isset($_SESSION['roles_id']) && $_SESSION['roles_id']==2) { ?>
        <a href = "edit-doctors.php?id=<?php echo $row->id; ?>"><button>Edit</button></a>
        <form action = '' method = 'post'>
        <input type = 'hidden' value = "<?php echo $row->id; ?>" name ='id'>
        <input type = 'submit' onclick ='return checkdelete()' value = 'delete' name = 'delete'>
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