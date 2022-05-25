<html lang="en">
<head>
    <title>CETAK PENGGUNA</title>
</head>
<body>
    <center><h1 >CETAK PENGGUNA KONTAK</h1></center>
<?php
include "koneksi.inc.php";
$cetak = mysqli_query($conn, "SELECT * from kontak ORDER BY nama") or die("Proses cetak gagal" );

    echo "<table width='100%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Pesan</th>";
    $no=1;
    foreach($cetak as $hasil){
    echo "<tr>
    <td>$no</td>
    <td>".$hasil['nama']."</td>
    <td>".$hasil['jkel']."</td>
    <td>".$hasil['email']."</td>
    <td>".$hasil['alamat']."</td>
    <td>".$hasil['kota']."</td>
    <td>".$hasil['pesan']."</td> 
    </tr>";
    $no++;
}
echo "</table>";
?>
<a text-align="justify" href="index.php">Kembali</a>
</body>
</html>