      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Global News</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container" style="margin-top: 40px;">
            <div class="row">
			<?php foreach ($articles as $article): ?>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 18rem; border-radius: 10px;">
                        <img class="card-img-top" src="<?php echo $article['urlToImage'] ?>" alt="Card image cap" style="border-radius: 10px 10px 0px 0px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $article['title'] ?></h5>
                            <p class="card-text" style="font-size: 0.5rem;"><?php echo $article['description'] ?></p>
                            <a href="<?php echo $article['url'] ?>" class="btn btn-primary" style="border-radius: 5px; background: #9053c7;
    background: -webkit-linear-gradient(-135deg, #0B4F6C, #01BAEF);
    background: -o-linear-gradient(-135deg, #0B4F6C, #01BAEF);
    background: -moz-linear-gradient(-135deg, #0B4F6C, #01BAEF); margin-left: 30%; ">Read More</a>
                        </div>
                    </div>
                </div>
			<?php endforeach; ?>
            </div>
        </div>
      </section>
