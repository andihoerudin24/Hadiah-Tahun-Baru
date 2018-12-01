<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Edit Vidio</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open('Admin/Vidio/edit'); 
                echo form_hidden('id_vidio',$vidio['id_vidio']);
            
                ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Link</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php echo Cetak($vidio['link']) ?>"  name="link" placeholder="Masukan Link..." class="form-control">
                        <span class="help-block">Masukan Link Dari Youtube</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Keterangan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="keterangan" value="<?php echo Cetak($vidio['keterangan']) ?>" placeholder="Keterangan Vidio..." class="form-control">
                        <span class="help-block">Masukan Keterangan Vidio</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm">
               
                
                <?php echo anchor('Admin/Vidio', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
