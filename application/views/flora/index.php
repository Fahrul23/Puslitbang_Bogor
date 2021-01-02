      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header mt-2 mb-2">
                    <div class="col-md-2">
                      <h4>Data Flora</h4>
                    </div>
                    
                  </div>
                   <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

             <?php if ($this->session->flashdata('flash')) : ?>
          
              <?php endif; ?>
              <div class="col-lg-6 ml-3">
                      <a href="#" class="btn btn-primary tombol-tambah" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus pr-2"></i>Tambah Data</a>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_id">
                        <thead>
                          <tr>
                             <th class="text-center">
                              No
                            </th>
                            <th>Nama Tanaman</th>
                            <th>Gambar</th>
                            <th>Pilihan</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                            $no=1;
                           foreach($tanaman as $t) : ?>
                          <tr>
                            <td>
                              <?= $no++ ?>
                            </td>
                            <td><?= $t->nama_tanaman; ?></td>
                            <td><img src="<?php echo base_url().'/assets/img/upload/'.$t->gambar; ?>" width="100"></td>
                            <td><a href="<?= base_url('Flora/form_edit/').$t->id ?>" class="btn btn-action bg-purple mr-1 tombol-edit" title="" data-original-title="Edit" data-toggle="tooltip" data-id="<?= $t->id; ?>" >
                              <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a href="<?= base_url('flora/detail/').$t->id ?>" class="btn btn-success btn-action mr-1 tombol-detail" data-toggle="tooltip" title=""  data-original-title="Detail"><i class="fas fa-eye"></i></a>
                
                              <a href="<?= base_url(); ?>Flora/hapus_data/<?= $t->id; ?>" class="btn btn-danger btn-action mr-1 tombol-hapus" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                            </td>

                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
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
              <div class="p-15 border-bottom">
               
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true" style="display: none;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Form Tambah Data Tanaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="" method="post" action="<?= base_url('Flora/tambah_data') ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Tanaman</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-tree"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Nama Tanaman" name="nama_tanaman" required autocomplete="off" >
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" required autocomplete="off" ></textarea>
                    </div>
                  <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="gambar" class="form-control" required autocomplete="off" >
                  </div>
                  <div class="footer-button">
                  <button type="submit" class="btn btn-primary m-t-15 waves-effect float-right">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
