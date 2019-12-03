<?php
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    $koneksi = mysqli_connect('localhost','root','','informatika');

    $username=$_POST['username'];
    $password=$_POST['password'];
    $submit=$_POST['submit'];

    if($submit){
        $sql="select * from user where Username='$username' and Password='$password'";
        $query=mysqli_query($koneksi,$sql);
        $cek=mysqli_num_rows($query);
        if($cek>0){
            $row = mysqli_fetch_assoc($query);
            if($row['status']=='Administrator'){
                $_SESSION['username']=$row['username'];
                $_SESSION['status']='Administrator';
                header("location:admin.php");
            }elseif($row['status']=='Member'){
                $_SESSION['username']=$row['username'];
                $_SESSION['status']='Member';
                header("location:member.php");
            }
        }else{
            echo "<script>
                    alert('Login Gagal, silahkan coba lagi');
                    document.location='tugas.php';
                  </script>";
        }
    }
?>
<!--<form method='POST' action='percobaan3.php'>
    <p align='center'>
        Username : <input type="text" name="username" id="username"><br>
        Password : <input type="password" name="password" id="password">
        <input type="submit" value="submit" name="submit">
    </p>
</form>-->
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="keren.css" type="text/css">
</head>
<body>

    <br>
    <div class="header1">
    <h1><b>W E L C O M E</b></h1>
    </div>
    <div class="kotak_login">
        <p class="tulisan_login">LOG-IN</p>
        <form action="tugas.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" id="username" class="form_login" placeholder="Username..">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password..">
            <input type="submit" value="Masuk" name="submit" id="submit" class="tombol_login">
            <br><br>
        </form>
    </div>
</body>
</html>