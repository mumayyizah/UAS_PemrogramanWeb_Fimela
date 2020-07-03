<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Data Parenting</h5>
        <div class="table-responsive" style="margin-top:10px;">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $tampil = $conn->query("SELECT * FROM tb_parenting");
                    while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['judul_parenting'];?></td>
                        <td><?php echo $data['isi_parenting'];?></td>
                        <td><img src="../gambar/<?php echo $data['gambar'];?>" width="100px"></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
