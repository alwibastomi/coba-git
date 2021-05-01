
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
      var waw = $(this).val();
      $('input[id="terlaluindah"]').val(waw);
      if (event.keyCode === 13) {
       event.preventDefault();
       utun.push(waw)
       hadeuh += '<span style="background-color:red;padding:2px 4px;color: white;border-radius: 12px; font-size: 13px;" id="kwt'+kwt+'">'+waw+' 0/2 <i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i></span> ';
       document.getElementById('skut').innerHTML = hadeuh;

       var close = document.getElementsByClassName('del');

       for (i = 0; i < close.length; i++) {
        close[i].addEventListener("click", function() {
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
    $('#kwt'+q).html(utun[q]+' '+ juml+'/2 <i class="fas fa-times-circle del mt-2" style="margin-left: 1%;"></i>');
    if (juml > 1) {
      $('#kwt'+q).css("background-color", "green");
    }else {
      $('#kwt'+q).css("background-color", "red");
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
            if (localStorage.lang) $('#lang').val(localStorage.lang);
            if (localStorage.filterNegative) $("#filter-negative").val( localStorage.filterNegative );
            if (localStorage.filterPositive) $("#filter-positive").val( localStorage.filterPositive );
            if (localStorage.rateLimit) $("#rate-limit").val( localStorage.rateLimit );

          },
          saveSettings: function(){
            localStorage.service = $('#service').val();
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
                                header: false,
                                exportOptions: {
                                 stripNewlines: true,
                                 stripHtml: true,
                                 decodeEntities: true,
                                 columns: 1,
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
                              "title": "Analisa Intent",
                              "data": "keyword",
                              "responsivePriority": 1,
                              "targets": 1,
                            }, {
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
