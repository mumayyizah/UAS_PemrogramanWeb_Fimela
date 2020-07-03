<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Data Celebrity</h5>
        <a href="?page=celebrity&act=add" class="btn btn-info"><span class="fas fa-plus"></span> Tambah</a>
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
                    $tampil = $conn->query("SELECT * FROM tb_celebrity");
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['judul_celebrity'];?></td>
                        <td><?php echo $data['isi_celebrity'];?></td>
                        <td><img src="../gambar/<?php echo $data['gambar'];?>" width="100px"></td>
                        <td>
                            <a href="?page=celebrity&act=upd&id_celebrity=<?php echo $data['id_celebrity'];?>" class="btn btn-info"><span class="fas fa-edit"></span></a>
                            <a href="?page=celebrity&act=del&id_celebrity=<?php echo $data['id_celebrity'];?>" class="btn btn-danger" onclick="return confirm('Yakin akan hapus data ini?')"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
