
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
                    <h2 class="title">Yuu Mengenal Lebih Dekat Dengan fauna Dan Fauna Diindonesia </h2>
                    <ul class="page-list">
                        <li><a href="#">Mari Jaga Dan Lindungi Satwa Serta Flora Diindonesia</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Breadcumb area end  -->


<!-- gallery area start  -->
<div class="gallery-area">
    <div class="container">
        <h2 class="text-center" style="margin-top: -30px">Inilah Beberapa Flora Dan Fauna Yang Dilindungi</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="our-gallery-menu clearfix">
                    <ul class="filterizr__controls list-unstyled list-inline filter-tabs">
                        <li class="active filter" data-role="button" data-filter="all"> All</li>
                        <li class="filter" data-role="button" data-filter="flora">Flora</li>
                        <li class="filter" data-role="button" data-filter="fauna">Fauna</li>
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="filterizr__elements">
                <?php foreach($fauna as $f) : ?>
                <div class="filtr-item col-md-6 col-lg-4" data-category="fauna">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?php echo base_url().'/assets/img/upload/'.$f->gambar; ?>" width="348" height="300">
                        </div>

                        <div class="img-overlay">
                            <div class="view-button text-center">
                                <a href="<?php echo base_url('home/detail_fauna/').$f->id ?>" ><i class="fa fa-search"></i></a>
                                <!----><p><?= $f->nama_binatang ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

                <?php foreach($flora as $f) : ?>
                <div class="filtr-item col-md-6 col-lg-4" data-category="flora">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?php echo base_url().'/assets/img/upload/'.$f->gambar; ?>" width="348" height="300">
                        </div>

                        <div class="img-overlay">
                            <div class="view-button text-center">
                                <a href="<?php echo base_url('home/detail_flora/').$f->id ?>" ><i class="fa fa-search"></i></a>
                                <!----><p><?= $f->nama_tanaman ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        
            </div>
        </div>
    </div>
</div>
<!-- gallery area end  -->

