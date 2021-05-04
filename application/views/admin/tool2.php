<!DOCTYPE html>
<html>

<head>
  <meta name="description" content="semanticarticle.com">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta property="og:site_name" content="semanticarticle.com"/>
  <meta property="og:title" content="semanticarticle.com"/>
  <meta property="og:url" content="https://www.semanticarticle.com"/>
  <meta property="og:type" content="website"/>
<!--   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/fixedheader/3.1.0/css/fixedHeader.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/keytable/2.1.0/css/keyTable.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/scroller/1.4.0/css/scroller.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/progress.js/0.1.0/progressjs.min.css"/> -->
  <title>Semantic Article</title>
  
  <link rel="icon" href="<?= site_url('assets/images/Logo-01.png') ?>">
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/DataTables/DataTables-1.10.23/css/jquery.dataTables.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/DataTables/datatables.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/DataTables/KeyTable-2.6.1/css/keyTable.dataTables.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/DataTables/Responsive-2.2.7/css/responsive.dataTables.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/DataTables/Scroller-2.0.3/css/scroller.dataTables.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/fitur.min.css'); ?>"/>  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


  <!-- <link rel="stylesheet" type="text/css" href="<?= site_url('assets/DataTables/datatables.min.css'); ?>"/> 
  -->
  <script type="text/javascript" src="<?= site_url('assets/jquery-3.5.1.js'); ?>"></script>
  
  <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->


  <link rel="stylesheet" href="<?= base_url();?>assets/pagination.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/style.css">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="<?= site_url('assets/template/css/bracket.css'); ?>">

  <!-- JS -->
  <script type="text/javascript"> var BASE_URL = "<?php echo base_url();?>"; </script>

  <!-- JS template -->
  <script src="<?= site_url('assets/template/lib/jquery/jquery.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/popper.js/popper.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/bootstrap/bootstrap.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/moment/moment.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/jquery-ui/jquery-ui.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/jquery-switchbutton/jquery.switchButton.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/peity/jquery.peity.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/chartist/chartist.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/jquery.sparkline.bower/jquery.sparkline.min.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/d3/d3.js'); ?>"></script>
  <script src="<?= site_url('assets/template/lib/rickshaw/rickshaw.min.js'); ?>"></script>
  <script src="<?= site_url('assets/chart.min.js'); ?>"></script>

<!--   <script src="<?= site_url('assets/template/js/bracket.js'); ?>"></script>
  <script src="<?= site_url('assets/template/js/ResizeSensor.js'); ?>"></script>
  <script src="<?= site_url('assets/template/js/dashboard.js'); ?>"></script> -->

  <style type="text/css">

    /*loading*/
    .loader {
      border: 8px solid #f3f3f3;
      border-radius: 50%;
      border-top: 8px solid #3498db;
      width: 50px;
      height: 50px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    /*loading*/


    .paginate_button {
      background-color: #e3ffeb;
      color: darkgreen;
    }

    .paginate_button::hover{
      background-color: darkgreen;
    }
    .cardku{
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .scrollable-menu {
      padding: 10px;
      height: 735px;
      max-height: 735px;
      overflow-x: hidden;
    }

    .del{
      cursor: pointer;
    }
    #collapseUtilities::-webkit-scrollbar {
      width: 8px;
    }


    #collapseUtilities::-webkit-scrollbar-track {
    }


    #collapseUtilities::-webkit-scrollbar-thumb {
      background: #888; 
    }

    #collapseUtilities::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }

    .tex::-webkit-scrollbar {
      width: 8px;
    }

    .tex::-webkit-scrollbar-track {
    }
    #myProgress {
      /* width: 100%; */
      background-color: #ddd;
    }

    hr {
      margin: 10px;
    }

    #myBar {
      height: 40px;
      background-color: white;
      padding: 10px 4px;
      color: grey;
    }

    .tex::-webkit-scrollbar-thumb {
      background: #888; 
      /* border-radius: 10px;*/
    }

    .tex::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
    .tab{
      font-weight: 400;
      color: #00415a;
    }
  /*nav-tabs{
    border:2px solid #00415a!important;
    }*/
    .nav-item a:hover{
      color: darkgreen;
    }
    li .active{
      color:darkgreen;
      font-weight: 700;
    }

    .data-container {
      min-height: 200px;
      max-height: 400px;
      overflow: auto;
      margin: 15px 0;
    }
    .data-container ul {
      margin: 0;
      padding-left: 0;
    }
    .data-container li {
      background: #EEE;
      margin-bottom: 3px;
      padding: 8px;
      line-height: 1em;
      list-style: none;
    }
    .data-container .loading {
      padding-top: 15%;
      text-align: center;
    }

    @media (max-width: 450px){ 
      .br-header{
        display: none;
      }
    }

    @media (min-width: 990px){ 
      body{
        padding: 80px 70px 100px 250px;
      }
    }

    @media (max-width: 1125px) and (min-width: 990px){ 
      #myBar{
        font-size: 10px;
      }
    }
  </style>
</head>

