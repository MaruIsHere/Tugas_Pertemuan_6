<?php
include "konfigurasi.php";
if(isset($_POST['txLOGIN'])){
    $user = $_POST['txUSER'];
    $pass = md5($_POST['txPASS']);
    $sql = "SELECT * FROM tbuser WHERE username = '$user' AND passkey = '$pass'";
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die ("Gagal Koneksi Database");
    $result = mysqli_query($cnn,$sql);
    $nilai = mysqli_num_rows($result);
    if($nilai > 0){
        $row = mysqli_fetch_assoc($result);
        echo "Login Berhasil Selamat Datang,".$row['username'];
    }else{
        echo "Gagal Login";
    }
    
}

#tugas 6 membuat form login dan scriptnya
#dan kirim juga file database(tabel)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<table border="1px solid black">
<form method="post" action="login.php">
    <tr>
        <td>
            <h1>Login</h1>
        </td>
        <td>
        </td>
    </tr>

    <tr>
        <td>
            <label>Username :</label>
        </td>
        <td>
            <input type="text" name="txUSER">
        </td>
    </tr>

    <tr>
        <td>
            <label>Password :</label>
        </td>
        <td>
            <input type="password" name="txPASS">
        </td>
    </tr>

    <tr>
        <td>
            <button type="submit" name="txLOGIN">Login</button>
        </td>
        <td>
            <button type="submit" name="txREGISTER">Register</button>
        </td>

    </tr>
</form>
</table>
    
</body>
</html>