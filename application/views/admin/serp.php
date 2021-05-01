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
        <button class="btn btn-primary waves-effect waves-light m-b-5" id="start" style="cursor: pointer; width: 100%"> <b>SCRAP URL</b></button>
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
              <!-- <th>Judul</th> -->
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

    var t = 0;
    var xyz ='<?= site_url('Tool/List_url') ?>';
    var au = '<?= site_url('Tool/List_ranked') ?>';
    $('.datatable-mantab').DataTable({
      responsive: true,
      searching: false,
      info: false,
      ordering: false,
      pageLength: 5,
      lengthChange: false,
      language: {
        lengthMenu: '_MENU_ items/page',
      }
    });

    function telo(id) {
      console.log($(id).attr('id'))
      var p = $(id).attr('data-url');

      if ($($(id).attr('data-target')+'1').hasClass("show")) {
        $($(id).attr('data-target')+'1').removeClass("show");
      }else{
        $($(id).attr('data-target')+'1').addClass("show");
      }
      $.ajax({
        type:'POST',
        data:'url1='+p,
        url:xyz,
        dataType:'JSON',
        success: function(hasil){
          console.log(p)
          var ka = parseInt(hasil.p.join().replaceAll(',', ' ').replaceAll('.', " ").replaceAll(/(\r\n|\n|\r|↵)/gm, " ").split(" ").length) + parseInt(hasil.h1.join().split(" ").length) + parseInt(hasil.h2.join().split(" ").length) + parseInt(hasil.h3.join().split(" ").length) + parseInt(hasil.h4.join().split(" ").length) + parseInt(hasil.h5.join().split(" ").length);

          var akehetitle = hasil.title.toLowerCase().split($('#url').val().toLowerCase()).length - 1;

          var akeheh1 = hasil.h1.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
          var akeheh2 = hasil.h2.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
          var akeheh3 = hasil.h3.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
          var akeheh4 = hasil.h4.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
          var akeheh5 = hasil.h5.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
          var akehep = hasil.p.join().replaceAll(',', ' ').replaceAll('.', " ").replaceAll(/(\r\n|\n|\r|↵)/gm, " ").toLowerCase().split($('#url').val().toLowerCase()).length - 1;
          var akeheall = parseInt(akeheh1) + parseInt(akeheh2) + parseInt(akeheh3) + parseInt(akeheh4) + parseInt(akeheh5)+ parseInt (akehep);
          if (akehetitle>0) {
            var adatitle = 'Ya';
          }else {
            var adatitle = 'Tidak';
          }
          var maimunah = '<div class="card-body" style="padding: 0;"> <table id="example" class="table display responsive" style="width:100%;"> <tr><th> Judul </th><td style="white-space: normal;">'+hasil.title+' </td></tr> <tr><th> Jumlah kata </th><td> '+ka+' kata </td></tr> <tr><th> Jumlah exact match di artikel </th><td> '+akeheall+' ('+((akeheall/ka)*100).toFixed(2)+' %) </td></tr> <tr><th> exact match keyword di judul </th><td> '+adatitle+', '+akehetitle+' </td></tr> <tr><th> exact match keyword di heading </th><td> H1 : '+akeheh1+', H2 : '+akeheh2+', H3 : '+akeheh3+', H4 : '+akeheh4+', H5 : '+akeheh5+' </td></tr>';
          for (var i = 0; i < $('#url').val().split(" ").length; i++) {
            var akehesiji = hasil.p.join().replaceAll(',', ' ').replaceAll('.', " ").replaceAll(/(\r\n|\n|\r|↵)/gm, " ").toLowerCase().split($('#url').val().split(" ")[i].toLowerCase()).length - 1;

            maimunah += ' <tr><th> Jumlah kata ('+$('#url').val().split(" ")[i]+') di artikel </th><td> '+akehesiji+' ('+((akehesiji/ka)*100).toFixed(2)+' %) </td></tr>';
          }
          maimunah += '</table> </div> ';


          if (p != "") {
            var x = 0;
            var y = 0;
            var sc1 = '<p class="text-dark"><b>Title : '+hasil.title+'</b></p>'; 
            var mawar = 0;
            for (var i = 0, u = hasil.heading.length; i < u; ++i) {
              if (hasil.h1.indexOf(hasil.heading[i]) > -1) {
                mawar = 1;
                if (x != 1 && x < 1) {
                  sc1 += '<ul class="results lala"><li><b style="color:black;">H1.</b> '+hasil.heading[i]+'</li>';
                  x = 1;
                  y = y + 1;
                }else if (x != 1 && x > 1) {
                  y = (y - x) + 1;
                  for (var a = 0, l = y; a < l; ++a) {
                    sc1 += '</ul>';
                  }
                  sc1 += '<li><b style="color:black;">H1.</b> '+hasil.heading[i]+'</li>';
                  x = 1;
                }else {
                  sc1 += '<li><b style="color:black;">H1.</b> '+hasil.heading[i]+'</li>';
                }
              }else if (hasil.h2.indexOf(hasil.heading[i]) > -1){
                if (mawar == 1) {
                  if (x != 2 && x < 2) {
                    sc1 += '<ul class="results lala"><li><b style="color:black;">H2.</b> '+hasil.heading[i]+'</li>';
                    x = 2;
                    y = y + 1;
                  }else if (x != 2 && x > 2) {
                    y = (y - x) + 1;
                    for (var a = 0, l = y; a < l; ++a) {
                      sc1 += '</ul>';
                    }
                    sc1 += '<li><b style="color:black;">H2.</b> '+hasil.heading[i]+'</li>';
                    x = 2;
                  }else {
                    sc1 += '<li><b style="color:black;">H2.</b> '+hasil.heading[i]+'</li>';
                  }
                }

              }else if (hasil.h3.indexOf(hasil.heading[i]) > -1){
                if (mawar == 1) {
                  if (x != 3 && x < 3) {
                    sc1 += '<ul class="results lala"><li><b style="color:black;">H3.</b> '+hasil.heading[i]+'</li>';
                    x = 3;
                    y = y + 1;
                  }else if (x != 3 && x > 3) {
                    y = (y - x) + 1;
                    for (var a = 0, l = y; a < l; ++a) {
                      sc1 += '</ul>';
                    }
                    sc1 += '<li><b style="color:black;">H3.</b> '+hasil.heading[i]+'</li>';
                    x = 3;
                  }else {
                    sc1 += '<li><b style="color:black;">H3.</b> '+hasil.heading[i]+'</li>';
                  }
                }
              }else if (hasil.h4.indexOf(hasil.heading[i]) > -1){
                if (mawar == 1) {
                  if (x != 4 && x < 4) {
                    sc1 += '<ul class="results lala"><li><b style="color:black;">H4.</b> '+hasil.heading[i]+'</li>';
                    x = 4;
                    y = y + 1;
                  }else if (x != 4 && x > 4) {
                    y = (y - x) + 1;
                    for (var a = 0, l = y; a < l; ++a) {
                      sc1 += '</ul>';
                    }
                    sc1 += '<li><b style="color:black;">H4.</b> '+hasil.heading[i]+'</li>';
                    x = 4;
                  }else {
                    sc1 += '<li><b style="color:black;">H4.</b> '+hasil.heading[i]+'</li>';
                  }
                }
              }else {
                if (mawar == 1) {
                  if (x != 5 && x < 5) {
                    sc1 += '<ul class="results lala"><li><b style="color:black;">H5.</b> '+hasil.heading[i]+'</li>';
                    x = 5;
                    y = y + 1;
                  }else if (x != 5 && x > 5) {

                    y = (y - x) + 1;
                    for (var a = 0, l = y; a < l; ++a) {
                      sc1 += '</ul>';
                    }
                    sc1 += '<li><b style="color:black;">H5.</b> '+hasil.heading[i]+'</li>';
                    x = 5;
                  }else {
                    sc1 += '<li><b style="color:black;">H5.</b> '+hasil.heading[i]+'</li>';
                  }
                }
              }
            }

            $($(id).attr('data-target')).html(maimunah);

            $($(id).attr('data-target')+'1').html(sc1)
          }

        }
      })
}

