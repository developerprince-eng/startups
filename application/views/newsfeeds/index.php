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
            <a href="#"><i class="material-icons">dashboard</i>Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">library_books</i>International News</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">library_books</i>Local News</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">event</i>Events</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">all_inclusive</i>About</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">room_service</i>Services</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">people</i>Contact</a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>"><i class="material-icons">landscape</i>Home</a>
        </li>
        
    </ul>
</div>
<div class=""><a href="#menu-toggle" class=" " id="menu-toggle"><i class="fa fa-arrow-right fa-1x"> </i></a></div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper" class="news-feed-canvas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <?php if(is_array($articles['articles']) || is_object($articles['articles'])): ?>
                    <?php foreach ($articles['articles'] as $article): ?>
                    <div class="row">
                        <div class="card">
                            <div class="thumbnail"><img class="left" src="<?php echo $article['urlToImage']?>"/></div>
                            <div class="right">
                                <h1><?php echo $article['title']?></h1>
                                
                                <div class="separator"></div>
                                <p><?php echo $article['description']?></p>
                                <div class="row">
                                <div class="col-md-6">
                                <h2>Author:</h2>
                                </div>
                                <div class="col-md-6">
                                <h2><?php echo $article['author']?></h2>
                                </div>
                                </div>
                            </div>
                            
                            <h5 class="real-date"></h5>
                            <h6 class="real-date-01"><?php echo $article['publishedAt']?></h6>
                            
                            <div class="fab"><a href="<?php echo $article['url']?>">Read More...</a></div>
                            
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
              
            <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="chart-deco">
                    <canvas  id="myChart" width="600" height="400"></canvas>
                </div>
            </div>
           
            <div class="row">
                <div class="chart-deco">
                    <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Currency X-Change Rates</div>
                            <div class="panel-body">
                                
                            </div>

                            <!-- Table -->
                            <table class="table">
                                <tr>
                                    <th>Currency From:</th>
                                    <th>Currency To:</th>
                                    <th>X-Change Rate</th>
                                </tr>
                        
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>AUD</td>
                                    <td><?php echo $btc2usd['rates']['AUD']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>BGN</td>
                                    <td><?php echo $btc2usd['rates']['BGN']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>BRL</td>
                                    <td><?php echo $btc2usd['rates']['BRL']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>CAD</td>
                                    <td><?php echo $btc2usd['rates']['CAD']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>CHF</td>
                                    <td><?php echo $btc2usd['rates']['CHF']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>CNY</td>
                                    <td><?php echo $btc2usd['rates']['CNY']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>CZK</td>
                                    <td><?php echo $btc2usd['rates']['CZK']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>DKK</td>
                                    <td><?php echo $btc2usd['rates']['DKK']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>GBP</td>
                                    <td><?php echo $btc2usd['rates']['GBP']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>HKD</td>
                                    <td><?php echo $btc2usd['rates']['HKD']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>HRK</td>
                                    <td><?php echo $btc2usd['rates']['HRK']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>HUF</td>
                                    <td><?php echo $btc2usd['rates']['HUF']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>IDR</td>
                                    <td><?php echo $btc2usd['rates']['IDR']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>ILS</td>
                                    <td><?php echo $btc2usd['rates']['ILS']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>INR</td>
                                    <td><?php echo $btc2usd['rates']['INR']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>ISK</td>
                                    <td><?php echo $btc2usd['rates']['ISK']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>JPY</td>
                                    <td><?php echo $btc2usd['rates']['JPY']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>KRW</td>
                                    <td><?php echo $btc2usd['rates']['KRW']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>MXN</td>
                                    <td><?php echo $btc2usd['rates']['MXN']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>MYR</td>
                                    <td><?php echo $btc2usd['rates']['MYR']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>NOK</td>
                                    <td><?php echo $btc2usd['rates']['NOK']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>NZD</td>
                                    <td><?php echo $btc2usd['rates']['NZD']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>PHP</td>
                                    <td><?php echo $btc2usd['rates']['PHP']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>PLN</td>
                                    <td><?php echo $btc2usd['rates']['PLN']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>RON</td>
                                    <td><?php echo $btc2usd['rates']['RON']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>RUB</td>
                                    <td><?php echo $btc2usd['rates']['RUB']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>SEK</td>
                                    <td><?php echo $btc2usd['rates']['SEK']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>SGD</td>
                                    <td><?php echo $btc2usd['rates']['SGD']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>THB</td>
                                    <td><?php echo $btc2usd['rates']['THB']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>TRY</td>
                                    <td><?php echo $btc2usd['rates']['TRY']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>USD</td>
                                    <td><?php echo $btc2usd['rates']['USD']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>ZAR</td>
                                    <td><?php echo $btc2usd['rates']['ZAR']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $btc2usd['base'];?></td>
                                    <td>EUR</td>
                                    <td><?php echo $btc2usd['rates']['EUR']; ?></td>
                                </tr>
                            </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
           
            
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->