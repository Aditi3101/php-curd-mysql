<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>List Records</title>
</head>

<body>
    <?php

    include("connect.php");

    $sql = "SELECT * FROM `student`";
    $result = $conn->query($sql);

    $conn->close();
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["studentName"] ?></td>
                        <td><?= $row["age"] ?></td>
                        <td>
                            <a href="/editRecord.php?id=<?= $row["id"] ?>">Edit</a>
                        </td>
                        <td>
                            <a href="/deleteRecord.php?id=<?= $row["id"] ?>">Delete</a>
                        </td>
                    </tr>


                    <?php
                    //echo "id: " .  . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
                }
            } else { ?>

                <tr>
                    <td colspan="5">Record Not Found</td>
                </tr>

            <?php }
            ?>




        </tbody>
    </table>
</body>

</html>