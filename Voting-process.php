<?php
$sql = "update candidates 
        set numofvotes = numofvotes + 1
        where candid = $Candid";

include('dbConnect.php');
$Candid = $_REQUEST['Candid'];

header("location: succesfully.php");


?>

<?php
$candid = $_REQUEST[''];
$vid = $_REQUEST[''];

//database connection
include('dbConnect.php');

$sql = "INSERT INTO voting (candid, vid)
 VALUES ('$candid', '$vid')";

if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:successfully.php');
?>  