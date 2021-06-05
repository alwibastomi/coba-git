<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/1.10.24/features/searchHighlight/dataTables.searchHighlight.css"/>
<script src="//cdn.datatables.net/plug-ins/1.10.24/features/searchHighlight/dataTables.searchHighlight.min.js" type="text/javascript"></script>
<script src="//bartaz.github.io/sandbox.js/jquery.highlight.js" type="text/javascript"></script>
<style>
  .btn{
    cursor: pointer;
  }

  .table-wrapper .btn{
    position: relative;
    z-index: 1;
  }

  table.dataTable.row-border tbody tr:first-child th, table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr th, table.dataTable.display tbody tr td {
    padding: 10px;
    width: 100px;
  }

  .tengah{
    text-align: center;
  }

  #datatable-mantab, #datatable-top{
    overflow-x: scroll;
    white-space: nowrap;
  }

  #datatable-mantab{
    display: block;
  }

  .disabled{
    pointer-events:none;
  }

 /*  #datatable-mantab_wrapper{
    margin-top: -40px;
    }*/

    tbody tr td{
      white-space: normal;
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
      <h4 class="tx-gray-800 mg-b-5">Konsensus</h4>
      <p class="mg-b-0">Demo Tool PRO</p>
    </div><!-- d-flex -->

    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">

      <div class="row">
        <div class="col-md-12">
          <input type="text" name="keyword" id="keyword" class="form-control p-3 text-center" style="font-size: 1.2rem" placeholder="keyword" required>
        </div>
      </div>

      <div class="bd bd-2 p-2 mt-3">
        <h6>URL</h6>
        <div class="row mt-4">
          <div class="col-md-4">
            <input type="text" name="url" id="url1" class="form-control" placeholder="url/domain">
          </div>
          <div class="col-md-4">
            <input type="text" name="url" id="url2" class="form-control" placeholder="url/domain">
          </div>
          <div class="col-md-4">
            <input type="text" name="url" id="url3" class="form-control" placeholder="url/domain">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-4">
            <input type="text" name="url" id="url4" class="form-control" placeholder="url/domain">
          </div>
          <div class="col-md-4">
            <input type="text" name="url" id="url5" class="form-control" placeholder="url/domain">
          </div>
          <div class="col-md-4">
            <input type="text" name="url" id="url6" class="form-control" placeholder="url/domain">
          </div>
          <div class="col mt-3">
            <center><button class="btn btn-info pd-x-30 pd-y-15 tx-uppercase tx-bold tx-spacing-6 tx-12" title="analisa" id="ani">Analisa</button> <button class="btn btn-danger pd-x-35 pd-y-15 tx-uppercase tx-bold tx-spacing-6 tx-12" title="reset url dan keyword" onclick="reset(1)">Reset</button></center>
          </div>
        </div>
        <!-- tutup row -->
      </div>

    </div>



    <div class="row">
      <div class="col-md-12">
        <div class="br-pagebody">
          <div class="br-section-wrapper p-3">
            <button class="btn btn-secondary tx-uppercase tx-spacing-2 tx-12 mb-2 disabled" title="Analisa terlebih dahulu" id="show">konsensus</button> <button class="btn btn-secondary tx-uppercase tx-spacing-2 tx-12 mb-2 ml-1 disabled" id="restabel" title="reset data" onclick="reset(2)"> Reset konsensus</button>

            <div class="row">
              <div class="col-md-12">
                <div class="table-wrapper" id="popokaa" style="display: none">
                  <table id="datatable-top" class="table display responsive datatable-top order-column" style="width: 100%;">
                    <thead>
                      <tr>
                        <th>Konsensus</th>
                        <th>Jumlah</th>
                        <th>Konsensus</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody id="konsensus">
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div>
            </div>

          </div><!-- br-section-wrapper -->
        </div>
      </div>

    </div>

    <div class="br-pagebody">
      <div class="br-section-wrapper p-3">

        <div class="table-wrapper">
          <table id="datatable-mantab" class="table display responsive datatable-mantab order-column" style="width: 100%;">
            <thead>
              <tr>
                <th style="width: 65%">Analisa Konsensus</th>
                <th>URL</th>
              </tr>
            </thead>
            <tbody id="alskonsensus">
            </tbody>
          </table>
        </div><!-- table-wrapper -->

      </div>
    </div>

    <script type="text/javascript">
      var t = 0;
      var xyz ='<?= site_url('Tool/list_konsensus') ?>';
      var au = '<?= site_url('Tool/List_tracker') ?>';
      $('.datatable-mantab').DataTable({
        searchHighlight: true,
        responsive: true,
        searching: true,
        info: false,
        ordering: false,
        pageLength: 10,
        lengthChange: false,
        paginate: true,
        "language": 
        {
          "sEmptyTable":   "Tidak Ada Data",
          "sProcessing":   "Sedang memproses...",
          "sLengthMenu":   "tampilkan _MENU_  data",
          "sZeroRecords":  "Tidak ditemukan data yang sesuai",
          "sInfo":         "_END_ data dari total _TOTAL_ data",
          "sInfoEmpty":    "0 data",
          "sInfoFiltered": "(disaring dari _MAX_ data)",
          "sInfoPostFix":  "",
          search: ' ',
          searchPlaceholder: "Cari . .",
          "sUrl":          "",
          "oPaginate": {
            "sFirst":    "Pertama",
            "sPrevious": "kembali",
            "sNext":     "lanjut",
            "sLast":     "Terakhir"
          }
        }
      });

      $('.datatable-top').DataTable({
        responsive: true,
        searching: false,
        info: false,
        ordering: false,
        pageLength: 5,
        lengthChange: false,
        "language": 
        {
          "sEmptyTable":   "Tidak Ada Data",
          "sProcessing":   "Sedang memproses...",
          "sLengthMenu":   "tampilkan _MENU_  data",
          "sZeroRecords":  "Tidak ditemukan data yang sesuai",
          "sInfo":         "_END_ data dari total _TOTAL_ data",
          "sInfoEmpty":    "0 data",
          "sInfoFiltered": "(disaring dari _MAX_ data)",
          "sInfoPostFix":  "",
          "sUrl":          "",
          "oPaginate": {
            "sFirst":    "Pertama",
            "sPrevious": "kembali",
            "sNext":     "lanjut",
            "sLast":     "Terakhir"
          }
        }
      });


    </script>

    <script src="<?= site_url('assets/t6.js'); ?>"></script>
