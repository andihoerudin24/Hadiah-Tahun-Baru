<header id="header" id="home">
    <div class="container">
        <div class="row header-top align-items-center">
            <div class="col-lg-4 col-sm-4 menu-top-left">
                <a href="mailto:aiftourumrah@gmail.com"><span class="lnr lnr-location"></span></a>
                <a class="tel" href="mailto:aiftourumrah@gmail.com">aiftourumrah@gmail.com</a>
            </div>
            <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
                <a href="#">
                    <img class="img-fluid" src="<?php echo base_url() ?>assets/img/lg.JPEG" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-4 menu-top-right">
                <a class="tel" href="tel:+880 123 12 658 439">021 879 75 2539</a>
                <a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?php echo site_url('Welcome') ?>">Home</a></li>
                    <li><a href="<?php echo site_url('Tentang_kami') ?>">Tentang Kami</a></li>
                    <li class="menu-has-children"><a href="#">Gallery</a>
                        <ul>
                            <li><a href="<?php echo site_url('Foto') ?>">Foto</a></li>
                            <li><a href="<?php echo site_url('Vidio') ?>">Vidio</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="#">Paket Umroh & Haji</a>
                        <ul>
                            <li><a href="<?php echo site_url('Paket') ?>">Paket umrah</a></li>
                            <li><a href="<?php echo site_url('Haji') ?>">Haji</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo site_url('Artikel') ?>">Artikel</a></li>
                    <li><a href="<?php echo site_url('Kontak') ?>">Kontak Kami</a></li>
                    <li><a href="<?php echo site_url('Login') ?>">Login</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
