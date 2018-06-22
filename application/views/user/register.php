
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="<?php echo base_url(); ?>images/login/images/startupzw.png" alt="IMG">
			</div>
            <?php echo validation_errors(); ?>

            <?php echo form_open('user/register');?>
			<div class="login100-form validate-form" >
					<span class="login100-form-title">
						Member Register
					</span>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="username" placeholder="Username">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" type="password" name="password2" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Register
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


			</div>
            <?php echo form_close(); ?>
		</div>
	</div>
</div>
