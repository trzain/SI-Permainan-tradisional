<?php session_start();
    ob_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $pass     = $_POST['password'];
    $id       = $_POST['id'];

    $login=mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$pass'");
    $ketemu = mysqli_num_rows($login);
    $r=mysqli_fetch_array($login);

    if ($ketemu > 0) {

        $_SESSION[username] = $r[username];

        $_SESSION[password] = $r[password];
        
        $_SESSION[id] = $r[id];

    header('location: admin/index.php');
    }else{
    ?><script>alert("Login gagal!");document.location.href="login.php"</script>
    <?php
    echo mysqli_error();
    }
    ?>