function heh(url, id) {
  $("#yura"+id).css('display', 'none');
  $("#sempel"+id).css('display', 'none');

  $.ajax({
    type:'POST',
    data:'url1='+url,
    url:xyz,
    dataType:'JSON',
    success: function(hasil){
      var ka = parseInt(hasil.p.join().replaceAll(',', ' ').replaceAll('.', " ").replaceAll(/(\r\n|\n|\r|↵)/gm, " ").split(" ").length) + parseInt(hasil.h1.join().split(" ").length) + parseInt(hasil.h2.join().split(" ").length) + parseInt(hasil.h3.join().split(" ").length) + parseInt(hasil.h4.join().split(" ").length) + parseInt(hasil.h5.join().split(" ").length);

      var akehetitle = hasil.title.toLowerCase().split($('#url').val().toLowerCase()).length - 1;

      var akeheh1 = hasil.h1.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
      var akeheh2 = hasil.h2.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
      var akeheh3 = hasil.h3.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
      var akeheh4 = hasil.h4.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
      var akeheh5 = hasil.h5.join().toLowerCase().split($('#url').val().toLowerCase()).length - 1;
      var akehep = hasil.p.join().replaceAll(',', ' ').replaceAll('.', " ").replaceAll(/(\r\n|\n|\r|↵)/gm, " ").toLowerCase().split($('#url').val().toLowerCase()).length - 1;
      var akeheall = parseInt(akeheh1) + parseInt(akeheh2) + parseInt(akeheh3) + parseInt(akeheh4) + parseInt(akeheh5)+ parseInt (akehep);
      if (akehetitle>0) {
        var adatitle = 'Ya';
      }else {
        var adatitle = 'Tidak';
      }

      $("#sempel"+id+"b").html('<td><center>'+ka+'</center></td>').css('display', 'contents');
      $("#sempel"+id+"c").html('<td><center>'+akeheall+'</center></td>').css('display', 'contents');
      document.getElementById("#sempel"+id).colSpan = "1";
    }
  })
}

