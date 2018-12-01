<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Paket</strong>
            </div>
            <div class="card-body card-block">
                 <?php if (!empty($this->session->userdata('id_paket_haji'))): ?>
                <?php echo form_open_multipart('Admin/Status_haji/add');?>
                <?php else: ?>
                <?php echo form_open_multipart('Admin/Status/add');?>
                <?php endif; ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Bukti Pembayaran</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" required="" name="userfile"  class="form-control">
                        <span class="help-block">Masukan Foto</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('Admin/Status', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
