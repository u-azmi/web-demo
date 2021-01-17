<?php
require_once("koneksi.php");
include('./header.php');

$query = "SELECT * FROM mahasiswa";
$stmt = $db->prepare($query);
$stmt->execute();
$mahasiswa=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
 	<section class="section1">
        <div class="container" style="text-align: center;">
		 	<h2>List Users</h2>
		 	<table border="1" style="margin-right: auto; margin-left: auto;">
		 		<tr>
		 			<th> ID </th>
		 			<th> Nomor Identitas </th>
		 			<th> Nama </th>
		 			<th> Alamat </th>
		 			<th> Prodi </th>
		 			<th> Foto Profil </th>
		 			<th> Action </th>
		 		</tr>
		 		<?php foreach ($mahasiswa as $row): ?>
		 		<tr>
		 			<td><?=$row['id'];?></td>
					<td><?=$row['nim'];?></td>
					<td><?=$row['nama'];?></td>
					<td><?=$row['alamat'];?></td>
					<td><?=$row['jurusan'];?></td>
					<td><img src="./img/<?=$row['gambar'];?>" width="150" height="200"></td>
					<td><a href='form_edit.php?id=<?=$row['id'];?>'> Edit </a>
					<a href='delete.php?id=<?=$row['id'];?>'> Delete </a></td>
		 		</tr>
		 		<?php endforeach; ?>
		 	</table>
		 </div>        
    </section>
</body>
<?php include('./footer.php') ?>