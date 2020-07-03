<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Data Beuaty</h5>
        <a href="?page=user&act=add" class="btn btn-info"><span class="fas fa-plus"></span> Tambah</a>
        <div class="table-responsive" style="margin-top:10px;">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $tampil = $conn->query("SELECT * FROM tb_user");
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['nama_lengkap'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['username'];?></td>
                        <td><?php echo $data['password'];?></td>
                        <td><?php echo $data['status'];?></td>
                        <td>
                            <a href="?page=user&act=upd&id=<?php echo $data['id'];?>" class="btn btn-info"><span class="fas fa-edit"></span></a>
                            <a href="?page=user&act=del&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin akan hapus data ini?')"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
