
<!-- header area start  -->
<header class="home-area home-bg" style="background-image: url('http://localhost/puslitbang/assets/img/img26.jpg');">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="slider-all-text">
                    <span class="subtitle wow fadeInDown">Selamat Datang Di</span> 
                    <h1 class="wow fadeInDown title">Pusat Penelitian Dan Pengembangan Hutan Bogor</h1>
                     <div class="btn-wrapper animated fadeInUp">
                    </div>
                </div>
                
            </div> <!-- ./col-lg-10 -->
        </div> <!-- ./row -->
    </div> <!-- ./container -->
</header>

<!-- about video area end  -->
<section class="about-video-area">
    <div class="container">
        <div class="row reorder-xs clearfix">
            <!--Content Column-->
            <div class="content-column col-lg-6">
                <div class="inner-column">
                    <h2 class="title">Arboretum dan Herbarium Gunung Batu, Bogor, Jawa Barat</h2>
                    <p class="text">Indonesia memiliki arboretum dan herbarium yang menyimpan koleksi pohon langka, tepatnya terletak di Gunung Batu, Bogor, Jawa Barat. Arboretum dan herbarium yang sudah ada sejak zaman Belanda ini berusia sekitar 100 tahun.

                    Awalnya, arboterum dan herbarium yang berjarak kira-kira setengah jam berkendara dari Kebun Raya Bogor ini dibangun untuk mengoleksi pohon buah-buahan Nusantara.

                    Luasnya 5 hektare dengan total lahan 12 hektare. Ukurannya tergolong mungil jika dibandingkan dengan Kebun Raya Bogor yang luasnya mencapai 86 hektare.

                    Area arboterum dibagi ke dalam 27 blok. Setiap bloknya ditanami berbagai jenis pohon dan dibatasi jaringan jalan. Di lahan tersebut, terdapat lebih dari seribu koleksi pohon yang terbagi dalam 234 jenis, 167 jenis di antaranya merupakan pohon asli Indonesia.</p>
                    
                    <a href="<?= base_url('home/tentang_kami') ?>" class="more-btn" role="button">Detail</a>
                </div>
            </div>  
            <!--video Column-->
            <div class="video-column col-lg-6">
                <div class="inner-column">
                    <div class="about-image2">
                        <img src="<?= base_url('assets/img/img18.jpg') ?>" alt="about image">
                        
                    </div>
            
                </div>
            </div>

        </div>
    </div>
