    <header style="background:#F5EBE0;" class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <span style="color:#DBA39A;" class="h5 font-weight-bold">Desain Service</span>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li <?php if ($this->uri->segment(2) == '') { echo 'class="active"'; } ?>><a href="<?=base_url()?>"  style="color:#DBA39A;">Home</a></li>
                <li <?php if ($this->uri->segment(2) == '') { echo 'class="active"'; } ?>><a href="#about"  style="color:#DBA39A;">Tentang Kami</a></li>
                <li style="color:#DBA39A;" <?php if ($this->uri->segment(2) == 'project') { echo 'class="active"'; } ?>><a href="<?=base_url()?>home/portfolio"  style="color:#DBA39A;">Portfolio</a></li>
                <li style="color:#DBA39A;" <?php if ($this->uri->segment(2) == 'project') { echo 'class="active"'; } ?>><a href="<?=base_url()?>home/project"  style="color:#DBA39A;">Layanan Kami</a></li>
                <li <?php if ($this->uri->segment(2) == '') { echo 'class="active"'; } ?>><a href="<?=base_url()?>"  style="color:#DBA39A;">Testimoni</a></li>
                <li style="background:#DBA39A;" class="btn" <?php if ($this->uri->segment(2) == 'prelogin') { echo 'class="active"'; } ?>><a href="<?=base_url()?>home/prelogin"  style="color:#ffff;">Login</a></li>
                <li style="color:#DBA39A;" class="btn btn-light" <?php if ($this->uri->segment(2) == 'prelogin') { echo 'class="active"'; } ?>><a href="<?=base_url()?>home/prelogin"  style="color:#DBA39A;">Register</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>