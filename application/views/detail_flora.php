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
<section class="breadcumb-area breadcrumb-bg" style="background-image: url('http://localhost/kehutanan/assets/img/flora.jpg');">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Detail Flora </h2>
                    <ul class="page-list">
                        <li>Dibawah Ini adalah Detail dari flora di indonesia</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Breadcumb area end  -->

<!-- destination details area start  -->
<section class="destination-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="destination-image">
                    <img src="<?php echo base_url().'/assets/img/upload/'.$flora->gambar; ?>" alt="destination images">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="destination-details-content">
                    <h3><?= $flora->nama_tanaman ?></h3>
                    <p>
                        <?= $flora->deskripsi ?>
                    </p>
                    
                
                </div>
            </div>   
        </div>
      
      
        </div>
        
       

        </div>
      

       
    </div>
</section>
<!-- daily show area end  -->
