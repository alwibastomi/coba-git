<style>
  .btn{
    cursor: pointer;
  }

  table.dataTable.row-border tbody tr:first-child th, table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr th, table.dataTable.display tbody tr td {
    padding: 10px;
    width: 100px;
  }

  table.dataTable.no-footer {
    border: none;
    margin: 0;
  }

    #datatable-mantab{
    overflow-x: scroll;
    white-space: nowrap;
    /* max-width: 100%; */
    display: block;
  }

  .area-txt{
    height: 100px;
    width: 100%;
  }

  .tengah{
    text-align: center;
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
    <h4 class="tx-gray-800 mg-b-5">Tracker</h4>
    <p class="mg-b-0">Demo Tool PRO</p>
  </div><!-- d-flex -->

  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">

    <div class="row">
      <div class="col-md-5">
        <input type="text" name="url" id="url" class="form-control" placeholder="url/domain" required>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-5">
        <textarea class="form-control area-txt" id="srep" placeholder="paste disini"></textarea>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-2">
        <button class="btn btn-primary waves-effect waves-light m-b-5" id="generate" style="cursor: pointer; width: 100%"> <b>GENERATE</b></button>
      </div>
    </div>
    <!-- tutup row -->


  </div>

  <div class="br-pagebody">
    <div class="br-section-wrapper p-0">

      <!-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Lalala</h6> -->
      <div class="table-wrapper">
        <table id="datatable-mantab" class="table display responsive datatable-mantab order-column" style="width: 100%;">
          <thead>
            <tr>
              <th width="70">Keyword</th>
              <th class="tengah" width="5"><center>Rank</center></th>
              <th class="tengah" width="150">URL</th>
            </tr>
          </thead>
          <tbody id="ts">
            <tr><td><input class="form-control" id="0" onkeyup="telo(this)" type="text" placeholder="Keyword"> </td><td class="tengah"></td><td style="white-space: normal"></td></tr>
          </tbody>
        </table>
      </div><!-- table-wrapper -->

    </div>
  </div>


  <script type="text/javascript">
    var t = 0;
    var xyz ='<?= site_url('Tool/List_url') ?>';
    var au = '<?= site_url('Tool/List_tracker') ?>';
    $('.datatable-mantab').DataTable({
      responsive: true,
      searching: false,
      info: false,
      ordering: false,
      pageLength: 5,
      lengthChange: false,
      paginate: false,
      language: {
        lengthMenu: '_MENU_ items/page',
      }
    });
  </script>

  <script>
    var novina = [];
    var nona = 0;
    function extractHostname(url) {
      var hostname;

      if (url.indexOf("//") > -1) {
        hostname = url.split('/')[2];
      }
      else {
        hostname = url.split('/')[0];
      }

      hostname = hostname.split(':')[0];
      hostname = hostname.split('?')[0];

      return hostname;
    }
    function extractRootDomain(url) {
      var domain = extractHostname(url),
      splitArr = domain.split('.'),
      arrLen = splitArr.length;

      if (arrLen > 2) {
        domain = splitArr[arrLen - 2] + '.' + splitArr[arrLen - 1];
        if (splitArr[arrLen - 2].length == 2 && splitArr[arrLen - 1].length == 2) {
          domain = splitArr[arrLen - 3] + '.' + domain;
        }
      }
      return domain;
    }
    function telo(id) {
      if (event.keyCode === 13) {
        nona = nona + 1;
        $('#ts').append('<tr><td><input class="form-control" id="'+nona+'" onkeyup="telo(this)" type="text" placeholder="Keyword"> </td><td class="tengah"></td><td style="white-space: normal"></td></tr>');
        $('#'+nona).focus();
      }

    }

    $('#generate').on('click', function(){

      var novina = []
      var pete = "";
      var hal = 5;
      if($('#0').val() == ""){
        $('#ts').html("");
      }
      for (var i = 0; i < $('#srep').val().split("\n").length; i++) {

        for (var x = 0; x < hal ; x++) {
          $.ajax({
            type:'POST',
            data:'url1='+extractRootDomain($('#url').val())+'&keyword='+$('#srep').val().split("\n")[i]+'&halaman='+x,
            url:au,
            dataType:'JSON',
            success: function(hasil){
              console.log(hasil.rank);
              console.log(hasil.url);
              if (hasil.rank.length > 0) {
                for (var z = 0; z < hasil.rank.length; z++) {
                 $('#ts').append('<tr><td><input class="form-control" id="'+nona+'" onkeyup="telo(this)" type="text" placeholder="Keyword" value="'+hasil.keyword+'"> </td><td class="tengah">'+hasil.rank[z]+'</td><td style="white-space: normal">'+hasil.url[z]+'</td></tr>')
               }
             }


             nona = nona + 1;

             novina.push($('#srep').val().split("\n")[i])
           }
         });
        }
      }
      console.log()
    });
  </script>
