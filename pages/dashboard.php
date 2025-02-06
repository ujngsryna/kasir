<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Selamat Datang, <?php echo $user['nama_lengkap']; ?>!</h2>
        <p>Anda login sebagai: <strong><?php echo $user['access_level']; ?></strong></p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
