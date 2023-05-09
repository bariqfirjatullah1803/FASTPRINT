<table class="table table-striped text-center">
	<thead>
	<tr>
		<th>#</th>
		<th>Nama Product</th>
		<th>Harga</th>
		<th>Kategori</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php $no = $this->input->get('per_page') + 1;
	foreach ($product as $item): ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $item['nama_produk'] ?></td>
			<td><?= $item['harga'] ?></td>
			<td><?= $item['kategori'] ?></td>
			<td><?= $item['status'] ?></td>
			<td>
				<div class="btn-group" role="group">
					<a href="<?= base_url('product/edit/') . $item['id_produk'] ?>"
					   class="btn btn-sm btn-warning inline">Edit</a>
					<a href="<?= base_url('product/delete/') . $item['id_produk'] ?>"
					   class="btn btn-sm btn-danger inline"
					   onclick="return confirm(' Apakah anda yakin ingin menghapus data?')">Delete</a>
				</div>
			</td>
		</tr>
		<?php $no++;endforeach; ?>
	</tbody>
</table>
<?= $this->pagination->create_links(); ?>
