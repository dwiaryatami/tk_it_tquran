<?php include 'header.php' ?>

<!-- content --> 
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Data Guru
                </div>
                
                <div class="box-body">
                    <a href="tambah-guru.php" class="text-blue"><i class="fa fa-plus"></i> Tambah </a>

                    <?php
                        if(isset($_GET['success'])) {
                            echo "<div class='alert alert-success'>".$_GET['success']."</div>";

                        }
                        ?>
                        <form action="">

                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        </form>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th> Nama </th>
                                <th> NIP </th>
                                <th>Gambar</th>
                                <th>Aksi </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            $no = 1;

                            $where = "WHERE 1=1 ";
                            if(isset($_GET['key'])){
                                $where .= "AND nama LIKE '%".addslashes($_GET['key'])."%' ";
                            }

                            $data_guru = mysqli_query($conn, "SELECT * FROM data_guru $where ORDER BY id DESC");
                            if(mysqli_num_rows($data_guru) > 0){
                                while($p = mysqli_fetch_array($data_guru)){
                        ?>
                                <tr>
                                    <td><?= $no++ ?> </td>
                                    <td><?= $p['nama']?> </td>
                                    <td><?= $p['nip'] ?></td>
                                    <td><img src="../uploads/guru/<?= $p['foto_guru'] ?>" width="100px"></td>
                                    <td>
                                        <a href="edit-data_guru.php?id=<?= $p['id'] ?>" title="Edit Data" class="text-green"><i class="fa fa-edit"></i></a>
                                        <a href= "hapus.php?iddata_guru=<?= $p['id'] ?>" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" class="text-red"><i class="fa fa-times"></i></a>
                                    </td>
                                <tr>
                            <?php }}else{ ?>
                                <tr>
                                    <td colspan="5"> Data tidak ada </td>
                                </tr>
                            <?php }?>
                            </tbody> 
                     </table>

                        </div>
                </div>
            </div>
        </div>
    </div>