<style>
  .scrollable-menu {
    padding: 10px;
    height: 735px;
    max-height: 400px;
    overflow-x: scroll;
    box-sizing: content-box;
    white-space: nowrap;
    text-overflow: ellipsis;
  }

  .lala{
    list-style-type: '';
    padding-left: 5px;
    font-size: 14px;
  }

  /* width */
  ::-webkit-scrollbar{
    width: 10px;
  }

  /* Track */
  ::-webkit-scrollbar-track{
    background: #f1f1f1; 
  }

  /* Handle */
  ::-webkit-scrollbar-thumb{
    background: #888; 
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover{
    background: #555; 
  }

  #headingsMapWrapper .results li {
    position: relative;
    font-weight: normal;
    font-size: 1em;
    margin: 0;
    padding: 0 0 0 18px;
    background: url(chrome-extension://flbjommegcjonpdmenkdiocclhjacmbi/html/icons/tree_b.gif) 3px top no-repeat;
    line-height: 1.4;
  }

  #headingsMapWrapper .results li {
    position: relative;
    font-weight: normal;
    font-size: 1em;
    margin: 0;
    padding: 0 0 0 18px;
    background: url(chrome-extension://flbjommegcjonpdmenkdiocclhjacmbi/html/icons/tree_b.gif) 3px top no-repeat;
    line-height: 1.4;
  }

  #headingsMapWrapper .results ul, #headingsMapWrapper .results ol {
    font-weight: normal;
    font-size: 1em;
    margin: 0;
    width: 96%;
    list-style: none;
    background: url(chrome-extension://flbjommegcjonpdmenkdiocclhjacmbi/html/icons/tree_d.gif) 3px top repeat-y;
  }

  #headingsMapWrapper .results ul, #headingsMapWrapper .results ol {
    margin: 0;
    padding: 2px 15px;
    width: 100%;
  }

  #headingsMapWrapper .results ul ul, #headingsMapWrapper .results ol ol {
    margin: 0;
    padding: 2px 15px;
    width: 100%;
  }

  #headingsMapWrapper .results ul ul ul, #headingsMapWrapper .results ol ol ol {
    margin: 0;
    padding: 2px 15px;
    width: 100%;
  }

  #headingsMapWrapper .results li:nth-last-child(1) {
    /*background: url(chrome-extension://flbjommegcjonpdmenkdiocclhjacmbi/html/icons/tree_c.gif) 3px top no-repeat;*/
  }

  .hehey{
    font-weight: 600; font-size: 15px;
  }
</style>

