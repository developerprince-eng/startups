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
								<textarea id="editor1" class="input200" type="text" name="description" placeholder="I am a web Servive Startup">
								</textarea>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
							</textarea>
						</div>
						
						<div class="container-login100-form-btn">
							<button  type="other" data-modal="#modal2" class="login200-form-btn modal__trigger" >UPLOAD COVER</button>
							<button  type="other" data-modal="#modal" class="login200-form-btn modal__trigger">UPLOAD LOGO</button>
							<button  type="submit" class="login300-form-btn" >REGISTER</button>	
						</div>	

						<!-- modal -->
						<div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
							<div class="modal__dialog">
								<div class="modal__content">
									<h1>Upload Logo</h1>
									<?php echo form_open_multipart('startups/upload_cover');?>

										<input type="file" name="userfile" size="40" />

										<br /><br />

										<input type="submit" value="upload" />
									</form>
									
									<!-- modal close button -->
									<a href="" class="modal__close demo-close">
										<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
									</a>
									
								</div>
							</div>
						</div>

						<div id="modal2" class="modal modal--align-top modal__bg" role="dialog" aria-hidden="true">
							<div class="modal__dialog">
								<div class="modal__content">
									<h1>Upload Cover</h1>
									<?php echo form_open_multipart('startups/upload_logo');?>

										<input type="file" name="userfile" size="20" />

										<br /><br />

										<input type="submit" value="upload" />
									</form>
									<!-- modal close button -->
									<a href="" class="modal__close demo-close">
										<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
									</a>
									
								</div>
							</div>
						</div>				
					</div>
			</div>
		</div>
	</div>
</div>