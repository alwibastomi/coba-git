<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    window.location = "<?= site_url('User') ?>";
  </script>
<?php }?>
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Menu</a>
      <span class="breadcrumb-item"><?= $this->uri->segment(1) ?></span>
      <span class="breadcrumb-item active"><?= $title ?></span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5"><?= $title ?></h4>
  </div>

  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <form class="form-horizontal" action="" role="form" method="post" enctype="multipart/form-data">

        <div class="form-group mg-b-10-force">
          <div class="col-sm-6">
            <label class="form-control-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
        </div>

        <div class="form-group mg-b-10-force">
          <div class="col-sm-6">
            <label class="form-control-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
        </div>

        <div class="form-group mg-b-10-force">
          <div class="col-sm-6">
            <label class="form-control-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
          </div>
        </div>

        <div class="form-group mg-b-10-force">
          <div class="col-lg-12">
            <label class="form-control-label">Aktif</label>
            <div class="row">
              <div class="col-lg-3">
                <select class="form-control select2" name="tahun" style="border-radius: 0; border-color: #d9d9d9;" data-live-search="true" data-style="btn-white">
                  <?php
                  $tahun = date('Y')+10;
                  $i = date('Y');
                  for ($i; $i <= $tahun; $i++) { ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                  <?php } ?>
                </select>
              </div>

              <?php $lala = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); ?>
              <div class="col-lg-3">
                <select class="form-control select2" name="bulan" style="border-radius: 0; border-color: #d9d9d9;" data-live-search="true" data-style="btn-white">
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
          </div>
        </div>

        <div class="form-group mg-b-10-force">
          <div class="col-sm-6">
            <label class="form-control-label">Level</label>
            <select class="form-control select2" name="level" style="border-radius: 0;">
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

    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
  <script type="text/javascript">
    $(function() {
      $('.selectpicker').selectpicker();
    });
  </script>