<div class="br-mainpanel">
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <center><button class="btn btn-success" id="start" style="cursor: pointer; padding: 12px 80px;"> <b>SCRAP HEADING</b></button></center>
  </div>

  <div class="br-pagebody">
    <div class="br-section-wrapper" style="padding-left: 20px; padding-right: 20px;">

      <div class="row">

        <div class="col-sm-4">
          <input type="text" id="url1" name="" class="form-control" placeholder="url 1">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section id="scrap1">

            </section>
          </div>
        </div>

        <div class="col-sm-4">
          <input type="text" name="" class="form-control" placeholder="url 2">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section>
              <p class="text-dark hehey">title : </p>
              <ul class="results lala">
                <li>1</li>
                <ul class="results">
                  <li>1</li>
                  <li>2</li>
                  <ul class="results">
                    <li>1</li>
                    <li>2</li>
                    <ul class="results">
                      <li>1</li>
                      <li>2</li>
                      <ul class="results">
                        <li>1</li>
                        <ul class="results">

                          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</li>
                          <li>2</li>
                          <li>3</li>
                        </ul>
                        <li>2</li>
                        <li>3</li>
                      </ul>
                      <li>3</li>
                    </ul>
                    <li>3</li>
                  </ul>
                  <li>3</li>
                </ul>
                <li>1</li>
              </ul>
            </section>
          </div>
        </div>

        <div class="col-sm-4">
          <input type="text" name="" class="form-control" placeholder="url 3">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section>
              <p class="text-dark hehey">title : </p>
              <ul class="results lala">
                <li>1</li>
                <ul class="results">
                  <li>1</li>
                  <li>2</li>
                  <ul class="results">
                    <li>1</li>
                    <li>2</li>
                    <ul class="results">
                      <li>1</li>
                      <li>2</li>
                      <ul class="results">
                        <li>1</li>
                        <ul class="results">

                          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</li>
                          <li>2</li>
                          <li>3</li>
                        </ul>
                        <li>2</li>
                        <li>3</li>
                      </ul>
                      <li>3</li>
                    </ul>
                    <li>3</li>
                  </ul>
                  <li>3</li>
                </ul>
                <li>1</li>
              </ul>
            </section>
          </div>
        </div>

      </div>
      <!-- row -->

      <div class="row mt-5">

        <div class="col-sm-4">
          <input type="text" name="" class="form-control" placeholder="url 4">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section>
              <p class="text-dark hehey">title : </p>
              <ul class="results lala">
                <li>1</li>
                <ul class="results">
                  <li>1</li>
                  <li>2</li>
                  <ul class="results">
                    <li>1</li>
                    <li>2</li>
                    <ul class="results">
                      <li>1</li>
                      <li>2</li>
                      <ul class="results">
                        <li>1</li>
                        <ul class="results">

                          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</li>
                          <li>2</li>
                          <li>3</li>
                        </ul>
                        <li>2</li>
                        <li>3</li>
                      </ul>
                      <li>3</li>
                    </ul>
                    <li>3</li>
                  </ul>
                  <li>3</li>
                </ul>
                <li>1</li>
              </ul>
            </section>
          </div>
        </div>

        <div class="col-sm-4">
          <input type="text" name="" class="form-control" placeholder="url 5">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section>
              <p class="text-dark hehey">title : </p>
              <ul class="results lala">
                <li>1</li>
                <ul class="results">
                  <li>1</li>
                  <li>2</li>
                  <ul class="results">
                    <li>1</li>
                    <li>2</li>
                    <ul class="results">
                      <li>1</li>
                      <li>2</li>
                      <ul class="results">
                        <li>1</li>
                        <ul class="results">

                          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</li>
                          <li>2</li>
                          <li>3</li>
                        </ul>
                        <li>2</li>
                        <li>3</li>
                      </ul>
                      <li>3</li>
                    </ul>
                    <li>3</li>
                  </ul>
                  <li>3</li>
                </ul>
                <li>1</li>
              </ul>
            </section>
          </div>
        </div>

        <div class="col-sm-4">
          <input type="text" name="" class="form-control" placeholder="url 6">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section>
              <p class="text-dark hehey">title : </p>
              <ul class="results lala">
                <li>1</li>
                <ul class="results">
                  <li>1</li>
                  <li>2</li>
                  <ul class="results">
                    <li>1</li>
                    <li>2</li>
                    <ul class="results">
                      <li>1</li>
                      <li>2</li>
                      <ul class="results">
                        <li>1</li>
                        <ul class="results">

                          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</li>
                          <li>2</li>
                          <li>3</li>
                        </ul>
                        <li>2</li>
                        <li>3</li>
                      </ul>
                      <li>3</li>
                    </ul>
                    <li>3</li>
                  </ul>
                  <li>3</li>
                </ul>
                <li>1</li>
              </ul>
            </section>
          </div>
        </div>

      </div>
      <!-- row -->

    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
  <script type="text/javascript">
    $('#start').click(function(event) {
      event.preventDefault();
      var paseo = $('#url1').val();
      $.ajax({
        type:'POST',
        data:'url1='+paseo,
        url:'<?= site_url('Tool/scrap') ?>',
        dataType:'JSON',
        success: function(hasil){

          if (paseo != "") {
            var x = 0;
            var y = 0;
            var sc1 = '<p class="text-dark"><b>Title : '+hasil.title+'</b></p>'; 

            for (var i = 0, u = hasil.heading.length; i < u; ++i) {
              if (hasil.h1.indexOf(hasil.heading[i]) > -1) {
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
              }else if (hasil.h3.indexOf(hasil.heading[i]) > -1){
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
              }else if (hasil.h4.indexOf(hasil.heading[i]) > -1){
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
              }else {
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
            $('#scrap1').html(sc1)
          }
          console.log(hasil)
        }
      });

});
</script>