<?php 
    include 'header.php';
?>
        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                         Tambah Siswa
                    </div>

                    <div class="box-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label> Nama</label>
                                <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label> NISN</label>
                                <input type="text" name="nisn" placeholder="NISN" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label> Kelas</label>
                                <select name="kelas" class="input-control" required>
                                    <option value=""> Pilih </option>
                                    <option value="A"> A</option>
                                    <option value="B"> B </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Jenis Kelamin</label>
                                <select name="jeniskelamin" class="input-control" required>
                                    <option value=""> Pilih </option>
                                    <option value="Laki-Laki"> Laki-Laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                </select>
                            </div>
                            
                            <button type="button" class= "btn" onclick="window.location = 'siswa.php'"> Kembali </button>
                            <input type= "submit" name="submit" value="Simpan" class="btn btn-blue">
                        </form>

                        <?php
                            if(isset($_POST['submit'])){
                                
                                $nama = addslashes(ucwords($_POST['nama']));
                                $nisn = $_POST['nisn'];
                                $kelas = $_POST['kelas'];
                                $jeniskelamin = $_POST['jeniskelamin'];
                                

                                $cek = mysqli_query($conn, "SELECT nisn FROM siswa WHERE nisn = '".$nisn."' ");
                                if(mysqli_num_rows($cek) > 0) {
                                    echo '<div class ="alert alert-error">Username Sudah Digunakan </div>';
                                }else{
                                    $simpan = mysqli_query($conn, "INSERT INTO siswa VALUES (
                                        null,
                                        '".$nama."',
                                        '".$nisn."',
                                        '".$kelas."',
                                        '".$jeniskelamin."',
                                        null,
                                        null
    
                                    )");
    
                                    if($simpan){
                                        echo '<div class="alert alert-success">Simpan Berhasil </div>';
                                    }else {
                                        echo 'Gagal' .mysqli_error($conn);
                                    }
                                }

                            }

                        ?>
                        
                    </div>

                </div>

            </div>
</div>
<?php include 'footer.php' ?>