
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
    <section class="breadcumb-area breadcrumb-bg" style="background-image: url('http://localhost/Puslitbang_Bogor/assets/img/anggrek.jpg');">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="breadcumb-inner">
                        <h2 class="title-blog">Detail Artikel</h2>
                        <ul class="page-list">
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb area end  -->


    <!-- blog details area start  -->
    <section class="blog-details-page-content-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog-details-content">
                        <!-- blog details content  -->
                        <div class="thumb">
                        	<img src="<?php echo base_url().'/assets/img/upload/'.$artikel->gambar; ?>">
                        </div>
                        <div class="post-meta"><?= date('d F Y',strtotime($artikel->tanggal)) ?>
                        </div>
                        <h4 class="title"><?= $artikel->judul ?></h4>
                        
                        <div class="entry-content">
                        	<p><?= $artikel->deskripsi ?></p>
                        </div>
                        <div class="entry-footer">
                            <!-- entry footer -->
                           
                        </div><!-- //. entry footer -->
                        
                        
                    </div><!-- //. blog details content -->
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar">
                        
                        <div class="widget widget-popular-post">
                            <h6 class="widgettitle">
                                <span>Artikel Terbaru</span>
                            </h6>
                     <?php  foreach($artikel2 as $a) : ?>
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
    <!-- blog details area end  -->

