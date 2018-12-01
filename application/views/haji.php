<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Harga Paket Haji				
                </h1>	
                <p class="text-white link-nav"><a href="<?php echo site_url('Welcome') ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo site_url('Haji') ?>">Paket Kami</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->	


<!-- Start training Area -->
<section class="training-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 pb-40 header-text text-center">
                <h1 class="pb-10">Paket  Haji</h1>
                <p>
                    Paket Haji Yang Ditawarkan Di Pt Aif Putra Mandiri Bisa Dilihat :
                </p>
            </div>
        </div>	
        <div class="row">
            <?php foreach ($paket as $p): ?>
                <div class="col-lg-4 cl-md-6">
                    <div class="single-training">
                        <div class="thumb relative">
                            <div class="overlay-bg"></div>
                            <img class="img-fluid image-responsive"  src="<?php echo base_url() ?>uploads/haji/<?php echo $p->foto ?>" alt="">
                            <a class="admission-btn" href="<?php echo site_url('Haji/pesan/'.$p->id_paket) ?>">Pesan</a>	
                        </div>
                        <div class="details">
                            <div class="title justify-content-between d-flex">
                                <a href="#"><h4><?php echo $p->nama_paket ?></h4></a>
                                <p class="price">
                                    <?php echo $p->harga_paket ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php echo $pagination; ?>
    </div>	
</section>
<!-- End training Area -->

<!-- Start booking Area -->
<section class="booking-area section-gap relative" id="consultancy">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            
            <div class="col-lg-6 col-md-6 booking-left">
                
                
                <div class="active-review-carusel">
                    <?php foreach ($testimoni as $t): ?>

                        <div class="single-carusel">
                            <img src="<?php echo base_url() ?>assets/img/r1.png" alt="">
                            <div class="title justify-content-start d-flex">
                                <h4><?php echo $t->nama ?></h4>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <p>
                            <?php echo $t->isi_testi ?>    
                            </p>
                        </div>
                        <div class="single-carusel">
                            <img src="<?php echo base_url() ?>assets/img/r1.png" alt="">
                            <div class="title justify-content-start d-flex">
                                <h4><?php echo $t->nama ?></h4>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <p>
                            <?php echo $t->isi_testi ?>    
                            </p>
                            <img src="<?php echo base_url() ?>assets/img/r2.png" alt="">
                            <div class="title justify-content-start d-flex">
                                <h4><?php echo $t->nama ?></h4>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <p>
                            <?php echo $t->isi_testi ?>   
                            </p>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 booking-right">
                <h4 class="mb-20">BUTUH BANTUAN HUBUNGI KAMI</h4>
                <?php echo form_open('Kontak/add', 'class="form-area" class="contact-form text-right"') ?>
                <input name="nama" placeholder="masukan nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                <input name="email" placeholder="masukan email anda" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                <input name="no_telpon" placeholder="masukan no telpon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="number">

                <textarea class="common-textarea form-control" name="isi_testi" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>

                <button type="submit" name="submit" class="btn btn-default btn-lg btn-block text-center">KIRIM PESAN</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>	
</section>
<!-- End booking Area -->

<!-- start footer Area -->		
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-footer-widget">
                    <h4>Tentang Kami</h4>
                    <p>
                        -	Perjalanan Ibadah Umroh
                        Ibadah umroh yang dimaksud adalah mengajak menggalang klien calon jamaah untuk berumroh dengan memakai PT. AIF PUTRA MANDIRI<br>
                        -	Perjalanan wisata religi.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Kontak Kami</h4>
                    <p>
                        Malu Bertanya Sesat Dijalan Jangan Pernah Ragu Untuk Menghubungi Kami.
                    </p>
                    <p class="number">
                           <select onchange="window.open(this.options[this.selectedIndex].value)" class="form-control">
                            <option value="https://api.whatsapp.com/send?phone=6289638889862&amp;text=Assalamulaiqumwr.wb%20,%20Silahkan Jika Ada Yang%20di%20Tanyakan.....">081270743495</option>
                           <option value="https://api.whatsapp.com/send?phone=6289638889862&amp;text=Assalamulaiqumwr.wb%20,%20Silahkan Jika Ada Yang%20di%20Tanyakan.....">085218868505</option>
                            <option value="https://api.whatsapp.com/send?phone=6289638889862&amp;text=Assalamulaiqumwr.wb%20,%20Silahkan Jika Ada Yang%20di%20Tanyakan.....">081211621157</option>
                            
                        </select>
                      
                    </p>
                </div>
            </div>						
        </div>
        <div class="footer-bottom row">
            <p class="footer-text m-0 col-lg-6 col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Aif Tour</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="footer-social col-lg-6 col-md-12">
                   <a href="https://facebook.com/aif.tour"><i class="fa fa-facebook"></i></a>
            
            </div>
        </div>
    </div>
</footer>	
<!-- End footer Area -->

<?php $this->load->view('layout/footer') ?>
