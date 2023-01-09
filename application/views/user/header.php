    <header style="background:#F5EBE0;" class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <span style="color:#DBA39A;" class="h5 font-weight-bold">Desain Service</span>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                   <li <?php if ($this->uri->segment(2) == '') { echo 'class="active"'; } ?>><a style="color:#DBA39A;" href="<?=base_url()?>user">Jasa Desain </a></li>
                <li <?php if ($this->uri->segment(2) == 'pesanan') { echo 'class="active"'; } ?>><a style="color:#DBA39A;" href="<?=base_url()?>user/pesanan">Pesanan</a></li>
                <li <?php if ($this->uri->segment(2) == 'pengembalian') { echo 'class="active"'; } ?>><a style="color:#DBA39A;" href="<?=base_url()?>user/pengembalian">Pengembalian</a></li>
               
                <li <?php if ($this->uri->segment(2) == 'user') { echo 'class="active"'; } ?>><a style="color:#DBA39A;" href="<?=base_url()?>user/user">Pembeli</a></li>
                <li style="background:#DBA39A;" class="btn"><a href="<?=base_url()?>user/logout"  style="color:#ffff;">Logout</a></li>

              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
