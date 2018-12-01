<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Vidio</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open('Admin/Vidio/add');
                  echo form_hidden('token',$token);
                  ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Link</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="link" placeholder="Masukan Link..." class="form-control">
                        <span class="help-block">Masukan Link Dari Youtube</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Keterangan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="keterangan" placeholder="Keterangan Vidio..." class="form-control">
                        <span class="help-block">Masukan Keterangan Vidio</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Simpan
                </button>
                <?php echo anchor('Admin/Vidio', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
