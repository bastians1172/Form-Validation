<?php
//validasi input
function validate($data){
    //trim untuk menghapus whitespace contoh input : " halo " menjadi "halo"
    $data = trim($data);
    //stripslashes untuk menghapus backslash contoh input : "halo\n" menjadi "halo"
    $data = stripslashes($data);
    //htmlspecialchars untuk mengubah karakter khusus menjadi HTML entities contoh input : "<script>alert('halo');</script>" menjadi "&lt;script&gt;alert('halo');&lt;/script&gt;"
    $data = htmlspecialchars($data);
    return $data;
}
//deklarasi variabel and validate input
$name = validate($_POST['name']);
$email = validate($_POST['email']);
$alamat = validate($_POST['alamat']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        Nama : <input type="text" name="name"><br>
        Email : <input type="email" name="email"><br>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea><br>
        <input style="margin: 10px 100px; padding: 10px 20px;" type="submit" value="Kirim">
    </form>
    <h1>hasil input</h1>
    <?php
    if($name != "" && $email != ""){    
        echo "<h2>Nama : $name</h2>";
        echo "<h2>Email : $email</h2>";
        echo "<h2>Alamat : $alamat</h2>";
    }
    ?>
</body>
</html>