</section>
<section class="testimonials-area2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">Apa Pendapat Mereka Mengenai Flora Dan Fauna Di Indonesia</h2>
                    <p>Berikut Merupakan Beberapa pendapat dan opini orang-orang mengenai Flora dan Fauna di Indonesia</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                         <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-review-item">
                                        <div class="review-head">
                                            <div class="thumb">
                                                <img src="<?= base_url() ?>assets/img/user.jpeg" alt="reviewer images"  width="60">
                                            </div>
                                            <div class="author-details">
                                                <h6>Galih Purnawan</h6>
                                                <span class="post">Galih89@gmail.com</span>
                                            </div>
                                        </div>
                            
                                        <div class="desciption">
                                            <p>
                                                Flora dan fauna di indonesia sangat beragam, tetapi hingga saat ini kondisi flora dan fauna di indonesia sangat memprihatinkan karena sudah banyak hewan endemik asli indonesia yang sudah banyak yang punah
                                            </p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-review-item">
                                        <div class="review-head">
                                            <div class="thumb">
                                                <img src="<?= base_url() ?>assets/img/user.jpeg" alt="reviewer images"  width="60">
                                            </div>
                                            <div class="author-details">
                                                <h6>Ahmad Mustopa</h6>
                                                <span class="post">Ahmad654@gmail.com</span>
                                            </div>
                                        </div>
                            
                                        <div class="desciption">
                                            <p>
                                                Keadaan flora dan fauna di indonesia cukup memprihatinkan. Pasalnya, banyak flora dan fauna yang sudah masuk kategori punah atau gejala kepunahan. Maka program pemerintah indonesia membuat suaka marga satwa dan cagar alam
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach($komentar as $k) :  ?>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-review-item">
                                        <div class="review-head">
                                            <div class="thumb">
                                                <img src="<?= base_url() ?>assets/img/user.jpeg" width="60" alt="reviewer images">
                                            </div>
                                            <div class="author-details">
                                                <h6><?= $k->nama ?></h6>
                                                 <span class="post"><?= $k->email ?></span>
                                            </div>
                                        </div>
                            
                                        <div class="desciption">
                                            <p>
                                             <?= $k->komentar ?>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>

                                <?php foreach($komentar2 as $k2) :  ?>
                                 <div class="col-md-6">
                                    <div class="single-review-item">
                                        <div class="review-head">
                                            <div class="thumb">
                                                <img src="<?= base_url() ?>assets/img/user.jpeg" width="60" alt="reviewer images">
                                            </div>
                                            <div class="author-details">
                                                <h6><?= $k2->nama ?></h6>
                                                 <span class="post"><?= $k2->email ?></span>
                                            </div>
                                        </div>
                            
                                        <div class="desciption">
                                            <p>
                                             <?= $k2->komentar ?>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>    
                            <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                       
                       
                        
                    </div>
                    <!-- Carousel controls -->
                    <div class="carousel-array justify-content-center">
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fas fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
</section>
<section class="blog-area">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-6">
                <div class="daily-show">
                    <img src="<?= base_url() ?>/assets/img/img3.jpg" alt="about images">
                </div>
            </div>
            <div class="col-lg-6">
                 <div class="inner-column">
                    <h2 class="title" style="margin-top: -30px;">Sasaran Dan Kinerja</h2>                    
                    <p>Pusat Litbang Hutan sebagai salah satu uni Eselon II pada Badan Litbang dan Inovasi Kementerian Lingkungan Hidup dan Kehutanan mempunyai tugas menjadi penanggung jawab untuk kegiatan penelitian pengelolaan hutan dengan sasaran kegiatan ada 2 buah yaitu :

                    <br>Tersedianya sistesi hasil peneitian konservasi sumber daya alam, produktivitas hutan, serta penelitian hasil hutan sebagai alternatif sumber pangan, energi dan obat-obatan

                    <br>Agar sasaran kegiatan penelitian pengelolaan hutan tercapai, harus mempunyai ukuran pecapaian atau indikator kinerja kegiatan (IKK). IKK Pusat Litbang Hutan ada 3, yaitu :

                    <br>1. Jumlah rancangan dan pengelolaan stasiun riset Kehati terintegrasi pada 12 TN dan pengelolaan 4 KHDTK;
                    <br>2. Jumlah capaian paket Iptek dan persen kemanfaatan Iptek: konservasi keanekaragaman hayati, konservasi sumberdaya air, peningkatan produktivitas hutan (kayu dan hasil hutan bukan kayu), sumber pangan alternatif dari hutan, sumber energi alternatif dari hutan, obat-obatan tanaman hutan (6 sintesis hasil penelitian dan minimal 70% hasil); 

                    <br>3. Serta Persen capaian paket pengembangan meningkat setiap tahun (5 Pilot Iptek di KPH dan 1 paket pengembangan Iptek).</br></p>
                </div>
            </div>
            
           
        </div>
    </div>
</section>

<!-- visit area end  -->

<!-- animals area start  -->
<section class="animals-slide-area home-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title"> Fauna diindonesia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="animals-carousel">
                    <div class="single-carousel-item">
                        <img class="img-fluid" src="<?= base_url('assets/img/animals/01.png') ?>" alt="screen short">
                        <h5>Indonesia monkey</h5>
                    </div>
                    <div class="single-carousel-item">
                        <img class="img-fluid" src="<?= base_url('assets/img/animals/02.png') ?>" alt="screen short">
                        <h5>Indonesia Elephant</h5>
                    </div>
                    <div class="single-carousel-item">
                        <img class="img-fluid" src="<?= base_url('assets/img/animals/03.png') ?>" alt="screen short">
                        <h5>Indonesian gorilla</h5>
                    </div>
                    <div class="single-carousel-item">
                        <img class="img-fluid" src="<?= base_url('assets/img/animals/04.png') ?>" alt="screen short">
                        <h5>Indonesian panda</h5>
                    </div>
                    <div class="single-carousel-item">
                        <img class="img-fluid" src="<?= base_url('assets/img/animals/05.png') ?>" alt="screen short">
                        <h5>Parrot</h5>
                    </div>
                    <div class="single-carousel-item">
                        <img class="img-fluid" src="<?= base_url('assets/img/animals/06.png') ?>" alt="screen short">
                        <h5>Indonesia giraffe</h5>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>
