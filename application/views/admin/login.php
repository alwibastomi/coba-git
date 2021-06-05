

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

  <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
    <div class="signin-logo tx-center"><img src="<?= site_url('assets/images/Logo-02.png') ?>" alt="" width="150"><span class="tx-normal"></span></div>
    <div class="tx-center mt-2 mb-3">Form Login</div>
    <form class="form-horizontal m-t-20 validate-form" method="post">

        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" name="email" type="email" required="" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" name="password" type="password" required="" placeholder="Password">
            </div>
        </div>

        <div class="form-group text-center m-t-30">
            <div class="form-group" >

                <label for="captcha"><?php echo $captcha['image']; ?></label>
                <br>
                <input class="form-control form-control-user" type="text" autocomplete="off" name="userCaptcha" placeholder="Captcha" value="<?php if(!empty($userCaptcha)){ echo $userCaptcha;} ?>" />
                <span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> </div>
                <div class="col-xs-12">
                    <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" name="login" type="submit">Log In</button>
                </div>
            </div>

            <div class="form-group m-t-30 m-b-0">
                <div class="col-sm-12">
                    <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
            </div>
        </form>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->


