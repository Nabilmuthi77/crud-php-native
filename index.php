<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Native</title>
</head>
<body>
    <h2>Data Users</h2>
    <a href="tambah.php">+ Tambah User</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM users");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['name']; ?></td>
            <td><?= $d['email']; ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin hapus?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
