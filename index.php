<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Bảng Điều Khiển</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA" />
	<link href="/css/bootstrap-icons.min.css" rel="stylesheet"
		integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ" />
	<style>
		.card-header, .btn {
			font-weight: 700 !important;
		}
	</style>
</head>

<body>
	<div class="container-xxl mt-3">
		<div class="row">
			<div class="col">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					Xây dựng bởi T.M.T.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Đóng"></button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="alert alert-danger d-flex align-items-center flex-shrink-0" role="alert">
					<i class="bi bi-exclamation-triangle-fill me-2"></i>
					<div>Trang đang trong quá trình bảo trì!</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="/" method="post" class="card" id="login">
					<div class="card-header text-capitalize d-flex justify-content-between align-items-center">
						Đăng Nhập
						<button type="submit" class="btn btn-primary text-uppercase">TIẾP TỤC</button>
					</div>
					<div class="card-body row g-3">
						<div class="col">
							<div class="form-floating">
								<input type="text" class="form-control" id="username" name="username" placeholder="" autocomplete="username" required>
								<label for="username" class="form-label">Tên đăng nhập</label>
							</div>
						</div>
						<div class="col">
							<div class="form-floating">
								<input type="password" class="form-control" id="password" name="password" placeholder="" autocomplete="current-password"
									required>
								<label for="password" class="form-label">Mật khẩu</label>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="/js/bootstrap.bundle.min.js"
		integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A"></script>
</body>

</html>