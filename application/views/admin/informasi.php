<div class="row">
    <div class="col-lg-12">
        <div class="au-card recent-report">
            <div class="au-card-inner">
                <h3 class="title-2">Informasi</h3>
                <div class="chart-info">
                    <div class="chart-info__left">
                        <div class="chart-note">
                            <span class="dot dot--blue"></span>
                            <span>Untuk <?php echo $this->session->userdata('email') ?></span>
                        </div>
                        <?php foreach ($paket_umroh as $row):  ?>
                          <?php echo $row->informasi; ?>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
