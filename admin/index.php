<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ./index.html");
    exit;
}

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "berhasil") {
        echo "<script>alert('Selamat datang Admin!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Trans Banyumas<< /title>
</head>

<body>
    <a href="logout.php">logout</a>
</body>

</html>