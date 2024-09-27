<?php 

include ('koneksi.php'); 

$query = mysqli_query($connect,"SELECT * FROM user");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
$no = 1;
?>

<html>
<body>
    <a href="add.php">Tambah Data</a>
    <table border="1">
    	<tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
    	</tr>
    	<?php foreach($results as $result) : ?>
			<tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $result['nama']?></td>
                <td><?php echo $result['email']?></td>
                <td><?php echo $result['username']?></td>
                <td><?php echo $result['password']?></td>
			</tr>
		<?php endforeach ?>
	</table>
        <form action="login.php" method="POST">
        <button class="btn kembali">Kembali Login</button>
</body>
</html>