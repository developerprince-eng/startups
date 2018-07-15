<div id="wrapper">

<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                News Feed
            </a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">International News</a>
        </li>
        <li>
            <a href="#">Local News</a>
        </li>
        <li>
            <a href="#">Events</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>">Home</a>
        </li>
    </ul>
</div>
<div class=""><a href="#menu-toggle" class=" " id="menu-toggle"><i class="fa fa-arrow-right fa-1x"> </i></a></div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <?php foreach ($articles['articles'] as $article): ?>
                <div class="row">
                    <div class="card">
                        <div class="thumbnail"><img class="left" src="<?php echo $article['urlToImage']?>"/></div>
                        <div class="right">
                            <h1><?php echo $article['title']?></h1>
                            
                            <div class="separator"></div>
                            <p><?php echo $article['description']?></p>
                            <div class="author">
                            <h2><?php echo $article['author']?></h2>
                            </div>
                        </div>
                        
                        <h5 class="real-date"></h5>
                        <h6 class="real-date-01"><?php echo $article['publishedAt']?></h6>
                        
                        <div class="fab"><a href="<?php echo $article['url']?>"><i class="fa fa-arrow-down fa-1x"> </i></a></div>
                        
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
              
            <div class="col-lg-6">
            <div class="chart-deco">
                <canvas  id="myChart" width="600" height="400"></canvas>
            </div>
            <canvas  id="us-sector-realtime" width="600" height="400"></canvas>
            </div>
                
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->