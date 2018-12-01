<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Pesan Dari Pengunjung</h2>
         </div>
    </div>
</div><br>
<div class="col-lg-12">
    <div class="au-card chart-percent-card">
        <div class="au-card-inner">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No telpon</th>
                        <th>Tanggal</th>
                        
                        <th>Isi Pesan</th>
                       
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pesan as $row):
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->no_telpon; ?></td>
                            <td><?php echo $row->tanggal; ?></td>
                            <td><?php echo $row->isi_testi; ?></td>
                            <td><?php echo anchor('Admin/Pesan/hapus/'.$row->id, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                        </tr>
                        <?php $no++; ?>
<?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>