<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<?php
    include('includes/header.php');
?>

<body>


    <?php
    if (!isset($_SESSION['login'])) {

        if (isset($_POST['action'])) {
            $login = 'Danrlei';
            $password = '1234';

            $loginForm = $_POST['login'];
            $passwordForm = $_POST['password'];

            if ($login == $loginForm && $password == $passwordForm) {
                $_SESSION['login'] = $login;
                header('Location: index.php');
                exit();
            } else {
                echo 'Usuário ou senha inválidos';
            }
        }

        include('login.php');
    } else {
        if (isset($_GET['logout'])) {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
            exit();
        }
        include('home.php');
    }
    ?>

</body>



<?php
    include('includes/footer.php');
?>

</html>