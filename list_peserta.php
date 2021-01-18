<?php
require_once("koneksi.php");
include('./header.php');
session_start();

$query = mysqli_query($conn, "SELECT * FROM peserta");
$peserta = $query->fetch_all(MYSQLI_ASSOC);
?>
<div class="container">
	<div class="content">
		<div class="show">
			<h1>Daftar Peserta</h1>
			<table>
				<tr>
					<th> ID </th>
					<th> No Peserta </th>
					<th> Nama </th>
					<th> Bio </th>
					<th> Foto Profil </th>
					<th> Action </th>
				</tr>
				<?php foreach ($peserta as $row): ?>
				<tr>
					<td><?=$row['id'];?></td>
					<td><?=$row['no_peserta'];?></td>
					<td><?=$row['nama'];?></td>
					<td><?=$row['bio'];?></td>
					<td><img src="./img/<?=$row['gambar'];?>" width="200" height="200"></td>
					<td>
						<a href='form_edit_peserta.php?id=<?=$row['id'];?>'> Edit </a>
						<a href='delete.php?id=<?=$row['id'];?>'> Delete </a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
<?php include('./footer.php') ?>