<?php
 $con = mysqli_connect("localhost","root","","sih");

// include '../connection.inc.php';
$genreid =   $_POST['genreid'];

$txt = "SELECT * FROM items_historical WHERE gid = $gid";

$txt = mysqli_query($conn, $txts);
// $output="";
$output = '<option value="">Select State</option>';
while ($content_row = mysqli_fetch_assoc($txt)) {
    $output .= '<option value="' . $content_row['rid'] . '">' . $content_row['rcontent'] . '</option>';
}
echo $output;
