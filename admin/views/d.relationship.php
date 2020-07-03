<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Data Relationship</h5>
        <a href="?page=relationship&act=add" class="btn btn-info"><span class="fas fa-plus"></span> Tambah</a>
        <div class="table-responsive" style="margin-top:10px;">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $tampil = $conn->query("SELECT * FROM tb_relationship");
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['judul_relationship'];?></td>
                        <td><?php echo $data['isi_relationship'];?></td>
                        <td><img src="../gambar/<?php echo $data['gambar'];?>" width="100px"></td>
                        <td>
                            <a href="?page=relationship&act=upd&id_relationship=<?php echo $data['id_relationship'];?>" class="btn btn-info"><span class="fas fa-edit"></span></a>
                            <a href="?page=relationship&act=del&id_relationship=<?php echo $data['id_relationship'];?>" class="btn btn-danger" onclick="return confirm('Yakin akan hapus data ini?')"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
