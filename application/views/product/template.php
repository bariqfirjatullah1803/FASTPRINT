<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png"
		  href="//cdn.shopify.com/s/files/1/1764/2831/t/3/assets/favicon.png?9056248321425416510">
	<title>Fastprint</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('product') ?>">
			<img src="//cdn.shopify.com/s/files/1/1764/2831/t/3/assets/logo.png?v=3702187972821387901"
				 style="height:32px" alt="" srcset="">
		</a>
	</div>
</nav>
<main>
	<div class="container">
		<?= $this->session->flashdata('message'); ?>
		<div class="row mt-5">
			<div class="col-3">
				<div class="card mb-3">
					<div class="card-header">
						Tampilkan produk berdasarkan
					</div>
					<div class="card-body">
						<form action="<?= base_url('product') ?>" method="GET">
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select class="form-control" name="status">
									<option value="all">Semua</option>
									<option
										value="bisa dijual" <?= ($this->input->get('status') == 'bisa dijual') ? 'selected' : '' ?>>
										Bisa dijual
									</option>
									<option
										value="tidak bisa dijual" <?= ($this->input->get('status') == 'tidak bisa dijual') ? 'selected' : '' ?>>
										Tidak bisa dijual
									</option>
								</select>
								<div class="form-text text-danger"><?= form_error('status'); ?></div>
							</div>
							<button type="submit" class="btn btn-primary">Tampilkan</button>
						</form>
					</div>
				</div>
				<div class="list-group">
					<a href="<?= base_url('product') ?>"
					   class="list-group-item list-group-item-action <?= ($active == 'list') ? 'active' : '' ?>"
					   aria-current="true">
						List Product
					</a>
					<a href="<?= base_url('product/simpan') ?>"
					   class="list-group-item list-group-item-action <?= ($active == 'create') ? 'active' : '' ?>">Create
						Product</a>
					<a href="<?= base_url('resource/simpan') ?>"
					   class="list-group-item list-group-item-action">Generate
						Product</a>
				</div>
			</div>
			<div class="col-9">
				<?= $contents ?>
			</div>
		</div>

	</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
<script>
	const input = document.getElementById('harga');

	input.addEventListener('input', () => {
		let value = input.value.trim();

		if (value.startsWith('0')) {
			value = value.slice(1);
		}
		value = value.replace(/\D/g, '');

		input.value = value;
	});
</script>
</body>
</html>