<body style="padding-top: 20px; padding-right: 0;">
  <!-- <body style="padding-right: 0;"> -->

    <!-- <meta http-equiv="CACHE-CONTROL" content="NO-CACHE"> -->
    <p id="xzxv"></p>
    <div class="container">

      <!-- <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div> -->
      <div class="hidden-lg-up"><a id="btnLeftMenuLele" href="#"><i class="icon ion-navicon-round"></i></a></div>

      <br>

      <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active tab" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Semantic optimizer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tab" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Trend</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent" style="margin-top: 20px;">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-sm-12">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn text-white" style="background-color: green" id="nrml">Model Normal</button>
                <i class="bd"></i>
                <button type="button" class="btn btn-secondary" id="berserk">Mode Berserk</button>
              </div>
              <span class="p-2 ml-3" id="aidah" style="font-size: 13px;">mode normal : proses standar, rekomendasi keyword standar, minim rekomendasi gak nyambung</span>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12">
              <!-- <div id="numofkeywords"></div> -->
              <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <input class="form-control" type="text" id="lolo" placeholder="Isi Keyword Utama"  />
                    <textarea id="input" autocomplete="off" autocorrect="off" style="overflow:hidden; resize: none; height: 1000px; font-size: 17px; display: none;" autocapitalize="off" spellcheck="false" rows="8" title="queue" class="form-control tex"  placeholder="Isi Keyword Utama" class="input"></textarea>
                    <a class="btn btn-danger primary btn-sm" id="reset" title="Empty all input and results" type="button" style="color: white; margin-top: 10px;" value="Reset">Reset keyword</a>
                    <div id="persen" style="display: none;">
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <!-- ISO-3366-1: Alpha-2 Codes -->
                    <select value="id" class="form-control" name="country" id="country" title="Country code. Two letters. Only works for google for now" disabled="">
                    </select>
              <!-- <label for="service" style="margin-top: 20px;">Service:</label>
              <select class="form-control" name="service" id="service" >
              </select> -->
            </div>
            
            <div class="checkbox" style="display: none;">
              <label for="keep-running">
                <input type="checkbox" id="keep-running" name="keep-running" title="Keep running forever" style="font-weight: 100px;"></input> Continuous running:
              </label>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="form-group">
              <a class="btn btn-info primary btn-md" id="startjob" type="button" value="Shit Keywords!" style="color: white;">Generate keyword</a>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="myProgress">
              <div id="myBar"> Generate keyword terlebih dahulu</div>
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>
    <!-- tutup row -->

    <div class="row">

      <div class="col-lg-12">
        <!-- <div id="numofkeywords"></div> -->
        <div class="row">
          <div class="col-lg-7">
            <div class="form-group" id="idku">
              <input class="form-control inputku" type="text" name="" value="" id="tittle" placeholder="Judul Artikel"  />
              <br>
              <label style="font-weight: 600;">Artikel</label>
              <textarea class="form-control anuku" id="haha" class="input" type="text"></textarea>
              <hr id="progress1">
              <br id="progress2">
            </div>
          </div>

          <div class="col-lg-5">

            <div class="bd bd-2 scrollable-menu">
              <div class="card cardku">
                <div class="card-header bg-info" style="color: white;padding-top: 0px!important;padding-bottom: 0px!important">
                  <b>Keyword Utama</b><b class="text-uppercase" id="lol"></b>
                </div>
                <div class="card">
                  <div style="padding-top: 16px; padding-left: 16px;margin-bottom: -20px;" id="mustahil" >
                  </div>
                </div>
              </div>
              <br>
              <input class="form-control" type="text" id="terlaluindah" placeholder="Target Keyword Turunan"  />
              <div class="card" style="margin-top: 20px;" >
                <div class="card-header bg-warning" style="color: white;padding-top: 0px!important;padding-bottom: 0px!important">
                  <b>Keyword Turunan</b>
                </div>
                <div class="card-body cb" id="idku" style="padding-bottom: 0px;">
                  <div class="form-group" id="skut" style="padding-top: 5px; padding-bottom: 1px;">
                  </div>
                </div>

                <textarea type="text" title="These values are added before words to prompt the search suggestions" class="form-control" name="prefixes" id="prefixes" style="display: none;"  > ,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,y,x,y,z,*</textarea>
                <textarea type="text" rows="2" title="These values are added after words to prompt the search suggestions" class="form-control" id="suffixes" style="display: none;"> ,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,y,x,y,z,*</textarea>
              </div>
              <p class="mt-3" style="font-weight: 600;">Rekomendasi Topik dan Keyword (<b style="background-color: yellow">Hapus yang tidak relevan</b>)</p>
              <p class="text-danger" style="font-weight: 600; margin-top: -15px; font-size: 11px;">jangan hanya memasukkan keyword, tapi bahas topik dibawah ini di artikel anda, jika tidak tau bisa search kata nya di kolom search</p>
              <p style="font-weight: 450; margin-top: -5px;"> <i class="ion ion-document-text" id="sizek"> Semantic word : 0</i> <i class="fa fa-circle ml-4" id="sizeg" style="color: green"> 0</i> <i class="fa fa-minus-circle ml-4" id="sizer" style="color: red"> 0</i></p>
              <div class="card" style="margin-top: -15px;" >
                <div class="card-header bg-primary" style="color: white;padding-top: 0px!important;padding-bottom: 0px!important">
                  <b>Prioritas Tinggi</b>
                </div>
                <div class="card-body cb" id="idku">
                  <div class="form-group" id="hi" style="padding-top: 10px;">
                  </div>
                </div>
              </div>
              <style type="text/css">
                .cb{
                  padding-top: -0px!important;
                }
              </style>
              <div class="card mt-2" style="display: none">
                <div class="card-header bg-warning" style="color: white;padding-top: 0px!important;padding-bottom: 0px!important">
                  <b>Medium</b>
                </div> 
                <div class="card-body cb">
                  <div class="form-group" id="mi" style="padding-top: 10px;">
                  </div>
                </div>
              </div>
              <div class="card  mt-2" >
                <div class="card-header bg-danger" style=" color: white;padding-top: 0px!important;padding-bottom: 0px!important; ">
                  <b >Prioritas Sedang</b>
                </div>
                <div class="card-body cb" id="idku">
                  <div class="form-group" id="lo" style="padding-top: 10px;">
                  </div>
                </div>
              </div>
              <div class="card  mt-2" >
                <div class="card-header bg-success" style=" color: white;padding-top: 0px!important;padding-bottom: 0px!important; ">
                  <b >Rekomendasi Panjang kata</b>
                </div>
                <div class="card-body cb" id="low_word_len">
                  <br><p>Persaingan rendah Min : 800 Kata</p>
                  <h2><center>0/800</center></h2>
                </div>
                <div class="card-body cb" id="high_word_len">
                  <p>Persaingan Tinggi Min : 1300 Kata</p>
                  <h2><center>0/1300</center></h2>
                  <br>
                </div>
                <p class="text-center"><b>semakin banyak kata, maka semakin banyak keyword yang bisa dirangking</b></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div id="results" class="col-sm-12">
            <!-- <div class="table-responsive"> -->
              <table id="outtable" class="table table-condensed compact dt-responsive data-result" style="color: black;" cellspacing="0" width="100%">
                <thead style="background-color: #1910f245;">
                  <tr>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
              <!-- </div> -->
            </div>
          </div>

        </div> <!-- tutup row -->

        <div class="row" style="display:none;">
          <div class="col-sm-12">
           <div id="txt"></div>
         </div>
       </div>



     </div>
   </div>

   <!-- AWAL TAB2 -->
   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <div id="loading">
      <div style="z-index: 99; position: absolute; height: 100%; width: 95%; background-color: #e9ecef; ">
      </div>

      <div id="huhu" style="z-index: 9999; position: absolute; height: 100%; width: 100%; display: none;">
        <center style="margin-top: 15%; margin-right: 20%; z-index: 9999;">
          <div class="loader"></div>
          <h5 class="txt-info">sedang mengunduh data..</h5>
        </center>
      </div>
    </div>

    <div class="row" style="margin-top: 20px;">
      <div class="col-md-12" id="idku">
        <label style="font-weight: 600;" id="oyi"><i class="fa fa-line-chart"></i> Volume Kword: </label>

        <div class="br-section-wrapper" style="padding: 24px;">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Keyword</h6>
          <canvas id="myChart" height="130"></canvas>
        </div><!-- br-section-wrapper -->

      </div>
    </div>
    <!-- akhir row -->

    <div class="row">
      <div class="col-md-6 mt-3">
        <div class="br-section-wrapper" style="height: 370px; padding: 24px;">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Query Top</h6>
          <div class="table-wrapper">
            <table id="" class="table display responsive nowrap datatable-top" style="width: 100%;">
              <thead>
                <tr style="display: none;">
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="zahwa">
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
      </div>
      <div class="col-md-6 mt-3">
        <div class="br-section-wrapper" style="height: 370px; padding: 24px;">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Query Rising</h6>
          <div class="table-wrapper">
            <table id="" class="table display responsive nowrap datatable-rising" style="width: 100%;">
              <thead>
                <tr style="display: none;">
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="mega">
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
      </div>