$('#start').click(function(event) {
  t = 0;
  $('#list').html('')
  event.preventDefault();
  var paseo1 = $('#url').val();
  var hal = parseInt($('#halaman').val());
  var semLehe = "";
  for (var i = 0; i < hal; i++) {
    $.ajax({
      type:'POST',
      data:'url1='+paseo1+'&halaman='+i,
      url:au,
      dataType:'JSON',
      success: function(hasil){
        for (var i = 0; i < hasil.h3.length; i++) {

          $('#list1').append('<li>'+hasil.h3[i]+'</li>');  
        }


        for (var i = 0; i < hasil.url.length; i++) {

          let domain = (new URL(hasil.url[i]));
          if (domain.hostname != "www.google.comhttps") {
            var conv = hasil.url[i].replaceAll('%26', '&')

            t = t + 1;
            $('#list').append('<li>'+conv+'</li>');

            var ngeng = '<button id="yura'+t+'" value="'+conv+'" style="width:100%" class="btn btn-warning pd-6 text-center" onClick="heh(this.value,'+t+')">ringkasan</button>';

            semLehe += '<tr><td style="white-space: normal;">'+conv+'</td><td><center>'+t+'</center></td><td colspan="2" id="sempel'+t+'">'+ngeng+'</td><td style="display: none;" id="sempel'+t+'b"></td><td style="display: none;" id="sempel'+t+'c"></td><td><button style="width: 80%;" class="btn btn-info pd-6" data-toggle="collapse" data-url="'+conv+'" data-target="#collapse'+t+'" aria-expanded="true" aria-controls="collapse'+t+'" onClick="telo(this)">Detail</button></td></tr><tr></tr>';

            semLehe += '<tr><td colspan="2" style="padding: 0;"><div id="collapse'+t+'" class="collapse p-2" aria-labelledby="heading'+t+'" data-parent="#accordion'+t+'">';
            semLehe += '</div></td>';

            semLehe += '<td colspan="3" style="padding: 0;"><div id="collapse'+t+'1" class="collapse bd-l p-2 scrollable-menu" aria-labelledby="heading'+t+'" data-parent="#accordion'+t+'">';

            semLehe += '</div></td></tr>';

          }
          $('#iDo').html(semLehe);
        }

      }

    });

  }

});
</script>
