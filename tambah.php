<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Person</title>
</head>
<body>
    <h2>Tambah Data Person</h2>
    <form method="post" action="">
        Nama: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($koneksi, "INSERT INTO person (name, email) VALUES('$name','$email')");
    header("Location: index.php");
}
?>
