
<!-- ============End Navigation ===== -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-popup-form">
            <div class="form-element">
                <input type="text" class="input-field" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
        </form>
    </div>


    <!-- Breadcumb area start  -->
    <section class="breadcumb-area breadcrumb-bg" style="background-image: url('http://localhost/puslitbang/assets/img/img18.jpg');">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="breadcumb-inner">
                        <h2 class="title-blog">Berita Harian</h2>
                        <ul class="page-list">
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb area end  -->


    <!-- blog area start  -->
    <section class="blog-area blog-bg blog-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="row">
                        <?php foreach($artikel as $a) : ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-blog-item">
                                    <!-- single blog item -->
                                    <div class="thumb">
                                        <img src="<?= base_url() .'/assets/img/upload/'.$a->gambar; ?>" alt="blog single image" >
                                    </div>
                                    <div class="content">
                                       <a href="<?= base_url('home/detail_artikel/').$a->id ?>">
                                            <h3 class="title"><?= $a->judul ?></h3>
                                        </a>
                                        <p>Silahkan klik dibwah ini untuk melihat detail</p>
                                        <a href="<?= base_url('home/detail_artikel/').$a->id ?>" class="readmore">Read More</a>
                                    </div>
                                </div><!-- //. single blog item -->
                            </div>
                        <?php endforeach; ?>        
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-pagination">
                            <?= $this->pagination->create_links(); ?>
                               
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar">
                        <div class="widget widget-popular-post">
                            <h6 class="widgettitle">
                                <span>Berita Terbaru</span>
                            </h6>
                            <?php foreach($artikel2 as $a) : ?>
                            <div class="single-post">
                                <div class="part-img">
                                    <img src="<?php echo base_url().'/assets/img/upload/'.$a->gambar; ?>">
                                </div>
                                <div class="part-text">
                                    <span><?= date('d F Y',strtotime($a->tanggal)) ?></span>
                                    <h4><a href="<?= base_url('home/detail_artikel/').$a->id ?>"><?= $a->judul ?></a></h4>
                                </div>
                            </div>
                            <?php endforeach; ?>
                          
                        </div>
                
                       
                
                
                      
                
                    </div>
                </div>

            </div>
    
        </div>
    </section>
    <!-- blog area end  -->

