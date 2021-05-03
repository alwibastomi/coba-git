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
            <center><button class="btn btn-primary pd-x-30 pd-y-15 tx-uppercase tx-bold tx-spacing-6 tx-12" title="analisa" id="ani">Analisa</button> <button class="btn btn-danger pd-x-35 pd-y-15 tx-uppercase tx-bold tx-spacing-6 tx-12" title="reset url dan keyword" onclick="reset(1)">Reset</button></center>
          </div>
        </div>
        <!-- tutup row -->
      </div>

    </div>



    <div class="row">
      <div class="col-md-12">
        <div class="br-pagebody">
          <div class="br-section-wrapper p-3">
            <button class="btn btn-primary tx-uppercase tx-spacing-2 tx-12 mb-2 disabled" title="Analisa terlebih dahulu" id="show">konsensus</button> <button class="btn btn-danger tx-uppercase tx-spacing-2 tx-12 mb-2 ml-1" title="reset data" onclick="reset(2)"> Reset konsensus</button>

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

      var t1 = [];
      var t2 = [];
      var t3 = [];
      var t4 = [];
      var t5 = [];
      var t6 = [];
      var stopword = [/\s+dan\s*(?=\s)|\s*\bdan\b\s*/, /\s+adalah\s*(?=\s)|\s*\badalah\b\s*/, /\s+yang\s*(?=\s)|\s*\byang\b\s*/, 'kemudian', /\s+di\s*(?=\s)|\s*\bdi\b\s*/, 'jika', /\s+maka\s*(?=\s)|\s*\bmaka\b\s*/, /\s+ini\s*(?=\s)|\s*\bini\b\s*/, /\s+itu\s*(?=\s)|\s*\bitu\b\s*/, /\s+tidak\s*(?=\s)|\s*\btidak\b\s*/, /\s+ada\s*(?=\s)|\s*\bada\b\s*/, /\s+adanya\s*(?=\s)|\s*\badanya\b\s*/, /\s+adapun\s*(?=\s)|\s*\badapun\b\s*/, /\s+agak\s*(?=\s)|\s*\bagak\b\s*/, /\s+agar\s*(?=\s)|\s*\bagar\b\s*/, /\s+akan\s*(?=\s)|\s*\bakan\b\s*/, /\s+akankah\s*(?=\s)|\s*\bakankah\b\s*/, /\s+akhir\s*(?=\s)|\s*\bakhir\b\s*/, /\s+akhiri\s*(?=\s)|\s*\bakhiri\b\s*/, /\s+akhirnya\s*(?=\s)|\s*\bakhirnya\b\s*/, /\s+apa\s*(?=\s)|\s*\bapa\b\s*/, /\s+amat\s*(?=\s)|\s*\bamat\b\s*/, /\s+amatlah\s*(?=\s)|\s*\bamatlah\b\s*/, /\s+antar\s*(?=\s)|\s*\bantar\b\s*/];

      var heading1 = [];
      var heading2 = [];
      var heading3 = [];
      var heading4 = [];
      var heading5 = [];
      var heading6 = [];   

      var kons1 = "";
      var kons2 = "";
      var kons3 = "";
      var kons4 = "";
      var kons5 = "";
      var kons6 = "";

      var un1 = [];   

      var p1 = [];
      var p2 = [];
      var p3 = [];
      var p4 = [];
      var p5 = [];
      var p6 = []; 


      var table;
      table = $('#datatable-mantab').DataTable();  

      var table2;
      table2 = $('#datatable-top').DataTable();

    // var table3;
    // table3 = $('#datatable-topi').DataTable();
    String.prototype.replaceArray = function(find, replace) {
      var replaceString = this;
      var regex; 
      for (var i = 0; i < find.length; i++) {
        regex = new RegExp(find[i], "g");
        replaceString = replaceString.replace(regex, replace[i]);
      }
      return replaceString;
    };
    $(document).ready( function () {
      table = $('#datatable-mantab').DataTable();  
      table.on( 'draw', function () {
        var body = $( table.table().body() );

        body.unhighlight();
        body.highlight( table.search() );  
      } );
    } );

    function reverseObject(object) {
      var newObject = {};
      var keys = [];

      for (var key in object) {
        keys.push(key);
      }

      for (var i = keys.length - 1; i >= 0; i--) {
        var value = object[keys[i]];
        newObject[keys[i]]= value;
      }       

      return newObject;
    }

    function reset(x){
      if (x == 1) {
        $('#url1').val('');
        $('#url2').val('');
        $('#url3').val('');
        $('#url4').val('');
        $('#url5').val('');
        $('#url6').val('');
        $('#keyword').val('');
      }
      if(x == 2){
        $('#show').addClass("disabled").text('konsensus').attr('title', 'Analisa terlebih dahulu');
        $('#datatable-top').DataTable().clear().draw();
        $('#datatable-mantab').DataTable().clear().draw();
        $('#popokaa').css('display', 'none');
        $('#show').attr('title', 'Analisa terlebih dahulu');
      }
    }

    $('#reset').click(function(e) {
      e.preventDefault();
      $('#datatable-top').DataTable().clear().draw();
      $('#datatable-mantab').DataTable().clear().draw();
      $('#url1').val('');
      $('#url2').val('');
      $('#url3').val('');
      $('#url4').val('');
      $('#url5').val('');
      $('#url6').val('');
      $('#keyword').val('');
    });

    $('#resetkonsensus').click(function(e) {
      e.preventDefault();
      $('#datatable-top').DataTable().clear().draw();
    });

    $('#resetanalisa').click(function(e) {
      e.preventDefault();
      $('#datatable-mantab').DataTable().clear().draw();
    });

    $('#ani').click(function(event) {
      var kos = 0;
      event.preventDefault();
      if ($('#keyword').val() == '') {
        $('#keyword').attr("placeholder", "Isi keyword terlebih dahulu").focus();
      }
      if ($('#keyword').val() != '') {
        $('#show').addClass('disabled').text('Sedang menganalisa konsensus').attr('title', 'sedang menganalisa');
        var url1 = $('#url1').val();
        var url2 = $('#url2').val();
        var url3 = $('#url3').val();
        var url4 = $('#url4').val();
        var url5 = $('#url5').val();
        var url6 = $('#url6').val();
        var keyw = $('#keyword').val();
        $('#alskonsensus').html("")
        kes = 0;

        if ($('#url1').val() != '') {
          kos = kos + 1;
          $.ajax({
            type:'POST',
            data:'url1='+url1+'&keyword='+keyw,
            url:xyz,
            dataType:'JSON',
            success: function(hasil){
              kes = kes + 1;
              kons1 = hasil.p.concat(hasil.heading, hasil.title).join(" ").replaceArray(stopword, '').replaceAll('undefined', '');
              kons1 = kons1.replaceAll(/[^a-zA-Z]/g, " ");
              kons1 = kons1.replaceAll( /\s\s+/g, ' ');
              var pos = kons1.split(' ').filter((currentItem, i, allItems) => {
                return i === allItems.indexOf(currentItem);
              }).join(' ');
              console.log(kons1)
              un1.push(pos);
              $.each(hasil.p, function(i, item) {
               table.row.add([hasil.p[i], url1]);
             });

              $.each(hasil.heading, function(i, item) {
               table.row.add([hasil.heading[i], url1]);
             });

              table.draw();
              console.log(kes)
              if (kos == kes) {
                $('#show').removeClass("disabled").text('lihat konsensus').attr('title', 'klik untuk melihat konsensus');
                
              }
            }
          });
        }



        if ($('#url2').val() != '') {
          kos = kos + 1;
          $.ajax({
            type:'POST',
            data:'url2='+url2+'&keyword='+keyw,
            url:xyz,
            dataType:'JSON',
            success: function(hasil){
              kes = kes + 1;

                            kons2 = hasil.p.concat(hasil.heading, hasil.title).join(" ").replaceArray(stopword, '').replaceAll('undefined', '');
              kons2 = kons2.replaceAll(/[^a-zA-Z]/g, " ");
              kons2 = kons2.replaceAll( /\s\s+/g, ' ');
              var pos = kons2.split(' ').filter((currentItem, i, allItems) => {
                return i === allItems.indexOf(currentItem);
              }).join(' ');

              un1.push(pos);
              $.each(hasil.p, function(i, item) {
               table.row.add([hasil.p[i], url2]);
             });


              $.each(hasil.heading, function(i, item) {
               table.row.add([hasil.heading[i], url2]);
             });              

              table.draw();

              console.log(kes)
              if (kos == kes) {
                $('#show').removeClass("disabled").text('lihat konsensus').attr('title', 'klik untuk melihat konsensus');
                
              }
            }
          });
        }



        if ($('#url3').val() != '') {
          kos = kos + 1;
          $.ajax({
            type:'POST',
            data:'url3='+url3+'&keyword='+keyw,
            url:xyz,
            dataType:'JSON',
            success: function(hasil){
              kes = kes + 1;

                            kons3 = hasil.p.concat(hasil.heading, hasil.title).join(" ").replaceArray(stopword, '').replaceAll('undefined', '');
              kons3 = kons3.replaceAll(/[^a-zA-Z]/g, " ");
              kons3 = kons3.replaceAll( /\s\s+/g, ' ');
              var pos = kons3.split(' ').filter((currentItem, i, allItems) => {
                return i === allItems.indexOf(currentItem);
              }).join(' ');
              un1.push(pos);
              $.each(hasil.p, function(i, item) {
               table.row.add([hasil.p[i], url3]);
             });


              $.each(hasil.heading, function(i, item) {
               table.row.add([hasil.heading[i], url3]);
             });        

              table.draw();

              console.log(kes)
              if (kos == kes) {
                $('#show').removeClass("disabled").text('lihat konsensus').attr('title', 'klik untuk melihat konsensus');
                
              }
            }

          });
        }



        if ($('#url4').val() != '') {
          kos = kos + 1;
          $.ajax({
            type:'POST',
            data:'url4='+url4+'&keyword='+keyw,
            url:xyz,
            dataType:'JSON',
            success: function(hasil){

                       kons4 = hasil.p.concat(hasil.heading, hasil.title).join(" ").replaceArray(stopword, '').replaceAll('undefined', '');
              kons4 = kons4.replaceAll(/[^a-zA-Z]/g, " ");
              kons4 = kons4.replaceAll( /\s\s+/g, ' ');
              var pos = kons4.split(' ').filter((currentItem, i, allItems) => {
                return i === allItems.indexOf(currentItem);
              }).join(' ');
              un1.push(pos);
              $.each(hasil.p, function(i, item) {
               table.row.add([hasil.p[i], url4]);
             });


              $.each(hasil.heading, function(i, item) {
               table.row.add([hasil.heading[i], url4]);
             });            

              table.draw();
              kes = kes + 1;
              console.log(kos)
              if (kos == kes) {
                $('#show').removeClass("disabled").text('lihat konsensus').attr('title', 'klik untuk melihat konsensus');
                
              }
            }
          });
        }


        if ($('#url5').val() != '') {
          kos = kos + 1;
          $.ajax({
            type:'POST',
            data:'url5='+url5+'&keyword='+keyw,
            url:xyz,
            dataType:'JSON',
            success: function(hasil){

                           kons5 = hasil.p.concat(hasil.heading, hasil.title).join(" ").replaceArray(stopword, '').replaceAll('undefined', '');
              kons5 = kons5.replaceAll(/[^a-zA-Z]/g, " ");
              kons5 = kons5.replaceAll( /\s\s+/g, ' ');

              var pos = kons5.split(' ').filter((currentItem, i, allItems) => {
                return i === allItems.indexOf(currentItem);
              }).join(' ');
              un1.push(pos);
              $.each(hasil.p, function(i, item) {
               table.row.add([hasil.p[i], url5]);
             });


              $.each(hasil.heading, function(i, item) {
               table.row.add([hasil.heading[i], url5]);
             });           

              table.draw();
              kes = kes + 1;
              console.log(kos)

              if (kos == kes) {
                $('#show').removeClass("disabled").text('lihat konsensus').attr('title', 'klik untuk melihat konsensus');
                
              }
            }
          });
        }


        if ($('#url6').val() != '') {
          kos = kos + 1;
          $.ajax({
            type:'POST',
            data:'url6='+url6+'&keyword='+keyw,
            url:xyz,
            dataType:'JSON',
            success: function(hasil){

                            kons6 = hasil.p.concat(hasil.heading, hasil.title).join(" ").replaceArray(stopword, '').replaceAll('undefined', '');
              kons6 = kons6.replaceAll(/[^a-zA-Z]/g, " ");
              kons6 = kons6.replaceAll( /\s\s+/g, ' ');
              var pos = kons6.split(' ').filter((currentItem, i, allItems) => {
                return i === allItems.indexOf(currentItem);
              }).join(' ');
              un1.push(pos);

              $.each(hasil.p, function(i, item) {
               table.row.add([hasil.p[i], url6]);
             });


              $.each(hasil.heading, function(i, item) {
               table.row.add([hasil.heading[i], url6]);
             });      

              table.draw();
              kes = kes + 1;
              console.log(kos)
              if (kos == kes) {
                $('#show').removeClass("disabled").text('lihat konsensus').attr('title', 'klik untuk melihat konsensus');
                
              }
            }
          });
        }

      }
    });

$('#show').click(function(event) {
  $('#konsensus').html('');
  $('#popokaa').css('display', 'block');
  // $('#popokii').css('display', 'block');
  var map = un1.join(" ").split(" ").reduce(function(prev, cur) {
    prev[cur] = (prev[cur] || 0) + 1;
    return prev;
  }, {});
  const sortable = Object.fromEntries(
    Object.entries(map).sort(([,a],[,b]) => a-b)
    );
  ob = reverseObject(sortable);
  // Object.keys(ob).forEach(function(key) {
   // table2.row.add([key, ob[key], key, ob[key]]);
 // });
 var obee = Object.keys(ob)
 var index;
 var titit = 4;
 for (index = 0, len = Object.keys(ob).length; index < len; ++index) {
  table2.row.add([obee[index], ob[obee[index]], obee[index+5], ob[obee[index]]]);
  if (index == titit) {
    index = index + 5;
    titit = titit + 10;
  }
}
table2.draw();
console.log(ob)
});
</script>
