<footer class="footer-area footer-bg">
    <div class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget about">
                        <div class="widget-title">
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?= base_url('assets/img/img13.jpg') ?>" width="40-px" height="aout" alt="footer logo"></a>
                                <h5 style="display:inline; margin-left:8px;">Puslitbang Bogor</h5>
                
                            </div>
                        </div>

                        <div class="widget-body">
                            <p>Jl.Gunung Batu Bogor No.5</p>
                            <p>Telp : (0251) 8633234</p>
                            <p>Fax : (0251) 8638111</p>
                            <p>email:puslitbangp3h@gmail.com</p>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h3 class="title">Sosial Media</h3>
                        </div>
                        <div class="widget-body">
                            <ul class="footer-links">
                                <li> <a href="https://www.facebook.com/puslitbanghut/?ref=aymt_homepage_panel target="_blank"><img src="assets/img/footer-icon.png" alt="">Facebook</a></li>
                                <li> <a href="https://www.youtube.com/channel/UCZA4BMmail2OkVnK0UOXuPQ"><img src="assets/img/footer-icon.png" alt="">Youtube</a></li>
                                <li> <a href="http://puslitbanghut.or.id/"><img src="assets/img/footer-icon.png" alt="">Website Puslibang Bogor</a></li>
                                <li> <a href="#"><img src="assets/img/footer-icon.png" alt="">Twitter</a></li>
                                <li> <a href="https://www.instagram.com/challenge/?next=/ target="_blannk"><img src="assets/img/footer-icon.png" alt="">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget contact-info">
                        <div class="widget-title">
                            <h3 class="title">Flora dan Fauna Diindonesia</h3>
                        </div>
                        <div class="widget-body">
                            <ul class="instagram-img">
                                <li class="col-xs-4 col-4"><img alt="" src="<?= base_url() ?>assets/img/instagram/i-01.png"></li>
                                <li class="col-xs-4 col-4"><img alt="" src="<?= base_url() ?>assets/img/instagram/i-02.png"></li>
                                <li class="col-xs-4 col-4"><img alt="" src="<?= base_url() ?>assets/img/instagram/i-03.png"></li>
                                <li class="col-xs-4 col-4"><img alt="" src="<?= base_url() ?>assets/img/instagram/i-04.png"></li>
                                <li class="col-xs-4 col-4"><img alt="" src="<?= base_url() ?>assets/img/instagram/i-05.png"></a></li>
                                <li class="col-xs-4 col-4"><img alt="" src="<?= base_url() ?>assets/img/instagram/i-06.png"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->
    <div class="copyright-area">
        <!--copyright area start-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    &#169; <span class="zoo-color">Kementerian Lingkungan Hidup Dan Kehutanan Bogor</span> 2019. All rights reserved.
                </div>
            </div><!-- /.row-->
        </div> <!-- /.container -->
    </div>
    <!--copyright area end-->
</footer>
<!-- footer area end -->

<!-- back to top start -->
<div class="back-to-top">
    <!-- back to top start -->
    <i class="fas fa-rocket"></i>
</div>
<!-- back to top end -->

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
</div>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

             <?php if ($this->session->flashdata('flash')) : ?>
          
              <?php endif; ?>
<!-- preloader area end -->


<!-- jquery -->
<script src="<?= base_url('') ?>assets/js/jquery.js"></script>
<!-- bootstrap -->
<script src="<?= base_url('') ?>assets/js/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="<?= base_url('') ?>assets/js/owl.carousel.min.js"></script>
<!-- wow js-->
<script src="<?= base_url('') ?>assets/js/wow.min.js"></script>
<!-- magnific popup js -->
<script src="<?= base_url('') ?>assets/js/jquery.magnific-popup.js"></script>
<!-- slick js-->
<script src="<?= base_url('') ?>assets/js/slick.min.js"></script>
<!-- filterizr js-->
<script src="<?= base_url('') ?>assets/js/jquery.filterizr.min.js"></script>

<!-- main -->
<script src="<?= base_url('') ?>assets/js/main.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    $('document').ready(function(){
        const flashData = $('.flash-data').data('flashdata');

        if(flashData){
            Swal.fire({
              icon: 'success',
              title: 'Data Berhasil Terkirim',
              text:  flashData
            });
        }
    
    });
   
</script>

</body>

</html>