<section class="blog-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">Informasi tentang Fauna diindonesia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?= base_url('assets/img/bg/gajah.jpg') ?>" alt="blog" />
                    </div>
                    <div class="blog-text">
                        <h3>Gajah Sumatera Diindonesia</h3>
                        <p>Gajah sumatra (Elephas maximus sumatranus) adalah subspesies dari gajah asia yang hanya berhabitat di Pulau Sumatra. Gajah sumatra berpostur lebih kecil daripada subspesies gajah india. Populasinya semakin menurun dan menjadi spesies yang sangat terancam. Sekitar 2000 sampai 2700 ekor gajah sumatra yang tersisa di alam liar berdasarkan survei pada tahun 2000. Sebanyak 65% populasi gajah sumatra lenyap akibat dibunuh manusia, dan 30% kemungkinan dibunuh dengan cara diracuni oleh manusia. Sekitar 83% habitat gajah sumatra telah menjadi wilayah perkebunan akibat perambahan yang agresif.</p>
                        <a href="https://www.liputan6.com/tag/gajah-sumatera" class="Read">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="blog-img blog-2">
                        <img src="<?= base_url('assets/img/bg/panda.jpg') ?>" alt="blog" />
                    </div>
                    <div class="blog-text2">
                        <h4 class="blog-title">Indonesia menjadi negara ke-16 yang memiliki panda raksasa</h4>
                        <p>Dalam waktu dekat, masyarakat Indonesia akhirnya bisa menyaksikan kelucuan panda di Taman Safari Indonesia. Setelah beberapa kali tertunda, menurut siaran pers yang diterima Beritagar.id pada Selasa (26/9/2017), sepasang panda raksasa (Ailuropoda melanoleuca) bakal datang ke Tanah Air.</p>
                        <a href="https://beritagar.id/artikel/berita/indonesia-menjadi-negara-ke-16-yang-memiliki-panda-raksasa" class="Read">Read More</a>
                    </div>
                </div>
                <div class="blog-item mt-30">
                    <div class="blog-img blog-2">
                        <img src="<?= base_url('assets/img/bg/jerapah.jpg') ?>" alt="blog" />
                    </div>
                    <div class="blog-text2">
                        <h4 class="blog-title">Kepunahan Jerapah berkat ulah tangan manusia???</h4>
                        <p>Jakarta, CNN Indonesia -- Fisik jerapah yang menjulang tinggi sekitar 5,8 meter, membuatnya mudah dilihat oleh pemburu yang tergiur melakukan jual beli bagian tubuh jerapah. Konon, harga kepala atau tulang-belulang jerapah berkisar US$ 140 atau sekitar Rp 1,7 juta per potong</p>
                        <a href="https://www.cnnindonesia.com/teknologi/20141209010648-199-16804/jerapah-terancam-punah-karena-ulah-manusia" class="Read">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lets-area lets-bg ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="lets_try">
                    <span>Ayo isi halaman ini</span>
                    <h3>Bagaimana menurut anda tentang flora dan fauna diindonesia</h3>
                    <form id="letsform" class="lets-form" action="<?= base_url('home/komentar'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="username" class="form-control" name="nama" placeholder="Nama lengkap" required autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Alamat Email" required autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-area">
                                    <textarea class="form-control" rows="5" name="komentar" placeholder="Silahkan isi pendapat anda" required autocomplete="off" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="submit-box">
                                    <button type="submit" class="submit-btn">Submit</button>
                                </div>
                            </div>
                        </div>
                
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="lets-image">
                    <img src="<?= base_url('assets/img/bg/lets-bg.png') ?>" alt="lets image">
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- lets area2 end  -->

<!-- blog area start  -->

<!-- blog area end  -->

<!-- footer area start -->
