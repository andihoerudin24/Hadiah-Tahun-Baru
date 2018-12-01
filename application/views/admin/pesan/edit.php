<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Isi Testimoni</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open('Admin/Testi/add') ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="nama" value="<?php echo $testimoni['nama'] ?>" placeholder="Masukan Nama..." class="form-control">
                        <span class="help-block">Masukan Nama Testimoni</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Isi Dari Testimoni</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="isi_testi" value="<?php echo $testimoni['isi_testi'] ?>" placeholder="Isi Testimoni..." class="form-control">
                        <span class="help-block">Masukan isi testi moni</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Simpan
                </button>
                <?php echo anchor('Admin/Testi', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
