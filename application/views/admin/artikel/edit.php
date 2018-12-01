<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Edit Artikel</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Isi Artikel DI Bawah Ini</h3>
                </div>
                <hr>
                 <?php  echo form_open_multipart('Admin/Artikel/edit','novalidate="novalidate"');
                    echo form_hidden('id_artikel',$artikel['id_artikel']);
                    echo form_hidden('token',$token);
                 ?>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Judul</label>
                                <input id="cc-exp" name="judul" type="text" class="form-control cc-exp" value="<?php echo $artikel['judul'] ?>" >
                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="x_card_code" class="control-label mb-1">Foto</label>
                            <div class="input-group">
                                <input name="userfile" type="file" class="form-control cc-cvc">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Isi Artikel</label>
                        <textarea  name="isi_artikel"  id="editor" ><?php echo $artikel['isi_artikel'] ?></textarea>
                    </div>

                    <div>
                        <button  type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Update Artikel</span>
                        </button>
                      <?php echo anchor('Admin/Artikel/','Kembali',array('class'=>'btn btn-lg btn-info btn-block'))  ?>
                    </div>
               <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