<!--       <div class="col-md-3">
        <div class="card">
          aa
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          aa
        </div>
      </div> -->
    </div>


    <!-- akhir row -->
    <!-- AKHIR TAB2 -->
  </div> <!-- tutup tab -->
  <style type="text/css">

    #persen b{

      margin-left: 10px;
      /* margin-right: 50%;*/

    }
    #persen span{

      float:right;
    }
    #persen hr{
      height: 4px;
      color: #f3f5f0
    }
    #persen i{
      padding-left: 20px;
      color:darkgreen;
    }

  </style>

</div>

<script type="text/javascript" src="<?= site_url('assets/jquery-3.5.1.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/bootstrap-4.0.0/dist/js/bootstrap.min.js'); ?>"></script>

<script type="text/javascript" src="<?= site_url('assets/fitur.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/DataTables/DataTables-1.10.23/js/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/DataTables/datatables.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/dataTables.buttons.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/jszip.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/vfs_fonts.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/buttons.html5.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/print.min.js') ?>"></script>

<script type="text/javascript" src="<?= site_url('assets/colvis.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/buttons.jqueryui.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/lodash.min.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/FileSaver/src/FileSaver.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/localForage/src/localforage.js') ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/progress.min.js') ?>"></script>
<script src="<?= site_url('assets/ckeditor1/ckeditor.js') ?>"></script>
<script src="<?= site_url('assets/pagination.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/waterTank.js') ?>"></script>


