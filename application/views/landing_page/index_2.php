<!DOCTYPE html>
<html>
<title>Related Keyword Generator</title>

<head>
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


  <link rel="stylesheet" href="<?= base_url();?>assets/style.css">


  <style type="text/css">

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
      height: auto;
      max-height: 200px;
      overflow-x: hidden;
    }
    #collapseUtilities::-webkit-scrollbar {

      width: 8px;
    }


    #collapseUtilities::-webkit-scrollbar-track {


    }


    #collapseUtilities::-webkit-scrollbar-thumb {
      background: #888; 
      /* border-radius: 10px;*/
    }


    #collapseUtilities::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
    .tex::-webkit-scrollbar {

      width: 8px;
    }


    .tex::-webkit-scrollbar-track {


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
  </style>
</head>

<body>



  <!-- <meta http-equiv="CACHE-CONTROL" content="NO-CACHE"> -->
  <nav class="navbar navbar-light " style="background-color: #556B2F;">

    <a class="navbar-brand" href="#" style="color: white;margin:  10px;font-size: 30px;font-family: 'Roboto', sans-serif;">semanticarticle.com</a>

  </nav>

  <center><h1><b>Related Keyword Generator</b></h1></center>
  <center><p>Google, Youtube, Bing, Playstore, etc.</p></center>

  <div class="container" style="margin-top: 5%;">
<!--     <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active tab" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Scrapping</a>
    </li>
    <li class="nav-item">
        <a class="nav-link tab" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Optimasi</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> -->
    <div class="row">

      <div class="col-lg-8">
        <!-- <div id="numofkeywords"></div> -->
        <div class="row">

          <div class="col-lg-8">
            <label for="" style="margin-top: 20px;"></label>
            <textarea id="input" autocomplete="off" autocorrect="off" style="overflow:hidden;resize: none; height: 35px;" autocapitalize="off" spellcheck="false" rows="8" title="queue" class="form-control tex"  placeholder="Isi Keyword" class="input"></textarea>
            <a class="btn btn-danger primary btn-sm" id="reset" title="Empty all input and results" type="button" style="color: white; margin-top: 10px;" value="Reset">Reset Keyword</a>
            <div id="persen" style="display: none;">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="country">Country</label>
              <!-- ISO-3366-1: Alpha-2 Codes -->
              <select value="id" class="form-control" name="country" id="country" title="Country code. Two letters. Only works for google for now" disabled="">
              </select>
              <!-- <label for="service" style="margin-top: 20px;">Service:</label>
              <select class="form-control" name="service" id="service" >
              </select> -->
            </div>
            
            <div class="checkbox">
              <label for="keep-running">
                <input type="checkbox" id="keep-running" name="keep-running" title="Keep running forever"></input> Continuous running:
              </label>
            </div>
          </div>
        </div>

        <br>
        <div class="form-group" id="idku">
          <input class="form-control inputku" type="text" name="" value="" placeholder="Judul Artikel"  />
          <br>
          <label style="font-weight: 600;">Artikel</label>
          <textarea class="form-control anuku" id="haha" class="input" type="text"></textarea>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="row" style="margin-top: 32px;">
          <div class="col-lg-6">
            <div class="form-group">
              <a class="btn btn-info primary btn-md" id="startjob" type="button" value="Shit Keywords!" style="color: white;">Generate Keyword</a>
            </div>
          </div>
          <div class="col-lg-6">

          </div>
        </div>

        <br>
        
        <div class="progressk">
          <div style="font-weight: 800">Score :<span>80%</span></div>

          <div class="progress">
            <div class="progress-bar bg-success" style="width:80%"></div>
          </div>
        </div>
        <p class="mt-1" style="font-weight: 600;">Rekomendasi Keyword</p>
        <div class="card" style="margin-top: 20px;" >
          <div class="card-header bg-primary" style="color: white;padding-top: 0px!important;padding-bottom: 0px!important">
            <b>High</b>
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
        <div class="card mt-2" >
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
            <b >Low</b>
          </div>
          <div class="card-body cb" id="idku">
            <div class="form-group" id="lo" style="padding-top: 10px;">
            </div>
          </div>
        </div>

      </div>




    </div> <!-- tutup row -->


    <div class="row">
      <div class="col-sm-12">
        <hr id="progress1">
        <br id="progress2">
      </div>
    </div>
    <div class="row" style="display:none;">
      <div class="col-sm-12">
       <div id="txt"></div>
     </div>
   </div>


   <div class="row" style="display: none;">
    <div id="results" class="col-sm-12">
      <h2>Results</h2>
      <!-- <div class="table-responsive"> -->
        <table id="outtable" class=" table table-condensed compact dt-responsive" cellspacing="0" width="100%">
          <thead>
            <tr>
                            <!-- <th>id</th>
                            <th title="A suggested search">Keyword</th>
                            <th title="Keyword length">Length</th>
                            <th title="Searches per month">Volume</th>
                            <th title="Cost per click ($US)">CPC</th>
                            <th title="Search that prompted the keyword suggestion">Search</th>
                            <th title="Source">Source</th>
                            <th title="Number of words">Words</th> -->
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                      <!-- </div> -->
                    </div>
                  </div>
                </div>

                <!-- AWAL TAB2 -->
                <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> -->
                  <div class="row" style="display: none;">
                    <div class="col-md-8 mt-4" id="idku">
                      <div class="form-group">
                        <input class="form-control inputku " type="text" name="" value="" placeholder="Judul Artikel"  />
                      </div>
                      <label style="font-weight: 600;">Artikel</label>
                      <textarea class="form-control" id="haha"  required class="input" type="text"></textarea>
                    </div>


                    <div class="col-md-4" style="margin-top: 22px;">

                      <div class="card  mt-2" >
                        <div class="card-header" style="background-color: darkgreen; color: white;padding-top: 0px!important;padding-bottom: 0px!important; ">
                          <b >Inputan</b>
                        </div>
                        <div class="card-body cb">
                          <div class="form-group">
                            <input type="text" id="" style="margin-top: 10px!important;border: 1px solid darkgreen;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- akhir row -->



                  <!-- AKHIR TAB2 -->
                  <!-- </div> -->
                  <footer>

                    <p style="padding: 20px; text-decoration: bold;"><b>Tool By :</b> Aqil Da Fortress
                    </footer>
                  </p>
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

                <script type="text/javascript" src="<?= site_url('assets/DataTables/datatables.min.js'); ?>"></script>

                <script type="text/javascript" src="<?= site_url('assets/fitur.min.js') ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/colvis.min.js') ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/print.min.js') ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/DataTables/DataTables-1.10.23/js/jquery.dataTables.min.js'); ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/lodash.min.js') ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/FileSaver/src/FileSaver.js') ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/localForage/src/localforage.js') ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/progress.min.js') ?>"></script>
                <script src="<?= site_url('assets/ckeditor/ckeditor.js') ?>"></script>
                <script type="text/javascript" src="<?= site_url('assets/waterTank.js') ?>"></script>

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/s/bs/jszip-2.5.0,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,fh-3.1.0,kt-2.1.0,r-2.0.0,se-1.1.0/datatables.min.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.2.0/lodash.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/localforage/1.3.3/localforage.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/progress.js/0.1.0/progress.min.js"></script> -->



    <!-- <script type="text/javascript" src="<?= base_url();?>assets/suggestions.js"></script> -->
    <script>
      var editor = CKEDITOR.replace( 'haha', {
        language: 'en',
        extraPlugins: 'notification',
        height:540
      });

      editor.on( 'change', function( evt ) {
        console.log(evt.editor.getData());
      });

      editor.on( 'required', function( evt ) {
        editor.showNotification( 'This field is required.', 'warning' );
        evt.cancel();
      } );
    </script>

    <script>
      $('textarea[id="input"]').keyup(function (event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("startjob").click();
       }
     });
   </script>

   <script>
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
  </script>
  <script type="text/javascript">
    var haha=[];
    var arr=[];
    var sayangkuh = "";
    var high = "";
    var mid = "";
    var low = "";
    var lol=[];
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
          prefixes: [],
          rateLimit: 750,
          service: "google",
          suffixes: []
        },

        services:{
          "google":
          "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&gl=${country}&callback=?&q=",
            // "kickasstorrents": "//kat.cr/get_queries.php?query=", // not jsonp
          },
        /**
         * Get the service url based on options set in the dom.
         * @return {String} A jsonp url for search suggestions with query missing from the end.
         */
         getUrl :function(service, options){
            // Ref: https://github.com/estivo/Instantfox/blob/master/firefox/c1hrome/content/defaultPluginList.js
            // Ref: https://github.com/bnoordhuis/mozilla-central/tree/master/browser/locales/en-US/searchplugins
            // Ref: https://developers.google.com/custom-search/json-api/v1/reference/cse/list
            // https://developers.google.com/custom-search/docs/ref_languages
            options = _.defaults({},this.defaultOptions, this.getOptions(), options)
            return _.template(this.services[(service||this.options.service)])(options);
          },


          /** Parse response per service **/
          parseServiceResponse: function(res, service){
            // Each take a json response tand return a keyword array
            RESPONSE_TEMPLATES = {
                // opensearch default
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


        $('#idku .inputku').keyup(function () {
         var text = $(this).val().toLowerCase();
         var map = haha.reduce(function(prev, cur) {
          prev[cur] = (prev[cur] || 0) + 1;
          return prev;
        }, {});
         a = sum(map);
         const sortable = Object.fromEntries(
          Object.entries(map).sort(([,a],[,b]) => a-b)
          );
         ob = reverseObject(sortable);

         Object.keys(ob).forEach(function(key) {
          b = ob[key]/a * 100;
          b = roundNumber(b, 2)

          var res = text.split(" ");
          var a =  res.indexOf(key);
          if (a > -1) {
            $("#"+key).css('background-color', 'green')
          } else {
            $("#"+key).css('background-color', 'red')
          }
        });
         console.log(haha)
       });
        var KWS = function(){

          return {
            table: undefined,
            myIp: undefined,
            options: {},
        // flags
        queryLock: false,
        doWork: false,
        // keeping track of queue
        hashMapInputs: {},
        keywordsToQuery: [],
        keywordsToQueryIndex: 0,
        numOfInitialKeywords: 0,

        services:suggestions.services,
        getUrl :suggestions.getUrl,
        parseServiceResponse: suggestions.parseServiceResponse,

        toggleWork: function(){
          if (this.doWork === false)
            this.StartWork();
          else
            this.StopWork();
        },


        StartWork: function() {
          sayangkuh = "";
          high = "";
          mid = "";
          low = "";
          if (this.doWork === false) {
                // reset these
                this.saveSettings();
                $('#startjob').val('Stop Job').text('Stop Generate').addClass('btn-danger');
                this.hashMapInputs = {};
                this.keywordsToQuery = [];
                this.keywordsToQueryIndex = 0;

                this.hashMapInputs[""] = true;
                this.hashMapInputs[" "] = true;
                this.hashMapInputs["  "] = true;

                // update config
                this.options = this.getOptions();

                // get queries from the input
                var ks = $('#input').val().split("\n");
                this.keywordsToQuery=_.map(ks,this.CleanVal);


                // add variations of the initial terms
                // (before we start adding variations of the results)
                if (!this.keywordsToQuery.length)
                  this.permuteResultsToQueue([' ']);
                else {
                  var untickedInputs = this.keywordsToQuery.filter(function(k){
                    return k.slice(-1)!=='  ' && k.slice(-1)!=='  ';
                  });
                  this.permuteResultsToQueue(untickedInputs);
                }

                this.numOfInitialKeywords = this.keywordsToQuery.length;
                // show the extended queue
                this.FilterAndDisplay();

                this.doWork = true;
                this.progress1.start();

                // $('#input').hide();
                // $('#advanced').collapse("hide");

              } else {

              }
            },

            StopWork: function(){
              if (this.doWork){
                $('#startjob').val('Start Job').text('Generate Keyword').removeClass('btn-danger');
                this.doWork = false;
                // $('#input').show();
                this.table.draw();
                this.table.columns.adjust();
                this.saveSettings();
                this.FilterAndDisplay();
                this.progress1.end();

                document.getElementById("txt").innerHTML = "<textarea style='height:200px; width:100%;'>"+lol+"</textarea>";
                var map = haha.reduce(function(prev, cur) {
                  prev[cur] = (prev[cur] || 0) + 1;
                  return prev;
                }, {});
                a = sum(map);
                const sortable = Object.fromEntries(
                  Object.entries(map).sort(([,a],[,b]) => a-b)
                  );
                ob = reverseObject(sortable);
                var n = 0;
                var p = 0;
                var q = 0;
                var r = 0;
                Object.keys(ob).forEach(function(key) {
                  b = ob[key]/a * 100;
                  b = roundNumber(b, 2)
                    // console.log(key, b+"%");
                    // var a="<div>"
                    // var a+="<br><b>" +key+"</b>"
                    // var a+="<p>"+b+"%, </p>"
                    // var a+="</div>"
                    n = n + 1;
                    if (n<=5) {
                      if (p<=15) {
                        p = p + key.length;
                        high += '<span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;" id="'+key+'">'+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i></span> ';
                      }else {
                        high += '<br><span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;" id="'+key+'">'+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i></span> ';

                        p = 0;
                      }
                    }else if (n>=6 && n<=10) {
                      if (q<=15) {
                        q = q + key.length;
                        mid += '<span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;" id="'+key+'">'+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i></span> ';
                      }else {
                        mid += '<br><span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;" id="'+key+'">'+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i></span> ';

                        q = 0;
                      }
                    }else {
                      if (r<=15) {
                        r = r + key.length;
                        low += '<span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;" id="'+key+'">'+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i></span> ';
                      }else {
                        low += '<br><span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;" id="'+key+'">'+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i></span> ';

                        r = 0;
                      }
                    }
                    sayangkuh += "<i class='fas fa-circle'></i><b>"+key+"</b> "+"<span>"+b+"% , </span><br><hr>"
                    
                    // $('#persen').append("<i class='fas fa-circle'></i><b>"+key+"</b> "+"<span>"+b+"% , </span><br><hr>");
                    // $('#idkuu').append("<span style='background-color:#00415a;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;'>"+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i>'+"</span>");

                    // $('#persen').html("<span style='background-color:#00415a;padding:2px 4px;color: white;border-radius: 12px; font-size: 15px;'>"+key+'<i class="fas fa-times-circle delete mt-2" style="margin-left: 1%;"></i>'+"</span>");
                  });
                document.getElementById('persen').innerHTML = sayangkuh;

                document.getElementById('hi').innerHTML = high;
                document.getElementById('mi').innerHTML = mid;
                document.getElementById('lo').innerHTML = low;
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
                        // we didn't do a query immediatly go to next query
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

            // add each result to list first before permutations
            for (var j = 0; j < retList.length; j++) {
              cleanKw = retList[j];
                // add base suggestion to queue if it's not already done and isn't empty
                if (cleanKw && cleanKw.length && !this.hashMapInputs[cleanKw] && this.keywordsToQuery.indexOf(cleanKw)===-1)
                  this.keywordsToQuery.push(cleanKw);
                this.hashMapInputs[cleanKw] = true;
              }

            },

            /** Make permutations of results and add to queue **/
            permuteResultsToQueue: function(retList, search){
              var chr, currentx, currentKw;
              var self = this;
              var options = this.getOptions()

              this.hashMapInputs[search] = true;

            // sort so the shortest is first in the queue TODO add option?
            // retList.sort(function (a, b) {
            //   return a.length - b.length;
            // });

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

            // add to queue
            this.keywordsToQuery=_.concat(this.keywordsToQuery,newInputs);

            return newInputs;
          },


          /** Display results **/
          displayResults: function(retList, search, dontDisplay, url,data){

            var rows=[];
            retList=_.map(retList,this.CleanVal);

            for (var i = 0; i < retList.length; i++) {
              var  cleanKw = retList[i];

                // url might be in retlist
                if (url===undefined) url=data[i].url;
                // haha.push(cleanKw);

                arr = cleanKw.split(" ");
                for (var y = 0; y < arr.length; y++) {
                  if (lol.indexOf(arr[y]) < 0) {
                    lol.push(arr[y]);
                  }
                  haha.push(arr[y]);
                }


                var da = {
                  id: this.table.rows()[0].length+i,
                  keyword: cleanKw,
                  length: cleanKw.length,
                  words: cleanKw.trim().split(/ +/).length,
                  search: search,
                  domain: this.extractDomain(url)
                };

                // remove undefined values to avoid datatable alerts
                da = _.mapValues(da, function(v){return v===undefined ? null: v;});

                // TODO Check if suggestion is already displayed before adding
                // var matches = table.data().filter(function(v){return v[1]===cleanKw && v[5]==search;}).count();
                // if (!matches)
                // console.log(da)
                rows.push(da);
              }


           // haha.join(' ');


           
           this.table.rows.add(rows);


           if (!dontDisplay && this.table.data().length<this.options.deferTableUpdatesAtRows) this.table.draw(false);






         },

        /** Takes url string and returns domain e.g. www.google.com or google.com
          * and some extra params to identify is
          **/
          extractDomain: function(url) {
            if (url===undefined) return null;
            var domain;
            //find & remove protocol (http, ftp, etc.) and get domain
            if (url.indexOf("://") > -1) {
              domain = url.split('/')[2];
            }
            else {
              domain = url.split('/')[0];
            }

            //find & remove port number
            domain = domain.split(':')[0];

            // custom, add ds= param to distinguish googles etc diff searchs
            var mr = url.match('ds=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&ds='+mr[1];

            var mr = url.match('gl=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&gl='+mr[1];

            var mr = url.match('hl=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&hl='+mr[1];

            // lang code for yandex
            var mr = url.match('uil=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&uil='+mr[1];

            return domain;
          },

          /** mark a search as done in the queue **/
          markAsDone: function(search){
            // mark as done in queue
            if (this.keywordsToQuery[this.keywordsToQueryIndex]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex]+='   ';
            else if (this.keywordsToQuery[this.keywordsToQueryIndex-1]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex-1]+='   ';
            else
              console.warn('Cant find ',search,'in keywordsToQuery');
          },

          /** mark a search as done in the queue **/
          markAsNone: function(search){
            // mark as done in queue
            if (this.keywordsToQuery[this.keywordsToQueryIndex]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex]+='   ';
            else if (this.keywordsToQuery[this.keywordsToQueryIndex-1]===search)
              this.keywordsToQuery[this.keywordsToQueryIndex-1]+='   ';
            else
              console.warn('Cant find ',search,'in keywordsToQuery');
          },

          /** Get search suggestions for a keyword **/
          QueryKeyword: function(search) {
            var self = this;
            this.queryLock = true;

            // search not done, lets do the query
            url = self.getUrl()+search;
            var promise = $.ajax({
              url: url,
                // jsonp: "jsonp",
                dataType: "jsonp",
                success: function (res, statusText, jqXHR) {
                  var retList = self.parseServiceResponse(res);
                  if (retList && retList.length){
                        // self.storeResults(retList, search, this.url);
                        self.displayResults(retList, search, undefined, this.url);
                        self.addResultsToQueue(retList);
                        if (self.options.keepRunning) self.permuteResultsToQueue(retList);
                        self.markAsDone(search);
                      } else {
                        // console.debug('No suggestions for query: "',search,'"');
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

          /** Clean input, may not all be needed **/
          CleanVal: function(input) {
            // We want to clean search terms but it's not possible to do this perfectly
            // as differen't search engines strip differen't amounts from the term
            // so we will keep as much details as possible

            // Search engines are sensitive to whitespace so we do not want to trim
            // Some return html or escaped html, so we do want to convert to text

            // removed escaped html and html tags
            // e.g. '<b>A&amp;M</b>' => 'A&M'
            input=$('<div />').html(input).text();

            // I don't know of any search engines sentitive or case so make all lowercase
            input = input.toLowerCase();

            // this removes navigation suggestions, perhaps we need to move this to result parser
            if (input.length > 4 && input.substring(0, 4) == "http") input = "";

            return input;
          },

          /** TODO get this working **/
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

          /** display the queue, and update description of it **/
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


          /** overrides default with dom options with arguments options **/
          getOptions: function(argOptions){
            var defaultOptions={
              deferTableUpdatesAtRows: 5000,
              keepRunning: false,
              maxQueueDisplay: 5000,
              country: "",
              filterNegative: "",
              filterPositive: "",
              lang: "",
              prefixes: [],
              rateLimit: 750,
              service: "google",
              suffixes: []
            }; // for now defaults are set in html
            if (argOptions===undefined) argOptions={};
            return _.defaults(argOptions,this.getDomOptions(),defaultOptions);
          },

          /** read settings from webpage **/
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

              /** load settings from localStorage **/
              loadSettings: function(){
            // Tabe settings are auto handles by datatables
            if (localStorage.service) $("#service").val( localStorage.service );
            if (localStorage.country) $('#country').val(localStorage.country);
            if (localStorage.lang) $('#lang').val(localStorage.lang);
            if (localStorage.filterNegative) $("#filter-negative").val( localStorage.filterNegative );
            if (localStorage.filterPositive) $("#filter-positive").val( localStorage.filterPositive );
            if (localStorage.rateLimit) $("#rate-limit").val( localStorage.rateLimit );
            if (localStorage.input) $("#input").val( localStorage.input );
            if (localStorage.prefixes) $("#prefixes").val( localStorage.prefixes );
            if (localStorage.suffixes) $("#suffixes").val( localStorage.suffixes );
            if (localStorage.keepRunning) $('#keep-running').prop('checked',localStorage.keepRunning=="true");

          },
          /** save settings to localStorage. **/
          saveSettings: function(){
            localStorage.service = $('#service').val();
            localStorage.country = $('#country').val();
            localStorage.lang = $('#lang').val();
            localStorage.filterNegative = $('#filter-negative').val();
            localStorage.filterPositive = $('#filter-positive').val();
            localStorage.rateLimit = $('#rate-limit').val();
            localStorage.input = $('#input').val();
            localStorage.prefixes = $('#prefixes').val();
            localStorage.suffixes = $('#suffixes').val();
            localStorage.keepRunning = $('#keep-running').prop('checked');
          },

          /** reset inputs and results, but not settings **/
          reset: function(){
            this.table.clear();
            this.table.draw();
            $('#input').val('');
            this.saveSettings();
          },

          init: function(){
            // this.setUpDb();

            // add this.servicess to search engine settings
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
              "<'row'<'col-sm-5'B><'col-sm-7'<'pull-right'p>>>" +
              "<'row'<'col-sm-8'i><'col-sm-4'<'pull-right'f>>>" +
              "<'row'<'col-sm-12'tr>>",
              buttons: [
              'colvis',
              'pageLength',
              {
               extend: 'collection',
               text: 'Export',
               buttons: [
               'csvHtml5',
               {
                 extend: 'csvHtml5',
                 fieldBoundary: "",
                 text: 'Copy keywords',
                                //  'customize': function(data,options){
                                //      console.log(data,options);return data.split('\n').join(',');
                                //  },
                                header: false,
                                exportOptions: {
                                 stripNewlines: true,
                                 stripHtml: true,
                                 decodeEntities: true,
                                 columns: 1,
                                    //  format:{
                                    //      body: function(html,i){
                                    //          console.log(html);return html
                                    //      }
                                    //  }
                                  }
                                },
                                {
                                 extend: 'csvHtml5',
                                 fieldBoundary: "",
                                 text: 'Copy visible columns',
                                 header: false,
                                 exportOptions: {
                                   columns: ':visible',
                                   stripNewlines: true,
                                   stripHtml: true,
                                   decodeEntities: true,
                                 }
                               },
                               ]
                             },

                             ],
                             "columnDefs": [
                             {
                              "title": "id",
                              "data": "id",
                              "targets": 0,
                              "visible": false,
                            }, {
                              "name": "keyword",
                              "title": "Related Keyword",
                              "data": "keyword",
                              "responsivePriority": 1,
                              "targets": 1,
                            }, {
                              "title": "Length",
                              "data": "length",
                              "targets": 2,
                              "visible": false,
                              "type": "num"
                            }, {
                              "title": "Root Keyword",
                              "data": "search",
                              "responsivePriority": 3,
                              "targets": 3,
                              "visible": true,
                            },  {
                              "title": "Words",
                              "data": "words",
                              "targets": 4,
                              "visible": false,
                              "type": "num"
                            },
                            ],
                            order: [[ 0, 'desc' ]],
                // colReorder: {},
                stateSave: true,
                "bDeferRender": true,
                // fixedHeader: true,
                //  responsive: {
                //     details: {
                //         type: 'column',
                //         target: 'tr'
                //     },
                // },
                // scrollY:        500,
                // deferRender:    true,
                // scroller:       true
              });

            // get user ip
            $.getJSON('https://api.ipify.org?format=json', function (data) {
              this.myIp = data.ip;
            });

          }
        };
      }();

    </script>

    <script type="text/javascript">
      var close = document.getElementsByClassName("delete");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].addEventListener("click", function() {
          this.parentElement.style.display = 'none';
        });
      }
    </script>

    <!-- Lets see if anyone ever uses this  -->
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
