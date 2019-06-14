<?php
 $Name = filter_input(INPUT_POST, 'Name');
 $Vorname = filter_input(INPUT_POST, 'Vorname');
$Geburtstag= filter_input(INPUT_POST,"Geburtstag");
$Ort = filter_input(INPUT_POST, 'Ort');
$Rolle = filter_input(INPUT_POST, 'Rolle');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() '.)'
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO db (Name, Vorname,Geburtstag,Ort,Rolle)
values ('$Name','$Vorname','$Geburstag','$Ort','$Rolle')";
if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
?>