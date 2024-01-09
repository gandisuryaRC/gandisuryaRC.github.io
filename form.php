<?php require_once('_koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require_once('_css.php'); ?>
</head>
<body>
	<?php require_once('_header_form.php'); ?>
	<center><h1>Formulir Pendaftaran Osis</h1></center>
	<section class="w-100 p-4 pb-4">
	<form action="_crud.php" method="POST" enctype="multipart/form-data">
		<div class="bg-white border rounded-5">
			<section class="w-100 p-4 pb-4">
				<div class="row mb-4">
					<div class="col">
						<h3 class="form-label">Nama</h3>
							<input type="text" name="nama" placeholder="Masukkan Nama">
							<br>
						<h3 class="form-label">NIS</h3>
							<input type="text" name="nis" placeholder="Masukkan NIS">
							<br>
						<h3 class="form-label">Jenis Kelamin</h3>
							<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
							<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
							<br>
						<h3 class="form-label">Agama</h3>
							<select name="agama">
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
							</select>
							<br>
						<h3 class="form-label">Tentang Anda</h3>
							<div id="editor" style="display: none;">
								<div class="ck ck-editor__main" role="presentation">
									<div class="ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred" lang="en" dir="ltr" role="textbox" aria-label="Editor editing area: main" contenteditable="true">
										<textarea name="Tentang Anda"></textarea>
									</div>
								</div>
							</div>
							<br>
						<button type="submit" class="btn btn-primary" name="input_siswa">submit</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>
<br><br><br>
<script src="js/bootstrap.min.js"></script>
<script src="js/ckeditor.js"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
<br><br>
</section>
<?php require_once('_footer.php'); ?>
<?php require_once('_js.php'); ?>
</body>
</html>