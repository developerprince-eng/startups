    <!-- Header -->
    <header class="text-center" id="home">
      <div class="intro-text overlay-head">
        <h1>Home of start-ups in Zimbabwe</h1>
        <p style="margin-top: 3%;">Discover Zimbabwe's most innovative + inventive products, projects & start-ups</p>
        <?php if(!$this->session->userdata('logged_in')): ?>
        <a href="<?php echo base_url(); ?>user" style="border-radius: 25px;border-color: #337ab7;margin: auto;background: #FFFFFF;display: -webkit-box; display: -webkit-flex;  display: -moz-box; display: -ms-flexbox; display: flex;justify-content: center; align-items: center; width: 10%; -webkit-transition: all 0.4s; -o-transition: all 0.4s;  -moz-transition: all 0.4s; transition: all 0.4s;" >Login or Register</a>
        <?php endif ?>
      </div>
    </header>

    <!-- About Section -->
    <div id="about-section">
      <div class="container">
        <div class="section-title text-center center">
          <h2>About Platform</h2>
          <hr>
          <div class="clearfix"></div>
          <p></p>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="well well-lg custom-jumbo">
              <h2>Start-ups</h2>
              <p style="text-align: justify; line-height: 1.5em;">
                For the innovation hubs, accelerators, founders, learning institutions, private and public companies and investors,
                this platform will help you to understand the state of the innovation ecosystem in Zimbabwe and discover the
                innovators in different cities and across different industries. Join us and help grow the innovation ecosystem in Zimbabwe
              </p>
              <a href="#" style="border-radius: 25px;border-color: #337ab7;margin: auto;background: #FFFFFF;display: -webkit-box; display: -webkit-flex;  display: -moz-box; display: -ms-flexbox; display: flex;justify-content: center; align-items: center; width: 200px; -webkit-transition: all 0.4s; -o-transition: all 0.4s;  -moz-transition: all 0.4s; transition: all 0.4s;">List your Startup</a>
            </div>
          </div>
          <div class="col-md-1 col-md-offset-1">
            <div class="verticalLine"></div>
          </div>
          <div class="col-md-5">
            <div class="well well-lg custom-jumbo">
              <h2>Ecosystem Builders</h2>
              <p style="text-align: justify; line-height: 1.5em;">
                Are you working on the next big thing? Join Zimbabwe’s innovation registry and promote your startup.
                Get access to resources curated by our partner organisations to help you grow your innovation and take
                it to the next level and find the right partner, mentor or adviser.
              </p>
              <br>
              <a href="#" style="border-radius: 25px;border-color: #337ab7;margin: 1%;background: #FFFFFF;display: -webkit-box; display: -webkit-flex;  display: -moz-box; display: -ms-flexbox; display: flex;justify-content: center; align-items: center; width: 200px; -webkit-transition: all 0.4s; -o-transition: all 0.4s;  -moz-transition: all 0.4s; transition: all 0.4s;">Startup Registry</a>
    
              <a href="#" style="border-radius: 25px;border-color: #337ab7;margin: auto;background: #FFFFFF;display: -webkit-box; display: -webkit-flex;  display: -moz-box; display: -ms-flexbox; display: flex;justify-content: center; align-items: center; width: 200px; -webkit-transition: all 0.4s; -o-transition: all 0.4s;  -moz-transition: all 0.4s; transition: all 0.4s; float: right;">Become a Partner</a>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Achievements Section -->
    <div id="achievements" class="section dark-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="achievement-box"> <span class="count">1</span>
              <h4>Hubs</h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="achievement-box"> <span class="count">18</span>
              <h4>Startups</h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="achievement-box"> <span class="count">150</span>
              <h4>Members</h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="achievement-box"> <span class="count">4</span>
              <h4>Partners</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <!-- Team Section -->
    <div id="team-section" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Meet the Contributors</h2>
          <hr>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 team">
            <div class="thumbnail"> 
              <img src="<?php echo base_url('assets/images/contributors/techvillage.png'); ?>" alt="..." class="img-circle team-img">
              <div class="caption">
                <a href="https://techvillage.org.zw">
                    <h3>TechVillage</h3>
                </a> 
                <p>Hub</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 team">
            <div class="thumbnail"> 
              <img src="<?php echo base_url('assets/images/contributors/velociti.png'); ?>" alt="..." class="img-circle team-img">
              <div class="caption">
                <a href="https://velociti.co.zw">
                    <h3>Velociti</h3>
                </a>
                <p>Accelerator</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 team">
            <div class="thumbnail"> 
              <img src="<?php echo base_url('assets/images/contributors/shinga-1.png'); ?>" alt="..." class="img-circle team-img">
              <div class="caption">
                <a href="https://shinga.co.zw">
                    <h3>Shinga</h3>
                </a>
                <p>Hub</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Partners Section -->
    <div id="team-section-1" class="text-center">
        <div class="container">
          <div class="section-title center">
            <h2>Partner Organisations</h2>
            <hr>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 team">
              <div class="thumbnail"> <img src="<?php echo base_url('assets/images/partners/hubvisa.jpg'); ?>" alt="..." class="img-circle team-img">
                <div class="caption">
                  <h3>HubVisa</h3>
                </div>
              </div>
              <a href="http://demo.hubvisa.co.zw" class="btn btn-default btn-lg page-scroll" style="margin-right: 1%;">Join HubVisa</a>
            </div>
          </div>
          <div class="row">
            <div class= "col-md-6 col-md-offset-3">

            </div>
          </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact-section" class="text-center">
        <div class="container">
          <div class="section-title center">
            <h2>Contact Us</h2>
            <hr>
          </div>
          <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4"> <i class="fa fa-map-marker"></i>
              <p>The Techvillage Cnr Jason Ave & 9th Ave,<br>
                Bulawayo, Bambanani Centre 2nd Floor</p>
            </div>
            <div class="col-md-4"> <i class="fa fa-envelope-o"></i>
              <p>registry@startup.co.zw</p>
            </div>
            <div class="col-md-4"> <i class="fa fa-phone"></i>
              <p> +263731222222</p>
            </div>
            <hr>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-8 col-md-offset-2">
              <div class="section-title center">
                  <h2>Our Location</h2>
                  <hr>
                </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.4631188808707!2d28.580484314838255!3d-20.15643395059545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1eb554392a12f495%3A0x85b771f56aade972!2sThe+TechVillage!5e0!3m2!1sen!2szw!4v1523497930675" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>

    <!-- Social Section -->
    <div id="social-section">
      <div class="container">
        <div class="social">
          <ul>
            <li><a href="https://www.facebook.com/pitchzw/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/pitchzw"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>