<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["id"]) && isset($_POST["studentName"]) && isset($_POST["age"])) {

            $hostname = "localhost";
            $username = "root";
            $password = "Abcdefgh";
            $dbname = "test";

            $conn = new mysqli($hostname, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $id = $_POST["id"];
            $studentName = $_POST["studentName"];
            $age = $_POST["age"];
            
            $sql = "INSERT INTO `student` (`id`, `StudentName`, `Age`) VALUES ('$id', '$studentName', '$age')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "Form data in insufficient to Insert Record";
        }
    }
?>