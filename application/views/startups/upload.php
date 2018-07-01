<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login200">
				<?php echo validation_errors(); ?>

				<?php echo form_open(); ?>
					<div class="login200-form">
						<span class="login100-form-title"><b>Register Startup</b><br>
						</span>

						<div class="wrap-input100 validate-input" >
							<label>Name</label>
							<input class="input100" type="text" name="name" placeholder="Neon">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa " aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" >
							<label>Brief</label>
							<input class="input100" type="text" name="brief" placeholder="Brief">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa " aria-hidden="true"></i>
							</span>
						</div>

						<div class="form-group">			
							<div class="wrap-input100 validate-input" >
								<label>Description</label>
								<textarea class="input200" type="text" name="description" placeholder="I am a web Servive Startup">
								</textarea>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
							</textarea>
						</div>
						
						<div class="container-login100-form-btn">
							<button  type="other" class="login200-form-btn" >UPLOAD LOGO</button>
							<button  type="other" class="login200-form-btn">UPLOAD COVER</button>
							<button  type="submit" class="login300-form-btn" >REGISTER</button>	
						</div>					
					</div>
			</div>
		</div>
	</div>
</div>