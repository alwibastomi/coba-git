<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    window.location = "<?= site_url('User') ?>";
  </script>
<?php }?>
<!-- Top Bar Start -->

<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">


      <div class="row">
        <div class="col-sm-12">
          <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Add User</h4>

            <form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">

              <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-6">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                  <i class="fa fa-book form-control-feedback l-h-34"></i>
                </div>
              </div>

              <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-6">
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                  <i class="fa fa-book form-control-feedback l-h-34"></i>
                </div>
              </div>

              <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-6">
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                  <i class="fa fa-book form-control-feedback l-h-34"></i>
                </div>
              </div>

              <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">Aktif</label>
                <div class="col-sm-3">
                  <select class="form-control" name="tahun" style="border-radius: 0;">
                    <?php
                    $tahun = date('Y')+10;
                    $i = date('Y');
                    for ($i; $i <= $tahun; $i++) { ?>
                      <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <?php $lala = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); ?>
                <div class="col-sm-3">
                  <select class="form-control" name="bulan" style="border-radius: 0;">
                    <?php
                    $i = 0;
                    foreach ($lala as $key): 
                      $i+1;
                      $i++;
                      ?>
                      <option value="<?= $i; ?>"><?= $key; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>

              <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">Level</label>
                <div class="col-sm-6">
                  <select class="form-control" name="level" style="border-radius: 0;">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                  </select>
                </div>
              </div>

              <h4 class="page-header m-t-0"></h4>
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-sm-2">
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-info waves-effect waves-light m-b-5" name="save"> <i class="fa fa-save m-r-5"></i> <span>Save</span> </button>
                    <a href="<?= site_url('User') ?>" class="btn btn-primary m-b-5"><i class="fa fa-mail-reply"></i> Back</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div><!-- end col -->
      </div>
      <!-- end row -->

    </div> <!-- container -->

  </div> <!-- content -->

