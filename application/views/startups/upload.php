<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login200">	
				<?php echo form_open_multipart('Startups/upload');?>
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
								<textarea id="editor1" class="input200" type="text" name="description" placeholder="I am a web Servive Startup">
								</textarea>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
							</textarea>
						</div>
						<div class="flex-container" style="display: flex; text-align: center;">
							<div style="width: 20%; margin: 0 auto;">
								<label>Upload Logo</label><br />
								<input type="file" name="userfile" />
							</div>
						</div>
						<div class="container-login100-form-btn">
							<input type="submit" name="submit" value="upload"  class="btn btn-primary login300-form-btn"/>
						</div>			
					</div>
			</div>
		</div>
	</div>
</div>
