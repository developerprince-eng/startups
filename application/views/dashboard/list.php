      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Startups</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Startups</h1>
          </header>
          <div class="row">
           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm">
                      <thead>
                        <?php if($this->session->userdata('role')  === 'user'): ?>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Brief</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($startups as $startup): ?>
                        <tr>
                          <th scope="row"><?php echo $startup['id']?></th>
                          <td><?php echo $startup['name']?></td>
                          <td><?php echo $startup['brief']?></td>
                          <td><?php echo $startup['description']?></td>
                        </tr>
                        <?php endforeach; ?> 
                        <?php endif; ?>
                        <?php if($this->session->userdata('role') === 'admin'): ?>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Brief</th>
                          <th>Description</th>
                          <th>Approval</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($startups as $startup): ?>
                        <tr>
                          <th scope="row"><?php echo $startup['id']?></th>
                          <td><?php echo $startup['name']?></td>
                          <td><?php echo $startup['brief']?></td>
                          <td><?php echo $startup['description']?></td>
                          <?php if( $startup['approve'] == 0): ?>
                          <td>
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                          </td>
                          <?php endif;?>
                          <?php if( $startup['approve'] == 1): ?>
                          <td>
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                          </td>
                          <?php endif;?>
                        </tr>
                        <?php endforeach; ?> 
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="row pagination-links">
                    <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
