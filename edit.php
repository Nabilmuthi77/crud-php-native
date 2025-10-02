<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit Data User</h2>
    <form method="post" action="">
        Nama: <input type="text" name="name" value="<?= $d['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= $d['email']; ?>" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($koneksi, "UPDATE users SET name='$name', email='$email' WHERE id='$id'");
    header("Location: index.php");
}
?>
