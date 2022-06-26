	<table class="table table-bordered">
		<tr>
			<th>
				NIP 
			</th>
			<th>
				Nama 
			</th>
			<th>
				Jenis Kelamin
			</th>
			<th>
				Telepon
			</th>
			<th>
				Alamat
			</th>
			<th>
				Opsi
			</th>
		</tr>
			<?php
				include"koneksi.php";
				
				$data = mysqli_query ($koneksi, " select 
														id_pegawai,
														nama,
														jenis_kelamin,
														telepon,
														alamat
												  from 
												  pegawai 
												  order by id_pegawai DESC");
				while ($row = mysqli_fetch_array ($data))
				{
			?>
		<tr>
			<td>
				<?php echo $row['id_pegawai']; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['jenis_kelamin']; ?>
			</td>
			<td>
				<?php echo $row['telepon']; ?>
			</td>
			<td>
				<?php echo $row['alamat']; ?>
			</td>
			<td>
				<a href="#" id="edit" data-id="<?php echo $row['id_pegawai']; ?>">Edit</a> |
				<a href="#" id="hapus" data-id="<?php echo $row['id_pegawai']; ?>">Hapus</a> 
			</td>
		</tr>
		<?php
			}
		?>
	</table>