<script type="text/javascript">
  // var uru = "<?= site_url("Trend/pos") ?>";

  $('#btnLeftMenuLele').on('click', function(){
    $('body').addClass('show-left');
    return false;
  });


  var bul = "";
  var th = 0;
  var jm = 0;
  var jm1 = 0;
  var auk = 0;
  var arc = [];
  var arb = [];
  var art = [];
  var bal = [];

  var awokwok = [];
  var umy = 0;
  var utun = [];
  var sok = 0;
  var poo = 0;
  var jdl = 0;
  var kat = 0;
  var kwt = 0;
  var rd = 0;
  var gr = 0;
  var hadeuh = "";
  var semvak = "";
  var res = [];
  var sendok = 0;
  var lala = "";

  $('#nrml').click(function(event) {
    event.preventDefault();
    $('#prefixes').val(' ,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,y,x,y,z,*');
    $('#suffixes').val(' ,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,y,x,y,z,*');
    $('#nrml').css('background-color', 'green')
    $('#berserk').css('background-color', 'grey')
    alert('Berganti Ke mode Normal')
    $('#aidah').html('mode normal : proses standar, rekomendasi keyword standar, minim rekomendasi gak nyambung');
  });

  $('#berserk').click(function(event) {
    event.preventDefault();
    $('#prefixes').val('a,ba,bi,bu,be,bo,ca,ci,cu,ce,co,da,di,du,de,do,e,fa,fi,fu,fe,fo,ga,gi,gu,ge,go,ha,hi,hu,he,ho,i,ja,ji,ju,je,jo,ka,ki,ku,ke,ko,la,li,lu,le,lo,ma,mi,mu,me,mo,na,ni,nu,ne,no,o,pa,pi,pu,pe,po,qa,qi,qu,qe,qo,ra,ri,ru,re,ro,sa,si,su,se,so,ta,ti,tu,te,to,u,va,vi,vu,ve,vo,wa,wi,wu,we,wo,xa,xi,xu,xe,xo,za,zi,zu,ze,zo');
    $('#suffixes').val('a,ba,bi,bu,be,bo,ca,ci,cu,ce,co,da,di,du,de,do,e,fa,fi,fu,fe,fo,ga,gi,gu,ge,go,ha,hi,hu,he,ho,i,ja,ji,ju,je,jo,ka,ki,ku,ke,ko,la,li,lu,le,lo,ma,mi,mu,me,mo,na,ni,nu,ne,no,o,pa,pi,pu,pe,po,qa,qi,qu,qe,qo,ra,ri,ru,re,ro,sa,si,su,se,so,ta,ti,tu,te,to,u,va,vi,vu,ve,vo,wa,wi,wu,we,wo,xa,xi,xu,xe,xo,za,zi,zu,ze,zo');
    alert('Berganti Ke mode Berserk')
    $('#nrml').css('background-color', 'grey')
    $('#berserk').css('background-color', 'green')
    $('#aidah').html('mode berserk : proses lama, rekomendasi keyword lebih lengkap, keyword gak ngambung lebih banyak (harus di delete)');
  });

  $('#lolo').keyup(function () {

    var waw = $(this).val();
    if(waw.length > 0){

      $('#lol').css('display', 'block') 
    }else {
      $('#lol').css('display', 'none')
    }
    $('#lol').text(waw)
    semvak = waw;
    if ($('#tittle').val().toLowerCase().indexOf(waw.toLowerCase()) > -1) {
      jdl = 1;
      $('#jdl').css('background-color', 'green'); 
    }else {
      jdl = 0;
      $('#jdl').css('background-color', 'red'); 
    }
    if (lala.indexOf(semvak.toLowerCase()) > -1) {
      kat = 1;

      $('#kat').css('background-color', 'green'); 
    }else {
      kat = 0;

      $('#kat').css('background-color', 'red'); 
    }

  });
  $('#tittle').keyup(function () {
    var jomblo = $(this).val();
    if (jomblo.toLowerCase().indexOf(semvak.toLowerCase()) > -1) {
      jdl = 1;

      $('#jdl').css('background-color', 'green'); 
    }else {
      jdl = 0;

      $('#jdl').css('background-color', 'red');
    }

  });
  $('#terlaluindah').keyup(function () {
    hadeuh = ""
    var waw = $(this).val();
    $('input[id="terlaluindah"]').val(waw);
    if (event.keyCode === 13) {
     event.preventDefault();
     utun.push(waw)

     for (var q = 0; q < utun.length; q++) {
       hadeuh += '<span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="'+utun[q].replaceAll(" ", '-')+'">'+utun[q]+' 0/2 <i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i></span> ';
     }
     document.getElementById('skut').innerHTML = hadeuh;

     for (var q = 0; q < utun.length; q++) {
      var juml = lala.split(utun[q].toLowerCase()).length - 1;
      $('#'+utun[q].replaceAll(" ", '-')).html(utun[q]+' '+ juml+'/2 <i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i>');
      if (juml > 1) {
        $('#'+utun[q].replaceAll(" ", '-')).css("background-color", "green");
      }else {
        $('#'+utun[q].replaceAll(" ", '-')).css("background-color", "red");
      }
    }
    var close = document.getElementsByClassName('del');

    for (i = 0; i < close.length; i++) {
      close[i].addEventListener("click", function() {
        console.log(utun.indexOf($(this.parentElement).attr('id').replaceAll("-", " ")));
        console.log(utun)
        utun.splice(utun.indexOf($(this.parentElement).attr('id').replaceAll("-", " ")), 1)
        this.parentElement.style.display = 'none';
      });
    }

    kwt = kwt + 1;
    $('input[id="terlaluindah"]').val("");
  }
});
  function getPlainText(strSrc) {
    var resultStr = "";

    if (strSrc.indexOf('<p>') == 0)
      resultStr = strSrc.substring(3);

    resultStr = resultStr.replace(/<p>/gi, " ");

    resultStr = resultStr.replace(/<br \/>/gi, " ");
    resultStr = resultStr.replace(/<br>/gi, " ");

    return resultStr.replace(/<[^<|>]+?>/gi, '');
  }
  function escapeRegExp(stringToGoIntoTheRegex) {
    return stringToGoIntoTheRegex.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
  }
  var i = 0;
  var upel = 0;
  var haha=[];
  var jml=[];
  var asd=[];
  var arr=[];
  var sayangkuh = "";
  var high = "";
  var mid = "";
  var low = "";
  zonx  = 0;
  zinx  = 0;
  var lol=[];

  var editor = CKEDITOR.replace( 'haha', {
    language: 'en',
    extraPlugins: 'notification',
    height:540
  });

  editor.on( 'change', function( evt ) {

    var div = document.createElement("div");

    var str = evt.editor.getData();
    str = str.replaceAll("</td>", " ");

    str = str.replaceAll("&nbsp;", " ");

    console.log(str)
    div.innerHTML = str;
    lala = (div.textContent || div.innerText); 

    lala = lala.replaceAll(/(\r\n|\n|\r|↵)/gm, " ");
    lala = lala.replaceAll( /\s\s+/g, ' ')
    lala = lala.toLowerCase();
    var stringToGoIntoTheRegex = escapeRegExp(semvak); 
    var regex = new RegExp(stringToGoIntoTheRegex, "g");
    var pap = (lala.match(regex) || []).length;

    console.log(lala)
    res = lala.split(" ")
    var oke = res.length - 1;
    console.log(res)
    if (semvak != "") {

      kat = lala.split(semvak.toLowerCase()).length - 1; 
      if (jdl == 1) {
        var csj = "green";
      }else {
        var csj = "red";
      }

      if (kat > 1) {

        var csk = "green";
        $('#kat').css('background-color', 'green'); 
      }else {

        var csk = "red";
        $('#kat').css('background-color', 'red'); 
      }

      document.getElementById("mustahil").innerHTML = '<b><span style="background-color:'+csj+'; padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="jdl">Keyword '+semvak.toUpperCase()+' Di Judul</span></b><hr><b><span style="background-color:'+csk+'; padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="kat">Keyword '+semvak.toUpperCase()+' Di Artikel '+kat+'/2</span></b><hr><b><span class="text-danger" style="font-size: 13px;">Keyword Utama mohon di Heading (Masukin waktu di Wordpress/Anda)</span></b><br><hr>';
    }

    for (var q = 0; q < utun.length; q++) {
      var juml = lala.split(utun[q].toLowerCase()).length - 1;
      $('#'+utun[q].replaceAll(" ", '-')).html(utun[q]+' '+ juml+'/2 <i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i>');
      if (juml > 1) {
        $('#'+utun[q].replaceAll(" ", '-')).css("background-color", "green");
      }else {
        $('#'+utun[q].replaceAll(" ", '-')).css("background-color", "red");
      }
    }


    if(oke >= 800){

      document.getElementById('low_word_len').innerHTML = "<br><p>Persaingan rendah Min : 800 Kata</p><h2 style='color:green;'><center>"+oke+"/800 <i class='fa fa-check'></i></center></h2>";
      if (oke >= 1300) {
        document.getElementById('high_word_len').innerHTML = "<br><p>Persaingan rendah Min : 800 Kata</p><h2 style='color:green;'><center>"+oke+"/1300 <i class='fa fa-check'></i></center></h2>";
      }

    }else {

      document.getElementById('low_word_len').innerHTML = "<br><p>Persaingan rendah Min : 800 Kata</p><h2><center>"+oke+"/800</center></h2>";
      document.getElementById('high_word_len').innerHTML = "<br><p>Persaingan rendah Min : 800 Kata</p><h2><center>"+oke+"/1300</center></h2>";
    }

    if (str === "") {
      zonx = 0
    }
    if (lala == " ") {
      var text = lala.slice(0, -1);
    }else {

      var text = lala.toLowerCase();
    }

    lala = lala.replaceAll("'", "luoyi");
    lala = lala.replaceAll("-", "rafidah");
    lala = lala.replaceAll("%", "finna");
    lala = lala.replaceAll(/[^a-zA-Z0-9]/g, " ");
    lala = lala.replaceAll("rafidah", "-");
    lala = lala.replaceAll("finna", "%");

    res1 = lala.split(" ")
    var map = haha.reduce(function(prev, cur) {
      prev[cur] = (prev[cur] || 0) + 1;
      return prev;
    }, {});
    x = sum(map);
    const sortable = Object.fromEntries(
      Object.entries(map).sort(([,a],[,b]) => a-b)
      );
    ob = reverseObject(sortable);
    asd = [];
    var size = Object.size(map);
    gr = 0;
    Object.keys(ob).forEach(function(key) {


      var a =  res1.indexOf(key);
      if (a > -1) {

        if (asd.indexOf(a) == -1) {
          asd.push(a);
          zonx = 0;
          for (var o = 0, l = asd.length; o < l; ++o) {
            var p = Object.values(ob)[asd[o]]/x * 100;
            p = p.toFixed(0);
            zonx = parseInt(zonx) + parseInt(p);
          }
        }
        $("#"+key).css('background-color', 'green')
        gr = gr + 1;
      } else {
        $("#"+key).css('background-color', 'red')
      }
    });
    rd =  parseInt(size) - parseInt(gr);
    $('#sizeg').html(' '+gr)
    $('#sizer').html(' '+rd)

  });

editor.on( 'required', function( evt ) {
  editor.showNotification( 'This field is required.', 'warning' );
  evt.cancel();
} );



$('textarea[id="input"]').keyup(function (event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("startjob").click();
   $("#input").prop('disabled', true);
 }
});



$(document).ready(function() {
  $('.waterTankHere2').waterTank({
    width: 80,
    height: 410,
    color: '#556B2F',
    level: 80
  }).on('click', function(event) {
    $(this).waterTank(Math.floor(Math.random() * 100) + 0 );
  });
});


