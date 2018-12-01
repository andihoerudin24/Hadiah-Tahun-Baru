<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/section'); ?>


<!-- Start about-video Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">INFORMASI PRODUK DAN LAYANAN</h1>
                    <p>KAMI MEMBERIKAN PAKET LAYANAN SEBAGAI BERIKUT:.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-price">
                    <div class="top-part">
                        <h1 class="package-no">01</h1>
                        <h4>Produk Utama</h4>
                        <p></p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li><b>Menjual Paket Umroh dan Haji</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price">
                    <div class="top-part">
                        <h1 class="package-no">02</h1>
                        <h4>Produk mendukung</h4>
                        <p>Wisata Religi :</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li><b>Plus Aqso, Plus turki, Plus Mesir</b></li>
                            <li><b>Plus Kuala lumpur dan wisata</b></li>
                            <li><b>religi ke Negara- Negara muslim Lainnya</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price">
                    <div class="top-part">
                        <h1 class="package-no">03</h1>
                        <h4>Fasilitas Pendukung</h4>
                        <p></p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <b><li>Penerbangan</li></b>
                            <li><b>Akomodasi</b></li>
                            <li><b>Transportasi</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about-video Area -->




<!-- Start price Area -->
<section class="latest-blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">ARTIKEL TERBARU</h1>
                </div>
            </div>
        </div> 
        <div class="row">
            <?php foreach ($artikel as $row): ?>

                <div class="col-lg-6 single-blog">
                    <img class="img-fluid" src="<?php echo base_url() ?>uploads/artikel/<?php echo $row->foto ?>" alt="">
                    <ul class="tags">
                    </ul>
                    <a href="<?php echo site_url('Welcome/detail/' . $row->id_artikel) ?>"><h4><?php echo $row->judul ?></h4></a>
                    <p>
                        <?php echo substr($row->isi_artikel, 0, 100) ?>
                    </p>
                </div>

            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- End price Area -->



<section class="about-video-area section-gap">
    <div class="container">
        <center><h3 class="text-uppercase">VISI DAN MISI PERUSAHAAN</h3></center><br><br><br>
        <div class="row">
            <div class="col-lg-4 about-video-left">
                <h1>
                    VISI <br>
                </h1>
                <p>
                    <span>
                        1.	Menjadi penyelenggara Haji Khusus dan Umrah dengan pelayanan berkualitas dan bimbingan ibadah sesuai Al Qur’an dan Sunnah.<BR>
                        2.	Memberikan pelayanan Tour &Travel secara komprehensif  Dan integral dengan berorientasi kepada kepuasan Pelanggan
                    </span>
                </p>
            </div>
            <div class="col-lg-4 about-video-left">
                <h1>
                    MISI <br>
                </h1>
                <p>
                    <span>
                        1.	Senantiasa berupaya untuk berpegang teguh kepada Prinsip-prinsip ajaran islam dalam semua aspek Operasional perusahaan.<br>
                        2.	Memiliki Sumber Daya Insani yang bertaqwa, loyal kepada Perusahaan, amanah, professional serta di topang oleh System IT yang handal dan mekanisme kerja kondusif, Efektif dan efisien.<br>
                        3.	Inovatif, progresif dan bekerja keras untuk memberikan Pelayanan terbaik kepada segenap pelanggan.<br>
                        4.	Senantiasa memberikan manfaat yang sebesar – besarnya Dan berkesinambungan bagi segenap pemangku Kepentingan  PT. AIF PUTRA MANDIRI.
                    </span>
                </p>
            </div>
            <div class="col-lg-4 about-video-left">
                <h1>
                    MOTTO<br>
                </h1>
                <p>
                    <span>
                        Bimbingan ibadah Umroh dan Haji sesuai Sunnah dgn fasilitas dan layanan terbaik.
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>



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
</section><br>
<!-- End booking Area -->


<!-- Start gallery Area -->
<section class="gallery-area">
    <div class="container-fluid">
        <div class="row no-padding">
            <div class="active-gallery">
                <?php foreach ($foto as $r): ?>
                    <div class="item single-gallery">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>uploads/foto/<?php echo $r->foto ?>" width="150" height="150" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- End gallery Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single-footer-widget">
                    <h4>Tentang Kami</h4>
                    <p>
                        -	Perjalanan Ibadah Umroh
                        Ibadah umroh yang dimaksud adalah mengajak menggalang klien calon jamaah untuk berumroh dengan memakai PT. AIF PUTRA MANDIRI<br>
                        -	Perjalanan wisata religi.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-3">
                <div class="single-footer-widget">
                     <h4>Alamat</h4>
                    <div>
                        <p>JL.MAYOR OKING JAYA ATMADJA KAMURANG CITEUREUP BOGOR</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <p>021 879 752 39</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <p>aiftourumrah@gmail.com</p>
                    </div>
                </div>														
            </div>
            <div class="col-md-3">
                <div class="single-footer-widget">
                    <h4>Kantor Cabang</h4>
                    <p><i class="fa fa-plane" aria-hidden="true"></i> 
                        KANTOR CABANG DISINI KALO MAU TAMBAHIN COPY DR MULAI TAG P MYA CONTOH
                    </p>
                    <p><i class="fa fa-plane" aria-hidden="true"></i> 
                        KANTOR CABANG DISINI KALO MAU TAMBAHIN COPY DR MULAI TAG P MYA CONTOH
                    </p>
                </div>
            </div>



        </div>
        <div class="footer-bottom row">
            <p class="footer-text m-0 col-lg-6 col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Aif Tour</a>
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



