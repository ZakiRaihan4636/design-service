      
      <div class="container">
           <h1 style="color:#DBA39A" class="h1 font-weight-bold mt-4">Jasa desain kami</h1>
  <p class="lead">
    Berikut beberapa jasa produk kami
  </p>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'undangan')" id="defaultOpen">Logo</button>
                <button class="tablinks" onclick="openCity(event, 'kartu_nama')">Browsur</button>
                <button class="tablinks" onclick="openCity(event, 'spanduk')">Poster</button>
              </div>
            </div>
          </div>


          <div class="col-md-12 tabcontent" id="undangan">
            
            <!-- <div class="row mb-5">
              <?php  
              $nomor = 0;
              $data = $this->mhome->tampil_data_gambar($nomor,1);

              if (count($data->result())>0) {
                foreach ($data->result() as $key => $value) { 
                  $keterangan = json_decode($value->keterangan);
                  ?>
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-4">
                <div class="h-entry">
                  <a href="<?=base_url()?>home/project/<?=$value->no?>"><img src="<?=base_url($keterangan->img)?>" alt="Image" class="img-fluid"></a>

                  <center><div class="meta mb-4"><span class="mx-2"></span>Upload &bullet; <?=$value->tanggal_upload?><span class="mx-2">&bullet;</span> </div>
                  <p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs</p>
                  <a href="<?=base_url()?>home/project/<?=$value->no?>"><button type="button"  class="btn btn-warning btn-md text-white"> Detail </button></a></center>
                </div> 
              </div> 
                <?php }
              }
              ?>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="custom-pagination text-center">
                  <?php  
                    $jumlah = $this->mhome->jumlah_halaman(count($undangan->result()));
                    $ii = 0;
                    for ($i=1; $i <= $jumlah ; $i++) { ?> 
                  <span style="cursor: pointer;" onclick="tukar_halaman(<?=$ii?>,1)"><?=$i?></span>
                    <?php $ii+=12;}
                  ?>                 
                </div>
              </div>
            </div>
            <div class="container-fluid">
  <div class="px-lg-5">

    <!-- For demo purpose -->

    
    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Blorange</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">And She Realized</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-5.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Pineapple</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-6.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-7.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-info px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

    </div>
    <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
  </div>
</div>
          <!-- </div>  --> -->
          
          
          <div class="col-md-12 tabcontent" id="kartu_nama">
            <div class="row mb-5">
              <?php  
              $nomor = 0;
              $data = $this->mhome->tampil_data_gambar($nomor,2);

              if (count($data->result())>0) {
                foreach ($data->result() as $key => $value) { 
                  $keterangan = json_decode($value->keterangan);
                  ?>
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-4">
                <div class="h-entry">
                  <a href="<?=base_url()?>home/project/<?=$value->no?>"><img src="<?=base_url($keterangan->img)?>" alt="Image" class="img-fluid"></a>

                  <center><div class="meta mb-4"><span class="mx-2"></span>Upload &bullet; <?=$value->tanggal_upload?><span class="mx-2">&bullet;</span> </div>
                  <p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs</p>
                  <a href="<?=base_url()?>home/project/<?=$value->no?>"><button type="button"  class="btn btn-warning btn-md text-white"> Detail </button></a></center>
                </div> 
              </div> 
                <?php }
              }
              ?>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="custom-pagination text-center">
                  <?php  
                    $jumlah = $this->mhome->jumlah_halaman(count($kartu_nama->result()));
                    $ii = 0;
                    for ($i=1; $i <= $jumlah ; $i++) { ?> 
                  <span style="cursor: pointer;" onclick="tukar_halaman(<?=$ii?>,2)"><?=$i?></span>
                    <?php $ii+=12;}
                  ?>                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 tabcontent" id="spanduk">
            <div class="row mb-5">
              <?php  
              $nomor = 0;
              $data = $this->mhome->tampil_data_gambar($nomor,3);

              if (count($data->result())>0) {
                foreach ($data->result() as $key => $value) { 
                  $keterangan = json_decode($value->keterangan);
                  ?>
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-4">
                <div class="h-entry">
                  <a href="<?=base_url()?>home/project/<?=$value->no?>"><img src="<?=base_url($keterangan->img)?>" alt="Image" class="img-fluid"></a>

                  <center><div class="meta mb-4"><span class="mx-2"></span>Upload &bullet; <?=$value->tanggal_upload?><span class="mx-2">&bullet;</span> </div>
                  <p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs</p>
                  <a href="<?=base_url()?>home/project/<?=$value->no?>"><button type="button"  class="btn btn-warning btn-md text-white"> Detail </button></a></center>
                </div> 
              </div> 
                <?php }
              }
              ?>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="custom-pagination text-center">
                  <?php  
                    $jumlah = $this->mhome->jumlah_halaman(count($spanduk->result()));
                    $ii = 0;
                    for ($i=1; $i <= $jumlah ; $i++) { ?> 
                  <span style="cursor: pointer;" onclick="tukar_halaman(<?=$ii?>,3)"><?=$i?></span>
                    <?php $ii+=12;}
                  ?>                 
                </div>
              </div>
            </div>
          </div>

          

        </div>
      </div>