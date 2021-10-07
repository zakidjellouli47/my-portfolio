<?php
// date_default_timezone_set("Europe/Berlin");
header('Access-Control-Allow-Origin: *');
header("Content-Type: text/plain");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cv2";

//Connect to MySQL Server  
$dbhandle = mysqli_connect($dbhost, $dbuser, $dbpass);

//Select Database  
mysqli_select_db($dbhandle, $dbname) or die("Could not select cv");

$quoi = $_GET['quoi'];
$quoi = mysqli_real_escape_string($dbhandle, $quoi);

if ($quoi == 'skills') {
    //build query  
    $query = "SELECT * FROM skills";

    //Execute query  
    $qry_result = mysqli_query($dbhandle, $query);

    //Build Result String  
    $display_string = "";

    // Insert a new row in the table for each skill returned  
    while ($row = mysqli_fetch_array($qry_result, MYSQLI_ASSOC)) {
        $display_string .= "<div class=\"comp\"> <p>$row[skills]</p>";
        $display_string .= "<div class=\"conteneur-barre\">";
        $display_string .= "<span class=\"barre c$row[level]\"></span></div></div> ";
    }
    mysqli_free_result($qry_result);
    // error_log($display_string, 0);  
    echo $display_string;
}

