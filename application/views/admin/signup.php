<?php
error_reporting(0);
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    window.location = "<?= site_url('Login') ?>";
  </script>
<?php } ?>
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

  <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
    <div class="signin-logo tx-center"><img src="<?= site_url('assets/images/Logo-02.png') ?>" alt="" width="150"><span class="tx-normal"></span></div>
    <div class="tx-center mg-b-40">Form Register</div>
    <form class="form-horizontal m-t-20 validate-form" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
      </div><!-- form-group -->
      <div class="form-group">
        <input type="text" id="username" class="form-control" name="username" placeholder="Username">
        <b><div id="huhu" style="font-size: 10px; margin-left: 2px;"></div></b>
      </div><!-- form-group -->
      <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div><!-- form-group -->
      <button type="submit" name="submit" id="submit" class="btn btn-info btn-block" disabled="">Sign Up</button>

      <div class="mg-t-40 tx-center">Sudah mempunyai akun? <a href="<?= site_url('Login') ?>" class="tx-info">Login</a></div>
    </form>
  </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByName("email");
    for (var i = 0; i < elements.length; i++) {
      elements[i].oninvalid = function(e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
          e.target.setCustomValidity("isikan dengan format e-mail");
        }
      };
      elements[i].oninput = function(e) {
        e.target.setCustomValidity("");
      };
    }
  })
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#username').keyup(function(){
      var username = $('#username').val();

      $.ajax({
        url: '<?= site_url('Register/cek') ?>',
        type: 'post',
        data: {
          'username' : username,
        },
        success: function(response){
          $lala = response.substring(1,response.length - 1);
          $('#huhu').css("#17a2b8", "green");
          $('#huhu').text($lala);
          if ($lala == 'Username sudah ada') {
            disableButton = true;
            $('#submit').attr('disabled', disableButton);
          }
        }
      });
    });

    $("#nama_lengkap").keyup(function(event) {
      validateInputs();
    });

    $("#username").keyup(function(event) {
      validateInputs();
    });

    $("#password").keyup(function(event) {
      validateInputs();
    });

    $("#huhu").keyup(function(event) {
      validateInputs();
    });

    function validateInputs(){
      var disableButton = false;

      var val1 = $("#nama_lengkap").val();
      var val2 = $("#username").val();
      var val4 = $("#password").val();
      if(val1.length == 0 || val2.length == 0 || val4.length == 0 || val2.length < 7)
        disableButton = true;
      $('#submit').attr('disabled', disableButton);
    }

  });
</script>
