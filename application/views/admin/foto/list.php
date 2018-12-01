
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Data Foto</h2>


            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#exampleModal">
                <i class="zmdi zmdi-plus"></i>Tambah
            </button>

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
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Foto</th>
                        <th>Foto</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($foto as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->nama_foto ?></td>
                            <td><img src="<?php echo base_url() ?>uploads/foto/<?php echo $row->foto ?>" class="image image-responsive" width="50" height="50"> </td>
                            <td><button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id_foto; ?>) data-target='#Modal'>Edit</button></td>
                            <td><?php echo anchor('Admin/Foto/Hapus/' . $row->id_foto, 'Hapus', array('class' => 'btn btn-success')) ?></td>
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
