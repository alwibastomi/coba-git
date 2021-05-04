<style>
  .scrollable-menu {
    padding: 10px;
    height: 735px;
    max-height: 50px;
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
  }

  .hehey{
    font-weight: 600; font-size: 15px;
  }
</style>

<div class="br-mainpanel">
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Heading Spy</h4>
    <p class="mg-b-0">Tool Free</p>
    <center><button class="btn btn-info" id="start" style="cursor: pointer; padding: 12px 80px;"> <b>SCRAP HEADING</b></button></center>
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
          <input type="text" id="url2" name="" class="form-control" placeholder="url 2">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section id="scrap2">

            </section>
          </div>
        </div>

        <div class="col-sm-4">
          <input type="text" id="url3" name="" class="form-control" placeholder="url 3">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section id="scrap3">

            </section>
          </div>
        </div>

      </div>

      <div class="row mt-5">

        <div class="col-sm-4">
          <input type="text" id="url4" name="" class="form-control" placeholder="url 4">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section id="scrap4">

            </section>
          </div>
        </div>

        <div class="col-sm-4">
          <input type="text" id="url5" name="" class="form-control" placeholder="url 5">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section id="scrap5">

            </section>
          </div>
        </div>

        <div class="col-sm-4">
          <input type="text" id="url6" name="" class="form-control" placeholder="url 6">
          <div id="headingsMapWrapper" class="bd mt-2 pl-2 bg-white text-primary scrollable-menu" style="font-size: 13px">
            <section id="scrap6">

            </section>
          </div>
        </div>

      </div>

    </div>
  </div>
  <script type="text/javascript">
    var ur = '<?= site_url('Tool/scrap') ?>'
</script>

  <script type="text/javascript" src="<?= site_url('assets/img.js') ?>"></script>
