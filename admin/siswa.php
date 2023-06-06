<?php 
    include 'header.php'
?>
        <div class="content">

            <div class="container">

                <div class="box">

                    <div class="box-header">
                       Data Siswa
                    </div>

                    <div class="box-body">
                        <a href="tambah-siswa.php" class="text-blue"><i class="fa fa-plus"></i>Tambah</a>

                        <form action="">

                            <div class="input-group">
                                <input type="text" name="key" placeholder="Pencarian">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>

                      <table class="table"> 
                          <thead> 
                              <tr>
                                  <th> No </th>
                                  <th> Nama </th>
                                  <th>NISN</th>
                                  <th> Kelas </th>
                                  <th> Jenis Kelamin</th>
                                  <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;

                                    $where = "WHERE 1=1 ";
                                    if(isset($_GET['key'])){
                                        $where .= "AND nama LIKE '%".addslashes($_GET['key'])."%' ";
                                    }

                                    $siswa = mysqli_query($conn, "SELECT * FROM siswa $where ORDER BY id DESC");
                                    if(mysqli_num_rows($siswa) > 0){
                                        while($p = mysqli_fetch_array($siswa)){
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p['nama'] ?></td>
                                    <td><?= $p['NISN'] ?></td>
                                    <td><?= $p['kelas'] ?></td>
                                    <td><?= $p['jeniskelamin'] ?></td>
                                    <td>
                                        <a href="edit-siswa.php?id=<?= $p['id'] ?>" title= "Edit Data" class="text-green"><i class="fa fa-edit"></i></a>|
                                        <a href="hapus.php?idsiswa=<?= $p['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus ?')" title =" Hapus Data" class="text-red"><i class="fa fa-times"></i> </a>
                                    </td>
                                </tr>
                                <?php }}else { ?>
                                    <tr> <td colspan="6"> Data Tidak Ada</tr>
                                    <?php } ?>
                            </tbody>
                      </table>
                    </div>

                </div>

            </div>
</div>
<?php include 'footer.php' ?>