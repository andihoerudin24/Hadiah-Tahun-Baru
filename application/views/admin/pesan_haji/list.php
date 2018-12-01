<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Data pemesanan Haji</h2>

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
} elseif ($this->session->flashdata('gagal')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-warning alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>gagal</span>";
    echo $this->session->flashdata('gagal');
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
                        <th>Nama pemesan</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No telpon</th>
                        <th>Nama Paket</th>
                        <th>Harga Paket</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>

                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($paket as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo$row->nama ?></td>
                            <td><?php echo$row->email ?></td>
                            <td><?php echo$row->alamat ?></td>
                            <td><?php echo$row->no_telpon ?></td>
                            <td><?php echo$row->nama_paket ?></td>
                            <td><?php echo$row->harga_paket ?></td>
                            <?php if ($row->status == 0): ?>
                                <td>Belum di proses</td>
                            <?php else: ?>
                                <td>sudah di proses</td>
                            <?php endif; ?>
                            <td><?php echo anchor('Admin/Pesan_haji/donwload/' . $row->id, 'Donwload', array('class' => 'btn btn-danger btn-sm')) ?></td>

                            <td><?php echo anchor('Admin/Pesan_haji/edit/' . $row->id, 'Edit', array('class' => 'btn btn-info')) ?></td>
                            <td><?php echo anchor('Admin/Pesan_haji/hapus/' . $row->id, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
