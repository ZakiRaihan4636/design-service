    <section class="site-section">
      <div class="container">
        <div class="row">
          <?php foreach ($data->result() as $key => $value);
            $ket = json_decode($value->keterangan);
          ?>

          <div class="d-flex ml-3">
            <img width="700" src="<?=base_url($ket->img)?>" alt="Image" class="img-fluid" alt="">
            <div class="foto d-flex flex-column ml-2">
              <img width="400" src="<?=base_url($ket->img)?>" alt="">
              <img width="400" class="mt-2" width="20" src="<?=base_url($ket->img)?>" alt="">
            </div>
          </div>
          
          <div class="col-md-12 mt-4">
                <h1><?= $value->judul; ?></h1>
                <p><?= $value->deskripsi; ?></p>
          </div>

          <div class="col-md-12 mt-2 py-2">

          <div class="card py-2 pl-4">
            <div class="d-flex">
                <img widht=70 height=70 src="<?=base_url()?>assets/images/avatar-1.jpg" alt="Image" class="rounded-circle my-2">
                <div class="d-flex flex-column mx-2">
                  <div class="d-flex justify-content-between mt-2 mb-2">
                       <h3 class="font-weight-bold">Desainer</h3>
                       <a href="https://wa.me/085718805934" class="btn btn-outline-primary mr-2">Chat dan nego</a>
                  </div>
                     <p>Berpengalaman 8 tahun pada desain grafis, materi promosi, materi media sosial, logo dll. Anda sudah berada di tempat yang tepat, jadi nikmati saja secangkir kopi anda & semua keperluan promosi bisnis anda biar saya yang menangani.</p>
              </div>
           
            
            </div>
            

          </div>
                      
          </div>

          
        </div>
      </div>
    </section>