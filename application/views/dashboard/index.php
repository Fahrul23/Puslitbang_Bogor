
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-user"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Admin</h4>
                    <span><?= $this->M_kehutanan->get_data('admin')->num_rows(); ?></span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-1"><i class="fas fa-eye"></i></span>
                       <a href="<?= base_url('admin') ?>" class="text-white">View Detail</a> 
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cyan-dark">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-tree"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Flora</h4>
                    <span><?= $this->M_kehutanan->get_data('flora')->num_rows(); ?></span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-orange" role="progressbar" data-width="75%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-1"><i class="fas fa-eye"></i></span>
                       <a href="<?= base_url('flora') ?>" class="text-white">View Detail</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-purple-dark">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-feather"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Fauna</h4>
                    <span><?= $this->M_kehutanan->get_data('fauna')->num_rows(); ?></span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="55%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-1"><i class="fas fa-eye"></i></span>
                       <a href="<?= base_url('fauna') ?>" class="text-white">View Detail</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-file-alt"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Artikel</h4>
                    <span><?= $this->M_kehutanan->get_data('artikel')->num_rows(); ?></span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-green" role="progressbar" data-width="85%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-1"><i class="fas fa-eye"></i></span>
                       <a href="<?= base_url('artikel') ?>" class="text-white">View Detail</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h4>Admin</h4>
                  <div class="card-header-action">
                    <a href="<?= base_url('admin') ?>" class="btn btn-info"> <i class="fa fa-eye"></i> View All</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th style="width:80%;">Nama</th>
                        <th style="width:20%;">Detail</th>
                        
                      </tr>
                      <?php foreach($admin as $a) : ?>
                      
                      <tr>
                        <td>
                          <div class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="40" src="<?= base_url('assets/img/user.png') ?>">
                            <div class="media-body">
                              <div class="media-title"><?= $a->nama_admin ?></div>
                              <div class="text-job text-muted">Administrator</div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="media-cta">
                            <a href="<?= base_url('admin/profile/').$a->id_admin ?>" class="btn btn-outline-primary">Detail</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Artikel Terbaru</h4>
                    <div class="card-header-action">
                      <a href="<?= base_url('artikel') ?>" class="btn btn-info"> <i class="fa fa-eye"></i> View All</a>
                    </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th style="width:65%;">Judul Artikel</th>
                        <th style="width:18%;">Gambar</th>
                        <th>Details</th>
                      </tr>
                        <?php foreach($artikel as $a) : ?>
                      <tr>
                        <td>
                          <div class="media-title"><?= $a->judul ?></div>
                        </td>
                        <td><img src="<?php echo base_url('assets/img/upload/').$a->gambar; ?>" width="65"></td>
                        <td>
                          <div class="media-cta">
                            <a href="<?= base_url('artikel/detail/').$a->id ?>" class="btn btn-outline-primary">Detail</a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fas fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label>
                    <span class="control-label p-r-20">Mini Sidebar</span>
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                  </label>
                </div>
              </div>
             
                         </div>
          </div>
        </div>
      </div>
   