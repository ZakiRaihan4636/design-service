      
      <div class="container">
           <h1 style="color:#DBA39A" class="h1 font-weight-bold mt-4">Jasa desain kami</h1>
  <p class="lead">
    Berikut beberapa jasa produk kami
  </p>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'spanduk')" id="defaultOpen">Logo</button>
                <button class="tablinks" onclick="openCity(event, 'kartu_nama')">Browsur</button>
                <button class="tablinks" onclick="openCity(event, 'undangan')" >Poster</button>
              </div>
            </div>
          </div>


            
            <!-- <div class="row mb-5">
              <?php  
              $nomor = 0;
              $data = $this->muser->tampil_data_gambar($nomor,1);

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
                    $jumlah = $this->muser->jumlah_halaman(count($undangan->result()));
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

          <div class="col-md-12 tabcontent" id="undangan">
    
    <div class="row mb-5">
      <?php 
        $nomot = 0;
        $data = $this->muser->tampil_data_gambar($nomor,1);
        
        if(count($data->result())> 0 ){
          foreach ($data->result() as $key => $value){
            $keterangan = json_decode($value->keterangan);        
      ?>
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="<?=base_url($keterangan->img)?>" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="<?=base_url()?>user/detail/<?=$value->no?>" class="text-dark"><?= $value->judul; ?></a></h5>
            <p class="small text-muted mb-0"></p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Harga</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><span>Rp </span><?=number_format($keterangan->harga)?></div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a class="btn btn-warning text-white" href="<?=base_url()?>user/detail/<?=$value->no?>" role="button">Detail</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
      <?php }
      } ?>
    </div>
</div>
          <!-- </div>  --> 
          
          
          <div class="col-md-12 tabcontent" id="kartu_nama">
            <div class="row mb-5">
      <?php 
        $nomot = 0;
        $data = $this->muser->tampil_data_gambar($nomor,2);
        
        if(count($data->result())> 0 ){
          foreach ($data->result() as $key => $value){
            $keterangan = json_decode($value->keterangan);        
      ?>
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="<?=base_url($keterangan->img)?>" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="<?=base_url()?>user/detail/<?=$value->no?>" class="text-dark"><?= $value->judul; ?></a></h5>
            <p class="small text-muted mb-0"></p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Harga</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><span>Rp </span><?=number_format($keterangan->harga)?></div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a class="btn btn-warning text-white" href="user/detail/<?=$value->no?>" role="button">Detail</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
      <?php }
      } ?>
    </div>
</div>

          <div class="col-md-12 tabcontent" id="spanduk">
                <div class="row mb-5">
      <?php 
        $nomot = 0;
        $data = $this->muser->tampil_data_gambar($nomor,3);
        
        if(count($data->result())> 0 ){
          foreach ($data->result() as $key => $value){
            $keterangan = json_decode($value->keterangan);        
      ?>
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="<?=base_url($keterangan->img)?>" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="<?=base_url()?>home/project/<?=$value->no?>" class="text-dark"><?= $value->judul; ?></a></h5>
            <p class="small text-muted mb-0"></p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Harga</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><span>Rp </span><?=number_format($keterangan->harga)?></div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a class="btn btn-warning text-white" href="user/detail/<?=$value->no?>" role="button">Detail</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
      <?php }
      } ?>
    </div>
</div>

        </div>
      </div>