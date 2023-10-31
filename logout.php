<?php

//db connection
include_once( 'common/connection.php' );

session_start();
session_unset();
session_destroy();

header('location: index.php');

?>