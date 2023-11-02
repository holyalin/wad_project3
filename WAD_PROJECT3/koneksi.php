<?php
//koneksi ke database
$conn = mysqli_connect("localhost:3308","root", "", "wad_project3");

//ambil data dari tabel database/query data
$result = mysqli_query($conn,"SELECT*FROM student");

//var_dump($result);
//ambil data (fetch) data dari object %result
?>