var suggestions = function(){
  return {
    defaultOptions:{
      deferTableUpdatesAtRows: 5000,
      keepRunning: false,
      maxQueueDisplay: 5000,
      country: "",
      filterNegative: "",
      filterPositive: "",
      lang: "",            
      prefixes: [" ", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "y", "x", "y", "z", "*"],
      rateLimit: 750,
      service: "google",
      suffixes: [" ", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "y", "x", "y", "z", "*"],
    },

    services:{
      "google":
      "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&gl=${country}&callback=?&q=",

    },
    getUrl :function(service, options){
      options = _.defaults({},this.defaultOptions, this.getOptions(), options)
      return _.template(this.services[(service||this.options.service)])(options);
    },


    parseServiceResponse: function(res, service){
      RESPONSE_TEMPLATES = {
        "default": function (res) {
          return res[1];
        },
        "yahoo": function (res) {
          return _.map(res.gossip.results, 'key');
        },
        "ebay": function (res) {
          return res.res ? res.res.sug : [];
        },
        "twitter": function (res) {
          return _.concat(res.users, _.map(res.topics, 'topic'), res.hashtags, res.oneclick);
        },
        "baidu": function (res) {
          return res.s;
        },
        "yandex": function(res){
          return _.map(res[1], function(r){
            return typeof r === 'string' ? r : r[1];
          });
        },
        "linkedin": function(res){
          return _.map(res.resultList,'displayName');
        },
        "google play": function(res){return _.map(res,'s')},
        "google play apps": function(res){return _.map(res,'s')},
        "google play movies": function(res){return _.map(res,'s')},
        "google play books": function(res){return _.map(res,'s')},
      };
      var parser = RESPONSE_TEMPLATES[(service||this.options.service)] || RESPONSE_TEMPLATES["default"];
      return parser(res);
    }
  }
}()

function sum( obj ) {
  var sum = 0;
  for( var el in obj ) {
    if( obj.hasOwnProperty( el ) ) {
      sum += parseFloat( obj[el] );
    }
  }
  return sum;
}
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
function roundNumber(num, scale) {
  if(!("" + num).includes("e")) {
    return +(Math.round(num + "e+" + scale)  + "e-" + scale);
  } else {
    var arr = ("" + num).split("e");
    var sig = ""
    if(+arr[1] + scale > 0) {
      sig = "+";
    }
    return +(Math.round(+arr[0] + "e" + sig + (+arr[1] + scale)) + "e-" + scale);
  }
}


