<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit Pemesanan Haji</strong>
            </div>
            <div class="card-body card-block">
                <?php
                echo form_open_multipart('Admin/Pesan_haji/edit');
                echo form_hidden('id', $paket['id']);
                ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Status Pemesanan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" class="form-control">

                            <option value="0" >Belum di Proses</option>
                            <option value="1" >Sudah di Proses</option>
                        </select>

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Email Pemesan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php echo $paket['email'] ?>" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Informasi Untuk Pemesan Paket</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea  name="informasi"  id="editor" ><?php echo $paket['informasi'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('Admin/Pesan_haji', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
