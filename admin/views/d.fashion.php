<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Data Fashion</h5>
        <a href="?page=fashion&act=add" class="btn btn-info"><span class="fas fa-plus"></span> Tambah</a>
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
                    $tampil = $conn->query("SELECT * FROM tb_fashion");
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['judul_fashion'];?></td>
                        <td><?php echo $data['isi_fashion'];?></td>
                        <td><img src="../gambar/<?php echo $data['gambar'];?>" width="100px"></td>
                        <td>
                            <a href="?page=fashion&act=upd&id_fashion=<?php echo $data['id_fashion'];?>" class="btn btn-info"><span class="fas fa-edit"></span></a>
                            <a href="?page=fashion&act=del&id_fashion=<?php echo $data['id_fashion'];?>" class="btn btn-danger" onclick="return confirm('Yakin akan hapus data ini?')"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
