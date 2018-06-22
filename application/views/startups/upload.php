<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="<?php echo base_url(); ?>images/login/images/startupzw.png" alt="IMG">
			</div>

			<?php echo form_open('startups/upload')?>
			<div class=" form-grop login100-form validate-form">
					<span class="login100-form-title">
						Startup Register
					</span>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="name" placeholder="Neon">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa " aria-hidden="true"></i>
						</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="loc" placeholder="Location">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa " aria-hidden="true"></i>
						</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Brief is required">
					<input class="input100" type="text" name="description" placeholder="Brief Description">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa " aria-hidden="true"></i>
						</span>
				</div>

				<div class="container-login100-form-btn">
					<button type="submit" class="login100-form-btn">
						Register
					</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>
