<?php
    $conn = mysqli_connect("localhost:3308","root", "", "wad_project3");

    //ambil data dari tabel database/query data
    $result = mysqli_query($conn,"SELECT*FROM student");

?>

<!DOCTYPE html>
<html>
<head>
    <title>tabel holy</title>
</head>
<body>

<h1>student</h1>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>nim</th>
            <th>address</th>
        </tr>
    </thead>
    <tbody>
        <?php while( $data = mysqli_fetch_object($result) ){
            ?>
        <tr>  
            <td><?php echo $data->id; ?></td>
            <td><?php echo $data->name; ?></td>
            <td><?php echo $data->nim; ?></td>
            <td><?php echo $data->address; ?></td>
        </tr>
        <?php
        };
        ?>
    </tbody>
</table>

</body>
</html>