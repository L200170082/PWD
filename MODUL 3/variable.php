<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable</title>
</head>
<body>
    <h1>Guest Book</h1>
    <form action="variable.php" method="POST">
        <p>Name : <input type="text" name="name" size="20"></p>
        <p>E-mail : <input type="text" name="email" size="30"></p>
        <p>Komentar : <textarea name="komentar" id="komentar" cols="30" rows="10"></textarea></p>
        <p><input type="submit" value="Kirim" name="submit"></p>
    </form>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];
        $submit = $_POST['submit'];
        
        if ($submit) {
            # code...
            echo ("<br>Name : $name");
            echo ("<br>E-mail : $email");
            echo ("<br>Comments : $komentar");
        }
        ?>
</body>
</html>