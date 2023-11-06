<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $date = $_POST["date"];
    $time= $_POST["time"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "try";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO tbl_date (date,time) VALUES ('$date','$time')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
