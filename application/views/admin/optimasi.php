
<script>
  var editor = CKEDITOR.replace( 'haha', {
    language: 'en',
    extraPlugins: 'notification',
    height:300
  });

  editor.on( 'required', function( evt ) {
    editor.showNotification( 'This field is required.', 'warning' );
    evt.cancel();
  } );
  
  


</script>

<style type="text/css">
  .gauge {
    width: 100%;
    max-width: 250px;
    font-family: "Roboto", sans-serif;
    font-size: 32px;
    color: #004033;
  }

  .gauge__body {
    width: 100%;
    height: 0;
    padding-bottom: 50%;
    background: #b4c0be;
    position: relative;
    border-top-left-radius: 100% 200%;
    border-top-right-radius: 100% 200%;
    overflow: hidden;
  }

  .gauge__fill {
    position: absolute;
    top: 100%;
    left: 0;
    width: inherit;
    height: 100%;
    background: #188ae2;
    transform-origin: center top;
    transform: rotate(0.25turn);
    transition: transform 0.2s ease-out;
  }

  .gauge__cover {
    width: 75%;
    height: 150%;
    background: #ffffff;
    border-radius: 50%;
    position: absolute;
    top: 25%;
    left: 50%;
    transform: translateX(-50%);

    /* Text */
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 25%;
    box-sizing: border-box;
  }

</style>
<div class="container">

  
  <div class="row">

    <div class="col-sm-6">
      <div id="numofkeywords"></div>
      <div class="form-group" style="padding-left:5%!important;margin-top: 20px;">
       <textarea style="width: 100%;"></textarea>
       <textarea class="form-control" id="haha" value="" name="haha" required></textarea>
     </div>

     <a class="btn btn-info primary btn-md" id="startjob" type="button" value="Shit Keywords!" style="color: white;margin-left: 5%;">Generate Keyword</a>
   </div>
   <div class="col-sm-6">
     <div class="card" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);margin-top: 20px;border-left: 2px solid #188ae2;"  >
      <div class="gauge" style="margin-left: 25%;padding-top: 20px;" >
        <div class="gauge__body">
          <div class="gauge__fill"></div>
          <div class="gauge__cover"></div>

        </div>
        <h3 style="text-align: center;color: #00415a">Tachometer</h3>
        
      </div>
      <h4 style="text-align: left;color:black;font-weight: 700;margin-left: 3%; " >SEO</h4>
      <h5 style="text-align: left;color:black;margin-left: 3%;font-weight: 700;">Target Keywords</h5>
      <p style="text-align: left;color: #00415a;margin-left: 3%;">Core of your text and all recomendations </p>
      <ul>
        <li style="list-style: none;display: inline;"> <span style="background-color:#00415a;color: white; padding: 6px;border-radius: 12px; " >bayar pajak motor<i class="fas fa-times-circle delete" style="margin-left: 1%;"  ></i></span></li>
      </ul>
      
      <hr style="border:0.5px solid #188ae2;">
      <h5 style="text-align: left;color:black;margin-left: 3%;font-weight: 700;">Recomemended keywords</h5>
      <p style="text-align: left;color: #00415a;margin-left: 3%;">Enrich yout text Core of your text and all recomendations  </p>

      <ul>
        <li style="display: inline;"><span style="list-style: none;background-color:#00415a;color: white; padding: 6px;border-radius: 12px;" >bayar pajak motor<i class="fas fa-times-circle delete" style="margin-left: 1%;"></i></span></li>
        
        <li style="list-style: none;display: inline;"><span style="margin-left: 3%;background-color:#00415a;color: white; padding: 6px;border-radius: 12px; " >bayar pajak <i class="fas fa-times-circle delete" style="margin-left: 1%;" ></i></span></li>
        <li style="list-style: none;display: inline;"> <span style="margin-left: 3%;background-color:#00415a;color: white; padding: 6px;border-radius: 12px; " >bayar pajak motor<i class="fas fa-times-circle delete" style="margin-left: 1%;" ></i></span><br></li>
        <li style="list-style: none;display: inline;"><span style="background-color:#00415a;color: white; padding: 6px;border-radius: 12px;" >bayar pajak r<i class="fas fa-times-circle delete" style="margin-left: 1%;margin-top: 20px!important;margin-bottom: 20px;"  ></i></span></li>
        <ul>
          
          <script type="text/javascript">
            $('.delete').on('click', function(){
              $(this).parent().remove();
            });
            
            
          </script>
        </div>

      </div>
      <br>
    </div>
  </div>
</div>
<script type="text/javascript">
  const gaugeElement = document.querySelector(".gauge");

  function setGaugeValue(gauge, value) {
    if (value < 0 || value > 1) {
      return;
    }

    gauge.querySelector(".gauge__fill").style.transform = `rotate(${
      value / 2
    }turn)`;
    gauge.querySelector(".gauge__cover").textContent = `${Math.round(
      value * 100
      )}%`;
  }

  setGaugeValue(gaugeElement, 0.2);
  
</script>
