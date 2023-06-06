
    <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center" >
                    <div class="mobile-app-content">
                                <?php if($this->session->userdata('nama')) { ?>
                                    <h2>BSI CAR RENTAL AVAIABLE NOW!</h2>
                                    <p><font color="white">PILIH MOBIL TERBAIK KAMI UNTUK DISEWA</font></p>
                                    <div class="btn btn-primary py-3 px-5 animated slideInDown">
                                        <a href="<?php echo base_url('Customer/Data_mobil')?>"><font color="white">SEWA MOBIL</font></a>
                                        
                                    </div>
                                <?php } else { ?>
                                    <h2>BSI CAR RENTAL AVAIABLE NOW!</h2>
                                    <p><font color="white">SILAHKAN LOGIN TERLEBIH DAHULU UNTUK MENYEWA MOBIL KAMI</font></p>
                                    <div class="btn btn-primary py-3 px-5 animated slideInDown">
                                        <a href="<?php echo base_url('Auth/login')?>"><font color="white">LOGIN</font></a>
                                        <a href="<?php echo base_url('Register')?>"><font color="white">REGISTER</font></a>
                                    </div>
                                <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
