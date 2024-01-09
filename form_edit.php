<?php 
    require_once('_koneksi.php');
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $query = "SELECT*from siswa where id_siswa='$id'";
        $data_siswa = mysqli_query($conn, $query);
    }
?>
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
    <?php foreach ($data_siswa as $siswa) { ?>
	<form action="_crud.php" method="POST">
		<div class="bg-white border rounded-5">
			<section class="w-100 p-4 pb-4">
				<div class="row mb-4">
					<div class="col">
						<h3 class="form-label">Nama</h3>
                            <input type="hidden" name="id_siswa" value="<?php echo $siswa['id_siswa'] ?>">
							<input type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $siswa['nama'] ?>">
							<br>
						<h3 class="form-label">NIS</h3>
							<input type="text" name="nis" placeholder="Masukkan NIS" value="<?php echo $siswa['nis']?>">
							<br>
						<h3 class="form-label">Jenis Kelamin</h3>
							<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
							<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
							<br>
						<h3 class="form-label">Agama</h3>
							<select name="agama">
								<option value="Islam"<?php if ($siswa["agama"]=='islam') {echo"selected"; }?>>Islam</option>
								<option value="Kristen"<?php if ($siswa["agama"]=='kristen') {echo"selected"; }?>>Kristen</option>
								<option value="Hindu"<?php if ($siswa["agama"]=='hindu') {echo"selected"; }?>>Hindu</option>
							</select>
							<br>
						<button type="submit" class="btn btn-primary" name="edit_siswa">simpan</button>
					</div>
				</div>
			</div>
		</div>
	</form>
    <?php } ?>
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