var KWS = function(){
 var v = 0;
 return {
  table: undefined,
  myIp: undefined,
  options: {},
  queryLock: false,
  doWork: false,
  hashMapInputs: {},
  keywordsToQuery: [],
  keywordsToQueryIndex: 0,
  numOfInitialKeywords: 0,

  services:suggestions.services,
  getUrl :suggestions.getUrl,
  parseServiceResponse: suggestions.parseServiceResponse,

  toggleWork: function(){
    if (this.doWork === false) {

      this.StartWork();
    }else {
      this.StopWork();

      var map = haha.reduce(function(prev, cur) {
        prev[cur] = (prev[cur] || 0) + 1;
        return prev;
      }, {});
      var size = Object.size(map);
      $('#myBar').html('Sukses ! :'+sendok+' keyword ditemukan').css({'background-color': 'green', 'color': 'white'})
      $('#sizek').html(' Semantic word : '+size)
      $('#sizer').html(' '+size)
    }
  },


  StartWork: function() {

    sayangkuh = "";
    high = "";
    mid = "";
    low = "";
    if (this.doWork === false) {
      this.reset.bind(this);
      $('#huhu').css('display', 'block');
      $('#loading').css('display', 'inline-block');
      if (upel == 1) {
        haha = [];
        upel = 0;
      }
      this.saveSettings();
      if (v == 0) {
        var lala = $("#lolo").val();
        $("textarea[id='input']").val(lala);
        v = 1;
      }
      $("#lolo").prop('disabled', true);
      $('#startjob').val('Stop Job').text('Stop generate').addClass('btn-danger');
      this.hashMapInputs = {};
      this.keywordsToQuery = [];
      this.keywordsToQueryIndex = 0;

      this.hashMapInputs[""] = true;
      this.hashMapInputs[" "] = true;
      this.hashMapInputs["  "] = true;

      this.options = this.getOptions();

      var ks = $('#input').val().split("\n");
      this.keywordsToQuery=_.map(ks,this.CleanVal);


      if (!this.keywordsToQuery.length)
        this.permuteResultsToQueue([' ']);
      else {
        var untickedInputs = this.keywordsToQuery.filter(function(k){
          return k.slice(-1)!=='  ' && k.slice(-1)!=='  ';
        });
        this.permuteResultsToQueue(untickedInputs);
      }

      this.numOfInitialKeywords = this.keywordsToQuery.length;
      this.FilterAndDisplay();

      this.doWork = true;
      this.progress1.start();
      var indah = $('#lolo').val();
      $.ajax({
        type:'POST',
        data:'Kword='+indah,
        url:'<?= site_url("Trend/pos") ?>',
        dataType:'JSON',
        success: function(hasil){
          t = 0;
          var mitha = "";
          for (var i = 0, l = hasil.top.default.rankedList[0].rankedKeyword.length; i < l; ++i) {
            t = t + 1;
            mitha += '<tr><td>'+hasil.top.default.rankedList[0].rankedKeyword[i].query+'</td><td><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:'+hasil.top.default.rankedList[0].rankedKeyword[i].value+'%">'+hasil.top.default.rankedList[0].rankedKeyword[i].value+'</div></div></td></tr>';

          }

          $('#zahwa').html(mitha);
          $('.datatable-top').DataTable({
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

          ngeong = 0;
          var poligami = "";
          for (var o = 0, u = hasil.rising.default.rankedList[1].rankedKeyword.length; o < u; ++o) {
            ngeong = ngeong + 1;
            poligami += '<tr><td>'+hasil.rising.default.rankedList[1].rankedKeyword[o].query.substring(0, 40);
            if (hasil.rising.default.rankedList[1].rankedKeyword[o].query.length >= 40) {
             poligami += '...';
           } 
           poligami +='</td><td>'+hasil.rising.default.rankedList[1].rankedKeyword[o].formattedValue+'</td></tr>';

         }
         $('#mega').html(poligami);
         $('.datatable-rising').DataTable({
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
         console.log()

         for (var i = 0, l = hasil.exp.TIMESERIES.length; i < l; ++i) {
           if (bul != hasil.exp.TIMESERIES[i].formattedAxisTime.split(" ")[1] || th != hasil.exp.TIMESERIES[i].formattedAxisTime.split(" ")[2]) {
            if (i != 0) {
              jm = jm/auk;
              jm1 = jm1/auk;
              arc.push(jm)
              arb.push(bul+", "+th)
              art.push(jm1)
              jm = 0;
              auk = 0;
            }else {
              jm = parseInt(jm) + parseInt(hasil.exp.TIMESERIES[i].value[0]);
              jm1 = parseInt(jm1) + parseInt(hasil.exp.TIMESERIES[i].value[1]);
              auk = auk + 1;
            }
            bul = hasil.exp.TIMESERIES[i].formattedAxisTime.split(" ")[1];
            th = hasil.exp.TIMESERIES[i].formattedAxisTime.split(" ")[2];

          }else {
            jm = jm + hasil.exp.TIMESERIES[i].value[0];
            jm1 = parseInt(jm1) + parseInt(hasil.exp.TIMESERIES[i].value[1]);
            auk = auk + 1;
            if (i == l-1) {
              jm = jm/auk;
              jm1 = jm1/auk;
              arc.push(jm)
              arb.push(bul+", "+th)
              art.push(jm1)
            }
          }
        }
        console.log(arc)
        console.log(arb)
        console.log(art)
        var prt = 9000/(sum(art)/art.length);
        for (var i = 0, l = arc.length; i < l; ++i) {
          bal.push((arc[i]*prt).toFixed(2));
        }
        $('#oyi').html('<i class="fa fa-line-chart"></i> Volume Kword: '+(Math.round((sum(arc)/arc.length))*prt).toFixed(2))
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: arb,
            datasets: [{
              label: '# of Votes',
              data: bal,
              backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });

        $('#loading').css('display', 'none');
      }
    });

} else {

}
},

StopWork: function(){
  if (this.doWork){
    $('#startjob').val('Start Job').text('Generate keyword').removeClass('btn-danger');
    this.doWork = false;
    this.table.draw();
    this.table.columns.adjust();
    this.saveSettings();
    this.FilterAndDisplay();
    this.progress1.end();
    if (jdl == 1) {
      var csj = "green";
    }else {
      var csj = "red";
    }

    if (kat > 1) {
      var csk = "green";
    }else {
      var csk = "red";
    }
    document.getElementById("mustahil").innerHTML = '<b><span style="background-color:'+csj+'; padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="jdl">Keyword '+semvak.toUpperCase()+' Di Judul</span></b><hr><b><span style="background-color:'+csk+'; padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="kat">Keyword '+semvak.toUpperCase()+' Di Artikel '+kat+'/2</span></b><hr><b><span class="text-danger" style="font-size: 13px;">Keyword Utama mohon di Heading (Masukin waktu di Wordpress/Anda)</span></b><br><hr>';
    document.getElementById("txt").innerHTML = "<textarea style='height:200px; width:100%;'>"+lol+"</textarea>";
    var map = haha.reduce(function(prev, cur) {
      prev[cur] = (prev[cur] || 0) + 1;
      return prev;
    }, {});
    a = sum(map);
    const sortable = Object.fromEntries(
      Object.entries(map).sort(([,a],[,b]) => a-b)
      );
    console.log(sortable)
    ob = reverseObject(sortable);
    var n = 0;
    var p = 0;
    var q = 0;
    var r = 0;
    Object.keys(ob).forEach(function(key) {
      b = ob[key]/a * 100;
      b = roundNumber(b, 2)
      n = n + 1;
      if (n<=8) {
        if (p<=15) {
          p = p + key.length;
          high += '<span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="'+key+'">'+key.replaceAll("luoyi", "'")+'<i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i></span> ';
        }else {
          high += '<br><span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="'+key+'">'+key.replaceAll("luoyi", "'")+'<i class="fas fa-times-circle del mt-2" style="margin-left: 1%;" ></i></span> ';

          p = 0;
        }
      }else {
        if (r<=15) {
          r = r + key.length;
          low += '<span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="'+key+'">'+key.replaceAll("luoyi", "'")+'<i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i></span> ';
        }else {
          low += '<br><span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="'+key+'">'+key.replaceAll("luoyi", "'")+'<i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i></span> ';

          r = 0;
        }
      }
      sayangkuh += "<i class='fas fa-circle del'></i><b>"+key+"</b> "+"<span>"+b+"% , </span><br><hr>"
      

    });
    var size = Object.size(map);
    if (size != 0){
      $('#myBar').html('Sukses !:'+sendok+' keyword ditemukan').css({'background-color': 'green', 'color': 'white', 'font-size': '15px'})
    }

    $('#sizek').html(' Semantic word : '+size)
    $('#sizer').html(' '+size)

    document.getElementById('persen').innerHTML = sayangkuh;

    document.getElementById('hi').innerHTML = high;
    document.getElementById('mi').innerHTML = mid;
    document.getElementById('lo').innerHTML = low;
    var close = document.getElementsByClassName('del');
    var i;

    for (i = 0; i < close.length; i++) {
      close[i].addEventListener("click", function() {
        var map = haha.reduce(function(prev, cur) {
          prev[cur] = (prev[cur] || 0) + 1;
          return prev;
        }, {});
        umy = umy + 1;
        var size = Object.size(map);
        size = size - umy;

        $('#sizek').html(' Semantic word : '+size)
        if (rd != 0 && gr != 0) {
          if ($(this).css('background-color', 'green')) {
            gr = gr - 1;
          }else {
            rd = rd - 1;
          }
          $('#sizeg').html(' '+gr)
          $('#sizer').html(' '+rd)
        }else {

          $('#sizeg').html('0')
          $('#sizer').html(' '+size)
        }
        this.parentElement.style.display = 'none';
      });
    }

  }
},

DoJob: function() {
  if (this.doWork === true && this.queryLock === false) {
    if (this.keywordsToQueryIndex < this.numOfInitialKeywords) {
      var currentKw = this.keywordsToQuery[this.keywordsToQueryIndex];
      if (currentKw.slice(-2)!=='  ' && currentKw.slice(-2)!=='  ') {
        this.QueryKeyword(currentKw);
        this.keywordsToQueryIndex++;
      } else {
        this.keywordsToQueryIndex++;
        this.DoJob();
      }

      var prog = parseInt(this.keywordsToQueryIndex/this.numOfInitialKeywords*100);
      this.progress1.set(prog);
      this.FilterAndDisplay();

    } else {
      if (this.options.keepRunning) {
        console.log('finish initial queue');
        this.StopWork();
        this.StartWork();
      } else {
        console.log('finish initial queue');
        this.StopWork();
      }
    }
  }
},

addResultsToQueue: function(retList, search){
  retList=_.map(retList,this.CleanVal);

  for (var j = 0; j < retList.length; j++) {
    cleanKw = retList[j];
    if (cleanKw && cleanKw.length && !this.hashMapInputs[cleanKw] && this.keywordsToQuery.indexOf(cleanKw)===-1)
      this.keywordsToQuery.push(cleanKw);
    this.hashMapInputs[cleanKw] = true;
  }

},

permuteResultsToQueue: function(retList, search){
  var chr, currentx, currentKw;
  var self = this;
  var options = this.getOptions()

  this.hashMapInputs[search] = true;


  function addPrefix(s,prefix){
    return prefix+' '+s;
  }
  function addSuffix(s,suffix){
    return s+' '+suffix;
  }
            // clean
            retList=_.map(retList,this.CleanVal);

            // get permutations
            var newInputs = retList.reduce(function(result, keyword){
              return _.concat(
                result,
                _.map(options.prefixes,addPrefix.bind(self,keyword)),
                _.map(options.suffixes,addSuffix.bind(self,keyword))
                );
            }, []);

            this.keywordsToQuery=_.concat(this.keywordsToQuery,newInputs);

            return newInputs;
          },


          displayResults: function(retList, search, dontDisplay, url,data){

            var rows=[];
            retList=_.map(retList,this.CleanVal);

            for (var i = 0; i < retList.length; i++) {
              sendok = sendok + 1;
              var  cleanKw = retList[i];


              if (url===undefined) url=data[i].url;

              arr = cleanKw.split(" ");
              for (var y = 0; y < arr.length; y++) {
                if (isNaN(arr[y])) {

                  if (lol.indexOf(arr[y]) < 0) {
                    lol.push(arr[y].replaceAll("'", "luoyi"));
                  }
                  haha.push(arr[y].replaceAll("'", "luoyi"));
                }
              }


              var da = {
                id: this.table.rows()[0].length+i,
                keyword: cleanKw,
                length: cleanKw.length,
                words: cleanKw.trim().split(/ +/).length,
                domain: this.extractDomain(url)
              };

              da = _.mapValues(da, function(v){return v===undefined ? null: v;});

              rows.push(da);
            }


            Object.size = function(obj) {
              var size = 0,
              key;
              for (key in obj) {
                if (obj.hasOwnProperty(key)) size++;
              }
              return size;
            };
            $('#myBar').html('Mengumpulkan keyword...'+sendok).css({'background-color': '#1d2939', 'color': 'white'})


            this.table.rows.add(rows);


            if (!dontDisplay && this.table.data().length<this.options.deferTableUpdatesAtRows) this.table.draw(false);






          },


          extractDomain: function(url) {
            if (url===undefined) return null;
            var domain;
            if (url.indexOf("://") > -1) {
              domain = url.split('/')[2];
            }
            else {
              domain = url.split('/')[0];
            }

            domain = domain.split(':')[0];

            var mr = url.match('ds=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&ds='+mr[1];

            var mr = url.match('gl=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&gl='+mr[1];

            var mr = url.match('hl=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&hl='+mr[1];

            var mr = url.match('uil=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&uil='+mr[1];

            return domain;
          },

          markAsDone: function(search){
            if (this.keywordsToQuery[this.keywordsToQueryIndex]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex]+='   ';
            else if (this.keywordsToQuery[this.keywordsToQueryIndex-1]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex-1]+='   ';
            else
              console.warn('Cant find ',search,'in keywordsToQuery');
          },

          markAsNone: function(search){
            if (this.keywordsToQuery[this.keywordsToQueryIndex]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex]+='   ';
            else if (this.keywordsToQuery[this.keywordsToQueryIndex-1]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex-1]+='   ';
            else
              console.warn('Cant find ',search,'in keywordsToQuery');
          },

          QueryKeyword: function(search) {
            var self = this;
            this.queryLock = true;

            url = self.getUrl()+search;
            var promise = $.ajax({
              url: url,
              dataType: "jsonp",
              success: function (res, statusText, jqXHR) {
                var retList = self.parseServiceResponse(res);
                if (retList && retList.length){
                  self.displayResults(retList, search, undefined, this.url);
                  self.addResultsToQueue(retList);
                  if (self.options.keepRunning) self.permuteResultsToQueue(retList);
                  self.markAsDone(search);
                } else {
                  self.markAsNone(search);
                }
                self.queryLock = false;
                return;

              },
              error: function(jqXHR,errorText,error){
                console.error(errorText,this.url,this,jqXHR,error);
                self.queryLock = false;
                return;
              },
              callback: function(){
                console.log(this,arguments);
              }
            });
            return promise;
          },

          CleanVal: function(input) {
            input=$('<div />').html(input).text();

            input = input.toLowerCase();

            if (input.length > 4 && input.substring(0, 4) == "http") input = "";

            return input;
          },

          Filter: function(listToFilter) {
            var retList = listToFilter;

            if ($("#filter-positive").val().length > 0) {
              var filteredList = [];
              var filterContains = $("#filter-positive").val().split("\n");
              for (var i = 0; i < retList.length; i++) {
                var currentKeyword = retList[i];
                var boolContainsKeyword = false;
                for (var j = 0; j < filterContains.length; j++) {
                  if (filterContains[j].length > 0) {
                    if (currentKeyword.indexOf(filterContains[j]) != -1) {
                      boolContainsKeyword = true;
                      break;
                    }
                  }
                }

                if (boolContainsKeyword) {
                  filteredList[filteredList.length] = currentKeyword;
                }
              }

              retList = filteredList;
            }

            if ($("#filter-negative").val().length > 0) {
              var filteredList = [];
              var filterContains = $("#filter-negative").val().split("\n");
              for (var l = 0; l < retList.length; l++) {
                var currentKeyword = retList[l];
                var boolCleanKeyword = true;
                for (var k = 0; k < filterContains.length; k++) {
                  if (filterContains[k].length > 0) {
                    if (currentKeyword.indexOf(filterContains[k]) >= 0) {
                      boolCleanKeyword = false;
                      break;
                    }
                  }
                }

                if (boolCleanKeyword) {
                  filteredList[filteredList.length] = currentKeyword;
                }
              }

              retList = filteredList;
            }

            return retList;
          },

          FilterAndDisplay: function() {
            var i = 0;
            var sb = '';

            var outputKeywords = this.keywordsToQuery;
            for (i = 0; i < Math.min(outputKeywords.length,this.options.maxQueueDisplay); i++) {
              sb += outputKeywords[i];
              sb += '\n';
            }
            if (outputKeywords.length>this.options.maxQueueDisplay) sb+='...\n';
            $("#input").val(sb);
            $("#numofkeywords").html('Queue:' + outputKeywords.length);
          },


          getOptions: function(argOptions){
            var defaultOptions={
              deferTableUpdatesAtRows: 5000,
              keepRunning: false,
              maxQueueDisplay: 5000,
              country: "",
              filterNegative: "",
              filterPositive: "",
              lang: "",        
              prefixes: [" ", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "y", "x", "y", "z", "*"],
              rateLimit: 750,
              service: "google",
              suffixes: [" ", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "y", "x", "y", "z", "*"]
            }; 
            if (argOptions===undefined) argOptions={};
            return _.defaults(argOptions,this.getDomOptions(),defaultOptions);
          },

          getDomOptions: function(){

            var service= $('#service').val(),
            filterNegative = $('#filter-negative').val(),
            filterPositive = $('#filter-positive').val(),
            rateLimit = parseInt($('#rate-limit').val()),
                // input: $('#input').val(),
                prefixes = $('#prefixes').val(),
                suffixes = $('#suffixes').val(),
                country = $('#country').val(),
                lang = $('#lang').val(),
                keepRunning = $('#keep-running').prop('checked');
                if (prefixes && prefixes.length)
                  prefixes=prefixes.split(',');
                else
                  prefixes="";
                if (suffixes && suffixes.length)
                  suffixes=suffixes.split(',');
                else
                  suffixes="";

                var options={};
                if (service) options.service=service;
                if (filterNegative) options.filterNegative=filterNegative;
                if (filterPositive) ooptions.filterPositive=filterPositive;
                if (rateLimit) options.rateLimit=rateLimit;
                if (prefixes) options.prefixes=prefixes;
                if (suffixes) options.suffixes=suffixes;
                if (country) options.country=country;
                if (lang) options.lang=lang;
                if (keepRunning) options.keepRunning=keepRunning;
                return options;
              },

              loadSettings: function(){
                if (localStorage.service) $("#service").val( localStorage.service );
                if (localStorage.country) $('#country').val(localStorage.country);
                if (localStorage.haha) $('#haha').val(localStorage.haha);
                if (localStorage.lang) $('#lang').val(localStorage.lang);
                if (localStorage.filterNegative) $("#filter-negative").val( localStorage.filterNegative );
                if (localStorage.filterPositive) $("#filter-positive").val( localStorage.filterPositive );
                if (localStorage.rateLimit) $("#rate-limit").val( localStorage.rateLimit );

              },
              saveSettings: function(){
                localStorage.service = $('#service').val();
                localStorage.haha = $('#haha').val();
                localStorage.country = $('#country').val();
                localStorage.lang = $('#lang').val();
                localStorage.filterNegative = $('#filter-negative').val();
                localStorage.filterPositive = $('#filter-positive').val();
                localStorage.rateLimit = $('#rate-limit').val();
              },

              reset: function(){
                this.table.clear();
                this.table.draw();
                $('#input').val('');
                $('#lolo').val('');
                $("#lolo").prop('disabled', false);
                upel = 1;
                var i = 0;

                var haha=[];
                var jml=[];
                var asd=[];
                var arr=[];
                var sayangkuh = "";
                var high = "";
                var mid = "";
                var low = "";
                sendok = 0;
                zonx  = 0;
                zinx  = 0;
                v = 0;
                var lol=[];

                var bul = "";
                var th = 0;
                var jm = 0;
                var jm1 = 0;
                var auk = 0;
                var arc = [];
                var arb = [];
                var art = [];
                var bal = [];
                $('.datatable-top').DataTable().clear().destroy();
                $('.datatable-rising').DataTable().clear().destroy();
                $('#myChart').html('');


                $('#sizek').html(' Semantic word : 0')
                $('#sizeg').html(' 0')
                $('#sizer').html(' 0')
                $('#lol').html('')
                $('#mustahil').html('')
                $('#myBar').html('Generate keyword terlebih dahulu').css({'background-color': 'white', 'color': 'grey'})
                document.getElementById("hi").innerHTML = "";
                document.getElementById("mi").innerHTML = "";
                document.getElementById("lo").innerHTML = "";
                this.saveSettings();
              },

              init: function(){

                for (var service in this.services) {
                  if (this.services.hasOwnProperty(service)) {
                    $('#service').append('<option>'+service+'</option>')
                  }
                }


                this.loadSettings();
                this.options = this.getOptions();

                window.setInterval(this.DoJob.bind(this), this.options.rateLimit);

                $('#progress1').addClass('progressjs-progress');
                this.progress1 = progressJs("#progress1");

            // bind buttons
            $('#startjob').on('click',this.toggleWork.bind(this));
            $('#reset').on('click',this.reset.bind(this));

            // setup table
            this.table = $('#outtable').DataTable({
              pageLength: 10,
              "lengthMenu": [ 10, 25, 50, 75, 100,800],
              dom:
              /* "<'row'<'col-sm-5'B><'col-sm-7'<'pull-right'p>>>" +
              "<'row'<'col-sm-8'i><'col-sm-4'<'pull-right'f>>>" +
              "<'row'<'col-sm-12'tr>>", */
              'Bfrtip',
              buttons: [
              {
                extend: 'copy',
                text: 'Copy to Clipboard',
                exportOptions: {
                    columns: [ 1 ]
                }
              },
              {
                extend: 'excel',
                text: 'Export Excel',
                exportOptions: {
                    columns: [ 1 ]
                }
              }
             //  {
             //   extend: 'collection',
             //   text: 'Export',
             //   buttons: [
             //   'csvHtml5',
             //   {
             //     extend: 'csvHtml5',
             //     fieldBoundary: "",
             //     text: 'Copy keywords',
             //     header: false,
             //     exportOptions: {
             //       stripNewlines: true,
             //       stripHtml: true,
             //       decodeEntities: true,
             //       columns: 1,
             //     }
             //   },
             //   {
             //     extend: 'csvHtml5',
             //     fieldBoundary: "",
             //     text: 'Copy visible columns',
             //     header: false,
             //     exportOptions: {
             //       columns: ':visible',
             //       stripNewlines: true,
             //       stripHtml: true,
             //       decodeEntities: true,
             //     }
             //   },
             //   ]
             // },

             ],
             "columnDefs": [
             {
              "title": "id",
              "data": "id",
              "targets": 0,
              "visible": false,
            },
            {
              "name": "keyword",
              "title": "Analisa Intent",
              "data": "keyword",
              "responsivePriority": 1,
              "targets": 1,
            },
            {
              "title": "Length",
              "data": "length",
              "targets": 2,
              "visible": false,
              "type": "num"
            },  {
              "title": "Words",
              "data": "words",
              "targets": 3,
              "visible": false,
              "type": "num"
            },
            ],
            order: [[ 0, 'desc' ]],
            stateSave: true,
            "bDeferRender": true,

          });

            $.getJSON('https://api.ipify.org?format=json', function (data) {
              this.myIp = data.ip;
            });

          }
        };
      }();




      var close = document.getElementsByClassName("delete");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].addEventListener("click", function() {
          this.parentElement.style.display = 'none';
        });
      }

    </script>
    <!--     <script src="<?= site_url('assets/t2.js'); ?>"></script> -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51809277-6', 'auto');
      ga('send', 'pageview');

    </script>
    <script>
      $(document).ready(function () {
        KWS.init();
      });
    </script>

  </body>

  </html>
