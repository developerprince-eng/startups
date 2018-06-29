<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?php echo base_url(); ?>images/login/images/startupzw.png" alt="IMG">
            </div>
			<?php echo validation_errors(); ?>

			<?php echo form_open('user/login');?>
            <div class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title">
                        Member Login
                    </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="user" placeholder="JohnDlamini64">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        <a href="<?php echo base_url(); ?>user/login">Login</a>
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
                            Forgot
						</span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="<?php echo base_url(); ?>user/register">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
			<?php echo form_close(); ?>
        </div>
    </div>
</div>