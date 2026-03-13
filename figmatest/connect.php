<?php

$yourname = $_POST['yourname'];
$youremail = $_POST['youremail'];
$yourproject = $_POST['yourproject'];
$rating = $_POST['rating'];
$yournarrative = $_POST['yournarrative'];

$conn = new mysqli ('localhost', 'root', '', 'amanmediaclient');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into clientform(yourname, youremail, yourproject, rating, yournarrative)
        values (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $yourname, $youremail, $yourproject, $rating, $yournarrative );
    $stmt->execute();
    echo "registration successfull";
    $stmt->close();
    $conn->close();
}

?>