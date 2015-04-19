<?php
require('db/dry.php');
//--------------------------------------------------//
//                     CONFIG                       //
//--------------------------------------------------//
$host = "localhost";
$username = "root";
$password = "sophie";
$dbname = "user";

//--------------------------------------------------//
//                    CREATE_DB                     //
//--------------------------------------------------//

$db = new Database($host, $username, $password);

$db->createDB("user");

//--------------------------------------------------//
//                   CREATE_TABLE                   //
//--------------------------------------------------//

$db->connectDB($dbname);
$db->createTbl("users", 1);
$db->createTbl("products", 2);
$db->createTbl("admin", 3);

/* les deux admins */
$db->insert_admin("edgaunt", "edgaunt@student.42.fr", "student", "developer");


?>





