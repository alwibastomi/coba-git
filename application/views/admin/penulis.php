<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Menu</a>
      <span class="breadcrumb-item active"><?= $title ?></span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Data <?= $title ?></h4>
  </div>

  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <a href="<?= site_url('User/tambah') ?>" style="margin-top: -10px; float: right;" class="btn btn-primary" title="">Tambah User</a>
      <br>
      <div class="table-wrapper mt-3">
        <table id="datatable-ku" class="table display responsive nowrap datatable-ku" data-func="user" data-meth="penulis_datatable">
          <thead>
            <tr>
              <th class="wd-15p">Email</th>
              <th class="wd-15p">Nama</th>
              <th class="wd-20p">Date Status</th>
              <th class="wd-15p">Status</th>
              <th class="wd-10p">Level</th>
              <th class="wd-25p">Aksi</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
  <script type="text/javascript">

  </script>
