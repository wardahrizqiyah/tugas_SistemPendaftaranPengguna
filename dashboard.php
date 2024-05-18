<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
        <?php
        session_start();
        if (!$_SESSION['user']) {
            header("Location: login.php");
        }
        $user = $_SESSION['user'];
        ?>
        <h1>
            <?php
            echo $user['email'];
            ?>
        </h1>

    <a href="logout.php">
        <button>
            Logout
        </button>
    </a>
</body>
</html>