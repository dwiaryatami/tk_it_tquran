<?php 
    include 'header.php';
?>
 <script>
      tinymce.init({
        selector: '#myarea'
      });
    </script>


        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                         Identitas Sekolah
                    </div>

                    <div class="box-body">

                    <?php
                        if(isset($_GET['success'])) {
                            echo "<div class='alert alert-success'>".$_GET['success']."</div>";

                        }
                        ?>
                        
                    <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <label> Nama</label>
                             <input type="text" name="nama" placeholder="Nama Sekolah" value="<?= $d->nama ?>" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label> Email</label>
                               <input type="text" name="email" class="input-control" placeholder="Email Sekolah" value="<?= $d->email ?>">
                            </div>

                            <div class="form-group">
                                <label> Telepon</label>
                               <input type="text"  name="telp" class="input-control" placeholder="Telepon Sekolah" value="<?= $d->telepon ?>">
                            </div>

                            <div class="form-group">
                                <label> Alamat</label>
                               <textarea name="alamat" class="input-control" placeholder="Alamat Sekolah"><?= $d->alamat ?></textarea>
                            </div>

                            <div class="form-group">
                                <label> Google Maps</label>
                                
                               <textarea name="gmaps" class="input-control" placeholder="Google Maps" ><?= $d->google_maps ?></textarea>
                            </div>

                            <div class="form-group">
                                <label> Logo</label>
                                <img src="../uploads/identitas/<?= $d->logo?>" width="200px" class="image">
                                <input type="hidden" name="logo_lama" value="<?= $d->logo ?>">
                                <input type="file" name="logo_baru" class="input-control" >
                            </div>

                            <div class="form-group">
                                <label> Favicon</label>
                                <img src="../uploads/identitas/<?= $d->favicon?>" width="40px" class="image">
                                <input type="hidden" name="favicon_lama" value="<?= $d->favicon ?>">
                                <input type="file" name="favicon_baru" class="input-control">
                            </div>

                            <div class="form-group">
                                <label> Tentang Sekolah</label>
                               <textarea name="tentang" class="input-control" placeholder="Tentang Sekolah"   id="mytextarea"><?= $d->tentang_sekolah ?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label> Foto Sekolah</label>
                                <img src="../uploads/identitas/<?= $d->foto_sekolah?>" width="200px" class="image">
                                <input type="hidden" name="sekolah_lama" value="<?= $d->foto_sekolah ?>">
                                <input type="file" name="sekolah_baru" class="input-control" >
                            </div>

                            <div class="form-group">
                                <label> Tabel Organisasi</label>
                                <img src="../uploads/identitas/<?= $d->tb_organisasi ?>" width="200px" class="image">
                                <input type="hidden" name="tb_lama" value="<?= $d->tb_organisasi ?>">
                                <input type="file" name="tb_baru" class="input-control" >
                            </div>

                            <div class="form-group">
                                <label>  Sejarah </label>
                               <textarea name="sejarah" class="input-control" placeholder="Sejarah Sekolah"   id="myarea"><?= $d->sejarah_sekolah ?></textarea>
                            </div>


                            <div class="form-group">
                                <label>Nama Kepala Sekolah</label>
                               <input type="text" name="nama_kepsek" class="input-control" placeholder="Nama Kepala Sekolah" value="<?= $d->nama_kepsek ?>">
                            </div>


                            <div class="form-group">
                                <label>Sambutan</label>
                                <textarea name="sambutan" class="input-control" placeholder="Sambutan Kepala Sekolah"   id="mytextarea"><?= $d->sambutan_kepsek ?></textarea>
                             
                            </div>

                            <div class="form-group">
                                <label> Foto Kepala Sekolah</label>
                                <img src="../uploads/identitas/<?= $d->foto_kepsek?>" width="200px" class="image">
                                <input type="hidden" name="foto_lama" value="<?= $d->foto_kepsek ?>">
                                <input type="file" name="foto_baru" class="input-control" >
                            </div>


                            <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">

                        </form>


                        <?php
                            if(isset($_POST['submit'])){
                                
                                $nama = addslashes(ucwords($_POST['nama']));
                                $nama_kepsek = addslashes(ucwords($_POST['nama_kepsek']));
                                $email = addslashes($_POST['email']);
                                $telp = addslashes($_POST['telp']);
                                $alamat = addslashes($_POST['alamat']);
                                $gmaps = addslashes($_POST['gmaps']);
                                $tentang = addslashes($_POST['tentang']);
                                $sejarah = addslashes($_POST['sejarah']);
                                $sambutan = addslashes($_POST['sambutan']);
                                $currdate = date('Y-m-d H:i:s');

                              //validasi data logo

                                if($_FILES['logo_baru']['name'] != ''){


                                $filename_logo  =$_FILES['logo_baru']['name'];
                                $tmpname_logo   =$_FILES['logo_baru']['tmp_name'];
                                $filesize_logo   =$_FILES['logo_baru']['size'];

                                $formatfile_logo =pathinfo($filename_logo, PATHINFO_EXTENSION);
                                $rename_logo     ='logo'.time().'.'.$formatfile_logo;
    
                                $allowedtype_logo   = array('png', 'jpg', 'jpeg','gif');
    
                                if(!in_array($formatfile_logo, $allowedtype_logo)){
                                 echo '<div class="alert alert-error">Format file logo sekolah tidak di izinkan.</div>';
                                
                                 return false;
    
                                }elseif($filesize_logo > 1000000){
                                    echo '<div class="alert alert-error">Ukuran file logo sekolah tidak boleh lebih dari 1 MB.</div>';
                                    return false;

                                }else{
                                        if(file_exists("../uploads/identitas/".$_POST['logo_lama'])){
                                            unlink("../uploads/identitas/".$_POST['logo_lama']);

                                        }
                                        move_uploaded_file($tmpname_logo, "../uploads/identitas/".$rename_logo);
                                    }
                                     }else{
                                    $rename_logo =$_POST['logo_lama'];
                                }

                                //validasi favicon

                                if($_FILES['favicon_baru']['name'] !=''){

                                    $filename_favicon  =$_FILES['favicon_baru']['name'];
                                    $tmpname_favicon   =$_FILES['favicon_baru']['tmp_name'];
                                    $filesize_favicon  =$_FILES['favicon_baru']['size'];
    
                                    $formatfile_favicon  =pathinfo($filename_favicon, PATHINFO_EXTENSION);
                                    $rename_favicon  ='favicon'.time().'.'.$formatfile_favicon ;
        
                                    $allowedtype_favicon = array('png', 'jpg', 'jpeg','gif');
        
                                    if(!in_array($formatfile_favicon, $allowedtype_favicon )){
                                     echo '<div class="alert alert-error">Format file favicon sekolah tidak di izinkan.</div>';
                                    
                                     return false;
        
                                    }elseif($filesize_favicon  > 1000000){
                                        echo '<div class="alert alert-error">Ukuran file favicon sekolah tidak boleh lebih dari 1 MB.</div>';
                                        return false;
    
                                    }else{
                                            if(file_exists("../uploads/identitas/".$_POST['favicon_lama'])){
                                                unlink("../uploads/identitas/".$_POST['favicon_lama']);
    
                                            }
                                            move_uploaded_file($tmpname_favicon, "../uploads/identitas/".$rename_favicon);
                                        }
                                         }else{
                                        $rename_favicon  =$_POST['favicon_lama'];
                                    }

                                     //validasi data foto sekolah

                                     if($_FILES['sekolah_baru']['name'] != ''){


                                    $filename_sekolah  =$_FILES['sekolah_baru']['name'];
                                    $tmpname_sekolah =$_FILES['sekolah_baru']['tmp_name'];
                                    $filesize_sekolah  =$_FILES['sekolah_baru']['size'];
    
                                    $formatfile_sekolah =pathinfo($filename_sekolah, PATHINFO_EXTENSION);
                                    $rename_sekolah   ='sekolah'.time().'.'.$formatfile_sekolah;
        
                                    $allowedtype_sekolah   = array('png', 'jpg', 'jpeg','gif');
        
                                    if(!in_array($formatfile_sekolah , $allowedtype_sekolah )){
                                     echo '<div class="alert alert-error">Format file foto sekolah tidak di izinkan.</div>';
                                    
                                     return false;
        
                                    }elseif($filesize_sekolah > 1000000){
                                        echo '<div class="alert alert-error">Ukuran file foto sekolah tidak boleh lebih dari 1 MB.</div>';
                                        return false;
    
                                    }else{
                                            if(file_exists("../uploads/identitas/".$_POST['sekolah_lama'])){
                                                unlink("../uploads/identitas/".$_POST['sekolah_lama']);
    
                                            }
                                            move_uploaded_file($tmpname_sekolah , "../uploads/identitas/".$rename_sekolah);
                                        }
                                         }else{
                                        $rename_sekolah =$_POST['sekolah_lama'];
                                    }

                                    //validasi foto tb_organisasi
                                    if($_FILES['tb_baru']['name'] != ''){


                                        $filename_tb  =$_FILES['tb_baru']['name'];
                                        $tmpname_tb =$_FILES['tb_baru']['tmp_name'];
                                        $filesize_tb  =$_FILES['tb_baru']['size'];
        
                                        $formatfile_tb =pathinfo($filename_tb, PATHINFO_EXTENSION);
                                        $rename_tb   ='tb'.time().'.'.$formatfile_tb;
            
                                        $allowedtype_tb   = array('png', 'jpg', 'jpeg','gif');
            
                                        if(!in_array($formatfile_tb , $allowedtype_tb )){
                                         echo '<div class="alert alert-error">Format file foto sekolah tidak di izinkan.</div>';
                                        
                                         return false;
            
                                        }elseif($filesize_tb > 1000000){
                                            echo '<div class="alert alert-error">Ukuran file foto sekolah tidak boleh lebih dari 1 MB.</div>';
                                            return false;
        
                                        }else{
                                                if(file_exists("../uploads/identitas/".$_POST['tb_lama'])){
                                                    unlink("../uploads/identitas/".$_POST['tb_lama']);
        
                                                }
                                                move_uploaded_file($tmpname_tb , "../uploads/identitas/".$rename_tb);
                                            }
                                             }else{
                                            $rename_tb =$_POST['tb_lama'];
                                        }
                                    //validasi data foto sekolah

                                if($_FILES['foto_baru']['name'] != ''){


                                    $filename  =$_FILES['foto_baru']['name'];
                                    $tmpname =$_FILES['foto_baru']['tmp_name'];
                                    $filesize  =$_FILES['foto_baru']['size'];
    
                                    $formatfile =pathinfo($filename, PATHINFO_EXTENSION);
                                    $rename   ='kepsek'.time().'.'.$formatfile;
        
                                    $allowedtype   = array('png', 'jpg', 'jpeg','gif');
        
                                    if(!in_array($formatfile, $allowedtype)){
                                     echo '<div class="alert alert-error">Format file foto kepsek sekolah tidak di izinkan.</div>';
                                    
                                     return false;
        
                                    }elseif($filesize> 1000000){
                                        echo '<div class="alert alert-error">Ukuran file foto kepsek sekolah tidak boleh lebih dari 1 MB.</div>';
                                        return false;
    
                                    }else{
                                            if(file_exists("../uploads/identitas/".$_POST['foto_lama'])){
                                                unlink("../uploads/identitas/".$_POST['foto_lama']);
    
                                            }
                                            move_uploaded_file($tmpname, "../uploads/identitas/".$rename);
                                        }
                                         }else{
                                        $rename =$_POST['foto_lama'];
                                    }
    

                                $update = mysqli_query($conn, "UPDATE profil SET
                                        nama        ='".$nama."',
                                        email       ='".$email."',
                                        telepon     ='".$telp."',
                                        alamat      ='".$alamat."',
                                        google_maps ='".$gmaps."',
                                        logo        ='".$rename_logo."',
                                        favicon     ='".$rename_favicon."',
                                        tentang_sekolah ='".$tentang."',
                                        sejarah_sekolah ='".$sejarah."',
                                        foto_sekolah    ='".$rename_sekolah."',
                                        tb_organisasi   ='".$rename_tb."',
                                        nama_kepsek ='".$nama_kepsek."',
                                        sambutan_kepsek ='".$sambutan."',
                                        foto_kepsek  ='".$rename."',
                                        updated_at  ='".$currdate."'
                                        WHERE id    ='".$d->id."'
                                    ");
    
                                        if($update){
                                            echo "<script>window.location='identitas-sekolah.php?success=Edit Data Berhasil'</script>";
                                        }else{
                                            echo 'Gagal Edit'.mysqli_error($conn);
                                        }
                                    }

                        ?>
                        
                    </div>

                </div>

            </div>
    </div>


<?php include 'footer.php' ?>
