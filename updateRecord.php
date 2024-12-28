<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["id"]) && isset($_POST["studentName"]) && isset($_POST["age"])) {

            include("connect.php");


            $id = $_POST["id"];
            $studentName = $_POST["studentName"];
            $age = $_POST["age"];

            $sql = "UPDATE `student` SET `StudentName`='$studentName', `Age`='$age' WHERE `id`='$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Record Updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "Form data in insufficient to Insert Record";
        }
    }
    ?>

    <a href="/">Show All Records</a>
</body>

</html>