<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>

<body>
    <?php $id = $_GET["id"] ?>
    <form method="post" action="deleteStudent.php">
        <p>Do you really want to delete?</p>
        <p>Record Id: <?= $id ?></p>

        <input type="hidden" name="id" value="<?= $id ?>" />

        <button type="submit">Delete</button>
        <a href="/">Do not Delete</a>
    </form>
</body>

</html>