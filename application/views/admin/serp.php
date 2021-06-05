<style>
  .btn{
    cursor: pointer;
  }

  table.dataTable.row-border tbody tr:first-child th, table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr th, table.dataTable.display tbody tr td {
    padding: 10px;
    width: 100px;
  }

  .scrollable-menu {
    padding: 2px;
    height: 16.7rem;
    overflow-x: hidden;
    white-space: break-spaces;
  }

  #datatable-mantab{
    overflow-x: scroll;
    white-space: nowrap;
    /* max-width: 100%; */
    display: block;
  }

  @media (max-width: 768px){
    .form-control{
      margin-bottom: 10px;
    }

    .br-pagebody {
      margin-top: 15px;
      padding: 20px;
    }
  }
</style>
<div class="br-mainpanel">

  <div class="pd-t-30 pd-l-30 pd-r-30">
    <h4 class="tx-gray-800 mg-b-5">SERP Analyzer</h4>
    <p class="mg-b-0">Demo Tool PRO</p>
  </div><!-- d-flex -->

  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">

    <div class="row">
      <div class="col-md-7">
        <input type="text" name="url" id="url" class="form-control" placeholder="keyword" required>
      </div>
      <div class="col-md-2">
        <input type="text" name="halaman" id="halaman" class="form-control" placeholder="berapa halaman" required>
      </div>
      <div class="col-md-3">
        <button class="btn btn-info waves-effect waves-light m-b-5" id="start" style="cursor: pointer; width: 100%"> <b>SCRAP URL</b></button>
      </div>
    </div>
    <!-- tutup row -->


  </div>

  <div class="br-pagebody">
    <div class="br-section-wrapper p-2">

      <!-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Lalala</h6> -->
      <div class="table-wrapper">
        <table id="datatable-mantab" class="table display responsive datatable-mantab order-column" style="width: 100%;">
          <thead>
            <tr>
              <th>URL</th>
              <th width="20"><center>Rank</center></th>
              <th width="70"><center>Kata</center></th>
              <th width="70"><center>Ex Match</center></th>
              <th width="100"><center>Detail</center></th>
            </tr>
          </thead>
          <tbody id="iDo">
          </tbody>
        </table>
      </div><!-- table-wrapper -->
      

      <div class="row">


      </div>

    </div>
  </div>


  <script type="text/javascript">

    var xyz ='<?= site_url('Tool/List_url') ?>';
    var au = '<?= site_url('Tool/List_ranked') ?>';
    
</script>
<script src="<?= site_url('assets/t4.js'); ?>"></script>
