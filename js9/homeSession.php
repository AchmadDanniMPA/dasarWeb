<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status'] == 'login'){
        echo "Selamat datang " . $_SESSION['username'];
        ?>
        <br> <a href="sessionLogout.php">Log out</a>
        <?php
    } else {
        echo "anda belum login, silahkan ";?>
        <a href="sessionLoginForm.html">Log in</a>
    <?php
    }
    ?>
</body>
</html>