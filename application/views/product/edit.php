<form action="<?= base_url('product/edit/') . $product['id_produk'] ?>" method="POST">
	<div class="mb-3">
		<label class="form-label">Nama Product</label>
		<input type="text" class="form-control" name="nama_produk" value="<?= $product['nama_produk'] ?>">
		<div class="form-text text-danger"><?= form_error('nama_produk'); ?></div>
	</div>
	<div class="mb-3">
		<label class="form-label">Harga</label>
		<input type="text" class="form-control" name="harga" id="harga" value="<?= $product['harga'] ?>">
		<div class="form-text text-danger"><?= form_error('harga'); ?></div>
	</div>
	<div class="mb-3">
		<label class="form-label">Kategori</label>
		<input type="text" class="form-control" name="kategori" value="<?= $product['kategori'] ?>">
		<div class="form-text text-danger"><?= form_error('kategori'); ?></div>
	</div>
	<div class="mb-3">
		<label class="form-label">Status</label>
		<select class="form-control" name="status">
			<option value="bisa dijual" <?= ($product['status'] == 'bisa dijual') ? 'selected' : '' ?>>Bisa dijual
			</option>
			<option value="tidak bisa dijual" <?= ($product['status'] == 'tidak bisa dijual') ? 'selected' : '' ?>>Tidak
				bisa
				dijual
			</option>
		</select>
		<div class="form-text text-danger"><?= form_error('status'); ?></div>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
