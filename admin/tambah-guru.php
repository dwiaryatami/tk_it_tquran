<?php 
    include 'header.php';
?>
        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                         Tambah Data Guru
                    </div>

                    <div class="box-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Nama</label>
                                <input type="text" name="nama" placeholder="Nama" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label> NIP</label>
                                <input type="text" name="nip" placeholder="NIP" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label> Gambar</label>
                                <input type="file" name="foto_guru" class="input-control" required>
                            </div>

                            <button type="button" class="btn" onclick="window.location = 'informasi.php'"> Kembali </button>
                            <input type="submit" name="submit" value="Simpan" class="btn btn-blue">

                        </form>

                        <?php
                            if(isset($_POST['submit'])){

                              //  print_r($_FILES['gambar']);

                                $nama       =addslashes(ucwords($_POST['nama']));
                                $nip        =addslashes($_POST['NIP']);
                                
                            
                                $filename =$_FILES['foto_guru']['name'];
                                $tmpname =$_FILES['foto_guru']['tmp_name'];
                                $filesize =$_FILES['foto_guru']['size'];

                                $formatfile     =pathinfo( $filename, PATHINFO_EXTENSION);
                                $rename         ='data_guru'.time().'.'.$formatfile;

                                $allowedtype    =array('png','jpg','jpeg','gif');
                                if(!in_array($formatfile, $allowedtype)){
                                    echo '<div class="alert alert-error">Format File Tidak Didukung</div>';

                                }elseif($filesize > 1000000){

                                    echo '<div class="alert alert-error">Ukuran File Tidak Boleh Lebih Dari 1MB</div>';
                                    
                                }else{
                                    move_uploaded_file($tmpname, "../uploads/data_guru/".$rename);
                               $simpan = mysqli_query($conn, "INSERT INTO data_guru VALUES (
                                   null,
                                   '".$nama ."',
                                   '".$nip."',
                                   '".$rename."'
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