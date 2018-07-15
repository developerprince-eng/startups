<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login200">
			<!--echo validation_errors(); 
			 echo $this->session->flashdata('msg');-->
				
				<?php echo form_open_multipart('Uploadcontroller/upload');?>
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
						<div class="flex-container" style="display: flex;">
							<div style="width: 50%">
								<label>Upload Logo</label><br />
								<input type="file" name="userfile" />
							</div>
							<div style="width: 50%;">
							<label>Upload Cover</label><br />
							<input type="file" name="userfile" />
							</div>
						</div>
						<div class="container-login100-form-btn">
							<input type="submit" name="submit" value="upload"  class="btn btn-primary login300-form-btn" />
							<!--<button  type="submit" class="btn btn-primary login300-form-btn" >REGISTER</button>	-->
						</div>			
					</div>
			</div>
		</div>
	</div>
</div>