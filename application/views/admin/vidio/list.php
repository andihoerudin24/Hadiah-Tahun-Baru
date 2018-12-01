<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Data Vidio</h2>
                
                <?php echo anchor('Admin/Vidio/add','tambah',array('class'=>'au-btn au-btn-icon au-btn--blue'))  ?>
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
            <table id="example" class="table table-striped table-bordered table-responsive table-responsive-lg table-responsive-md" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Link</th>
                <th>Keterangan</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($vidio as $row): ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo Cetak($row->link); ?></td>
                <td><?php echo Cetak($row->keterangan); ?></td>
                <td><?php echo anchor('Admin/Vidio/edit/'.$row->id_vidio,'Edit',array('class'=>'btn btn-info')) ?></td>
                <td><?php echo anchor('Admin/Vidio/hapus/'.$row->id_vidio,'Hapus',array('class'=>'btn btn-danger')) ?></td>
            </tr>
            <?php  $no++; ?>
           <?php endforeach; ?>
        </tbody>
         </table>
        </div>
    </div>
</div>
