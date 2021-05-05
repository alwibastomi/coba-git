<style>
  .blockquote {
    /* padding: 60px 80px 40px; */
    padding-top: 20px;
    position: relative;
  }
  .blockquote p {
    font-family: "Utopia-italic";
    font-size: 35px;
    font-weight: 700px;
    text-align: center;
  }

  .blockquote::before {
    position: absolute;
    font-family: 'FontAwesome';
    top: 0;

    content:"\f10d";
    font-size: 200px;
    color: rgba(0,0,0,0.1);

  }

  .blockquote::after {
    content: "";
    top: 20px;
    left: 50%;
    margin-left: -100px;
    position: absolute;
    border-bottom: 3px solid #bf0024;
    height: 3px;
    width: 200px;
  }

  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic);
  .otro-blockquote{
    font-size: 1em;
    font-family:Open Sans;
    font-style:italic;
    color: #555555;
    padding:20px;
    border-left:8px solid #78C0A8 ;
    line-height:1.6;
    position: relative;
    background:#EDEDED;
  }

  .otro-blockquote::before{
    font-family:Arial;
    content: "\201C";
    color:#78C0A8;
    font-size:4em;
    position: absolute;
    left: -5px;
    top:-10px;
  }

  .otro-blockquote::after{
    content: '';
  }

  .otro-blockquote span{
    display:block;
    color:#333333;
    font-style: normal;
    font-weight: bold;
    margin-top:1em;
  }
</style>
<div class="br-logo"><a href="<?= site_url('Dashboard') ?>"><img src="<?= site_url('assets/images/Logo-03.png') ?>" alt="" width="200"></a></div>
<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
  <div class="br-sideleft-menu">
    <a href="<?= site_url('Dashboard') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="Dashboard"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('Tool/Semantic') ?>" class="br-menu-link <?php if($this->uri->segment(2)=="Semantic"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item fa fa-server tx-20"></i>
        <span class="menu-item-label">Semantic Tool</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('Tool/Heading') ?>" class="br-menu-link <?php if($this->uri->segment(2)=="Heading"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item fa fa-sitemap tx-20"></i>
        <span class="menu-item-label">Heading Spy</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('Tool/Rank') ?>" class="br-menu-link <?php if($this->uri->segment(2)=="Rank"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item fa fa-sticky-note tx-20"></i>
        <span class="menu-item-label">SERP Analyzer</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('Tool/Tracker') ?>" class="br-menu-link <?php if($this->uri->segment(2)=="Tracker"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item fa fa-book tx-20"></i>
        <span class="menu-item-label">Tracker</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('Tool/Konsensus') ?>" class="br-menu-link <?php if($this->uri->segment(2)=="Konsensus"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item fa fa-database tx-20"></i>
        <span class="menu-item-label">Konsensus</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

  </div><!-- br-sideleft-menu -->

  <!-- <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Lainnya</label> -->
  <div class="info-list">

<!--     <a href="#" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-person tx-24"></i>
        <span class="menu-item-label">Profile</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div>
    </a>
    <ul class="br-menu-sub nav flex-column">
      <li class="nav-item"><a href="<?= site_url('Tool/Tool1') ?>" class="nav-link">Lihat Profile</a></li>
      <li class="nav-item"><a href="<?= site_url('Tool/Tool2') ?>" class="nav-link">Ubah Profile</a></li>
    </ul> -->

    <?php
    $lumpia = array('6281336251766', '6285859663776');
    if ($level == 1) { ?>
      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon fa fa-database tx-24"></i>
          <span class="menu-item-label">MASTER</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
<!--       <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="<?= site_url('User/') ?>" class="nav-link">User</a></li>
        <li class="nav-item"><a href="<?= site_url('') ?>" class="nav-link">Activity Log</a></li>
        <li class="nav-item"><a href="<?= site_url('') ?>" class="nav-link">Transaksi</a></li>
      </ul> -->
    <?php } ?>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSduK4MxGhXrYNXj35D4UVRpXXRBA5vNJacOsBBTqtttekuuQQ/viewform?usp=sf_link" target="_blank" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-chatbubble-working tx-24"></i>
        <span class="menu-item-label">Lapor Masalah</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeXtSbHuUTfxQ5HcRy63amv14HE0O48Z4PLtRZrqsc3YzcOsQ/viewform?usp=sf_link" target="_blank" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-filing tx-24"></i>
        <span class="menu-item-label">Saran/request fitur</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

    <a href="<?= site_url('Login/logout') ?>" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon fa fa-question-circle tx-20"></i>
        <span class="menu-item-label">Troubleshoot</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

    <div class="bd mt-3"></div>
    <!-- <a href="<?= site_url('Login/logout') ?>" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon fa fa-sign-out tx-24"></i>
        <span class="menu-item-label">Logout</span>
      </div>
    </a> -->
    
    <a href="<?= site_url('About') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="About"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
        <span class="menu-item-label">About</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

    <div class="bd mt-3"></div>

    <div class="mt-3 p-1 bd">
      <center><img src="<?= site_url('assets/template/img/aqil.jpeg') ?>" class="align-center" width="80" alt="foto aqil"></center>
    </div>
    <blockquote class="otro-blockquote">
      Kalau bisa menang banyak keyword kenapa cuman narget satu doang
      <span>Aqil Da Fortress</span>
    </blockquote>

  </div>

  <br>
</div><!-- br-sideleft -->
