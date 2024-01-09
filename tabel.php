
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once('_css.php'); ?>
    </head>
    <body>
    <?php require_once('_header_tabel.php'); ?>
    <br>
    <center>

    <div class="container">
        <table class="table table-hover example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('_koneksi.php');
                    $query = "SELECT * FROM siswa";
                    $data_siswa = mysqli_query($conn, $query);
                ?>        
                <?php $no=1; foreach ($data_siswa as $siswa) { ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $siswa ['nis']; ?></td>
                        <td><?php echo $siswa ['nama']; ?></td>
                        <td><?php echo $siswa ['jenis_kelamin']; ?></td>
                        <td><?php echo $siswa ['agama']; ?></td>
                        <td>
                        <a href="_crud.php?hapus=<?php echo $siswa['id_siswa']; ?>" onclick="return confirm('apakah anda yakin menghapus data ini?')" class="btn btn-danger badge">Delete</a>
                        <a href="form_edit.php?edit=<?php echo $siswa['id_siswa']; ?>" class="btn btn-warning badge">Edit</a>
                        </td>
                    </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
        <br><br><br>
















    <section class="w-100 p-4 pb-4">
        <table class="table table-bordered">
            <div class="container">
                <tr>
                    <th><center>NO</center></th>
                    <th>Nama Siswa</th>
                    <th>Nama Wali</th>   
                </tr>
                <tr>
                    <td><center>1</center></td>
                    <td>namamu</td>
                    <td>pakmu</td>
                <tr>
                    <td><center>2</center></td>
                    <td>namamu</td>
                    <td>pakmu</td>
                </tr>
                <tr>
                    <td><center>3</center></td>
                    <td>namamu</td>
                    <td>pakmu</td>
                </tr>
                <tr>
                    <td><center>4</center></td>
                    <td>namamu</td>
                    <td>PAKMU</td>
                </tr>
                <td><center>5</center></td>
                    <td>namamu</td>
                    <td>PAKMU</td>
                </tr>
            </div>
        </table>
        <br><br><br>
        <table border="1" cellspacing="0" cellpadding="6">
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td rowspan="3">6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
            </tr>
            <tr>
                
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
            </tr>
            <tr>
                
                <td>17</td>
                <td colspan="2">18</td>  
                <td>20</td>
            </tr>
        </table>
    </center>
    <br><br>
    <center>
</center>
<br><br><br>
</section>
<?php require_once('_footer.php'); ?>
<?php require_once('_js.php'); ?>
</body>
</html>