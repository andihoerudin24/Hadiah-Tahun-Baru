
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Status Pemesanan</h2>
            <?php if (!empty($this->session->userdata('id_paket_haji'))): ?>
                <?php echo anchor('Admin/Status_haji/add', 'Upload Bukti Pembayran', ['class' => 'btn btn-info']) ?>
            <?php else: ?>
                <?php echo anchor('Admin/Status/add', 'Upload Bukti Pembayran', ['class' => 'btn btn-info']) ?>
            <?php endif; ?>
        </div>
    </div>
</div><br>
<?php
if ($this->session->flashdata('berhasil')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-primary alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>Success</span>";
    echo $this->session->flashdata('berhasil');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>Success</span>";
    echo $this->session->flashdata('edit');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
} elseif ($this->session->flashdata('hapus')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>Success</span>";
    echo $this->session->flashdata('hapus');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
}
?> 



<div class="col-lg-12">
    <div class="au-card chart-percent-card">
        <div class="au-card-inner">
            <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama </th>
                        <th>Email</th>
                        <th>Nama Paket</th>
                        <th>Harga paket</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($paket_umroh as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->nama ?></td>

                            <td><?php echo $row->email ?></td>

                            <td><?php echo $row->nama_paket ?></td>

                            <td><?php echo $row->harga ?></td>
                            <?php if ($row->status == 0): ?>
                                <td>Menunggu konfrimasi admin</td>
                            <?php else: ?>
                                <td>pembayaran sudah di konfrimasi</td>
                            <?php endif; ?>
                            <?php if (empty($row->pembayaran)): ?>
                                <td>Bukti pembayaran belum ada</td>
                            <?php elseif (!empty($this->session->userdata('id_paket_haji'))): ?>  
                                <td><img src="<?php echo base_url() ?>uploads/pesan_haji/<?php echo $row->pembayaran ?>" class="image image-responsive" width="50" height="50"> </td>
                            <?php else: ?>  
                                <td><img src="<?php echo base_url() ?>uploads/pesan_umroh/<?php echo $row->pembayaran ?>" class="image image-responsive" width="50" height="50"> </td>

                            <?php endif; ?>
                            <?php if (!empty($this->session->userdata('id_paket_haji'))): ?>
                                <td><?php echo anchor('Admin/Status_haji/Hapus/' . $row->id, 'Hapus', array('class' => 'btn btn-success')) ?></td>
                            <?php else: ?>
                                <td><?php echo anchor('Admin/Status/Hapus/' . $row->id, 'Hapus', array('class' => 'btn btn-success')) ?></td>
                            <?php endif; ?>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>



<script type="text/javascript">
    function show_by_id(id_foto) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Admin/Foto/show_by_id',
            data: 'id_foto=' + id_foto,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id_foto").val(obj.id_foto);
                $("#nama_foto").val(obj.nama_foto);
                $("#foto").val(obj.foto);
            }
        })
    }

</script>
