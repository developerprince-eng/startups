 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/card.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.counterup.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/waypoints.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>
    <!-- Javascripts
        ================================================== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>

    <!-- Get Market Data  Money Flow Index -->
    <script>
    
   $(document).ready(function(){
       $.ajax({
           url: "https://www.alphavantage.co/query?function=MFI&symbol=MSFT&interval=weekly&time_period=10&apikey=400JVSQUJFKVIWRJ",
           dataType: 'json',
           success: function(data){

               function checkDate(input){
                   
                   var r1 = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/;
                   var r2 = /^([0-9]{4})-([0-9]{1})-([0-9]{2})$/;
                   var r3 = /^([0-9]{4})-([0-9]{2})-([0-9]{1})$/;
                   var r4 = /^([0-9]{4})-([0-9]{1})-([0-9]{1})$/
                    if(input.match(r1)){
                        return 0;
                    }else if(input.match(r2)){
                        return 1;
                    }else if(input.match(r3)){
                        return 2;
                    }else if(input.match(r4)){
                        return 3
                    }
               }

               


               var column_date = [];
               var dd = "";
               var dd_num;
               var yr_num; 
               var d = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d.setDate(d.getDate() - 0);
                var d1 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d1.setDate(d.getDate() - 7);
                var d2 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d2.setDate(d.getDate() - 14);
                var d3 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d3.setDate(d.getDate() - 21);
                var d4 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d4.setDate(d4.getDate() - 28);
                var d5 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d5.setDate(d5.getDate() - 35);
                var d6 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d6.setDate(d6.getDate() - 42);
                var d7 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d7.setDate(d7.getDate() - 49);
                var d8 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d8.setDate(d8.getDate() - 56);
                var d9 = new Date(data["Meta Data"]["3: Last Refreshed"]);
                d9.setDate(d.getDate() - 63);


               //Column Date 0
               dd = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate()
               if(checkDate(dd) == 0){
                   ddd = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();
                   column_date = ddd;
               }else if(checkDate(dd) == 1){
                   ddd1 = d.getFullYear() + "-" + 0+(d.getMonth()+1) + "-" + d.getDate();
                   column_date = ddd1;
               }
               else if(checkDate(dd) == 2){
                   ddd2 = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + 0+d.getDate();
                   column_date = ddd2;
               }
               else if(checkDate(dd) == 3){
                   ddd2 = d.getFullYear() + "-" + 0+(d.getMonth()+1) + "-" + 0+d.getDate();
                   column_date = ddd2;
               }
               
               //Columns Date 1
               dd1 = d1.getFullYear() + "-" + (d1.getMonth()+1) + "-" + d1.getDate();
               if(checkDate(dd1) == 0){
                   ddd = d1.getFullYear() + "-" + (d1.getMonth()+1) + "-" + d1.getDate();
                   column_date1 = ddd;
               }else if(checkDate(dd1) == 1){
                   ddd1 = d1.getFullYear() + "-" + 0+(d1.getMonth()+1) + "-" + d1.getDate();
                   column_date1 = ddd1;
               }
               else if(checkDate(dd1) == 2){
                   ddd2 = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + 0+d.getDate();
                   column_date = ddd2;
               }
               else if(checkDate(dd1) == 3){
                   ddd2 = d1.getFullYear() + "-" + 0+(d1.getMonth()+1) + "-" + 0+d1.getDate();
                   column_date1 = ddd2;
               }

               //Columns Date 2 
               dd2 = d2.getFullYear() + "-" + (d2.getMonth()+1) + "-" + d2.getDate();
               if(checkDate(dd2) == 0){
                   ddd = d2.getFullYear() + "-" + (d2.getMonth()+1) + "-" + d2.getDate();
                   column_date2 = ddd;
               }else if(checkDate(dd2) == 1){
                   ddd1 = d2.getFullYear() + "-" + 0+(d2.getMonth()+1) + "-" + d2.getDate();
                   column_date2 = ddd1;
               }
               else if(checkDate(dd2) == 2){
                   ddd2 = d2.getFullYear() + "-" + (d2.getMonth()+1) + "-" + 0+d2.getDate();
                   column_date2 = ddd2;
               }
               else if(checkDate(dd2) == 3){
                   ddd2 = d2.getFullYear() + "-" + 0+(d2.getMonth()+1) + "-" + 0+d2.getDate();
                   column_date2 = ddd2;
               }
               
               //Column Date 3
               dd3 = d.getFullYear() + "-" + (d3.getMonth()+1) + "-" + d3.getDate();
               if(checkDate(dd3) == 0){
                   ddd = d3.getFullYear() + "-" + (d3.getMonth()+1) + "-" + d3.getDate();
                   column_date3 = ddd;
               }else if(checkDate(dd3) == 1){
                   ddd1 = d3.getFullYear() + "-" + 0+(d3.getMonth()+1) + "-" + d3.getDate();
                   column_date3 = ddd1;
               }
               else if(checkDate(dd3) == 2){
                   ddd2 = d3.getFullYear() + "-" + (d3.getMonth()+1) + "-" + 0+d3.getDate();
                   column_date3 = ddd2;
               }
               else if(checkDate(dd3) == 3){
                   ddd2 = d3.getFullYear() + "-" + 0+(d3.getMonth()+1) + "-" + 0+d3.getDate();
                   column_date3 = ddd2;
               }
               
               //Column Date 4
               dd4 = d4.getFullYear() + "-" + (d4.getMonth()+1) + "-" + d4.getDate();
               if(checkDate(dd4) == 0){
                   ddd = d4.getFullYear() + "-" + (d4.getMonth()+1) + "-" + d4.getDate();
                   column_date4 = ddd;
               }else if(checkDate(dd3) == 1){
                   ddd1 = d4.getFullYear() + "-" + 0+(d4.getMonth()+1) + "-" + d4.getDate();
                   column_date4 = ddd1;
               }
               else if(checkDate(dd4) == 2){
                   ddd2 = d4.getFullYear() + "-" + (d4.getMonth()+1) + "-" + 0+d4.getDate();
                   column_date4 = ddd2;
               }
               else if(checkDate(dd4) == 3){
                   ddd2 = d4.getFullYear() + "-" + 0+(d4.getMonth()+1) + "-" + 0+d4.getDate();
                   column_date4 = ddd2;
               }
               
               //Column Date 5
               dd5 = d.getFullYear() + "-" + (d5.getMonth()+1) + "-" + d5.getDate();
               if(checkDate(dd5) == 0){
                   ddd = d5.getFullYear() + "-" + (d5.getMonth()+1) + "-" + d5.getDate();
                   column_date5 = ddd;
               }else if(checkDate(dd5) == 1){
                   ddd1 = d5.getFullYear() + "-" + 0+(d5.getMonth()+1) + "-" + d5.getDate();
                   column_date5 = ddd1;
               }
               else if(checkDate(dd5) == 2){
                   ddd2 = d5.getFullYear() + "-" + (d5.getMonth()+1) + "-" + 0+d5.getDate();
                   column_date5 = ddd2;
               }
               else if(checkDate(dd5) == 3){
                   ddd2 = d5.getFullYear() + "-" + 0+(d5.getMonth()+1) + "-" + 0+d5.getDate();
                   column_date5 = ddd2;
               }


               //Column Date 6
               dd6 = d.getFullYear() + "-" + (d6.getMonth()+1) + "-" + d6.getDate();
               if(checkDate(dd6) == 0){
                   ddd = d6.getFullYear() + "-" + (d6.getMonth()+1) + "-" + d6.getDate();
                   column_date6 = ddd;
               }else if(checkDate(dd6) == 1){
                   ddd1 = d6.getFullYear() + "-" + 0+(d6.getMonth()+1) + "-" + d6.getDate();
                   column_date6 = ddd1;
               }
               else if(checkDate(dd6) == 2){
                   ddd2 = d6.getFullYear() + "-" + (d6.getMonth()+1) + "-" + 0+d6.getDate();
                   column_date6 = ddd2;
               }
               else if(checkDate(dd6) == 3){
                   ddd2 = d6.getFullYear() + "-" + 0+(d6.getMonth()+1) + "-" + 0+d6.getDate();
                   column_date6 = ddd2;
               }

               //Column Date 7
               dd7 = d.getFullYear() + "-" + (d7.getMonth()+1) + "-" + d7.getDate();
               if(checkDate(dd7) == 0){
                   ddd = d7.getFullYear() + "-" + (d7.getMonth()+1) + "-" + d7.getDate();
                   column_date7 = ddd;
               }else if(checkDate(dd7) == 1){
                   ddd1 = d7.getFullYear() + "-" + 0+(d7.getMonth()+1) + "-" + d7.getDate();
                   column_date7 = ddd1;
               }
               else if(checkDate(dd7) == 2){
                   ddd2 = d7.getFullYear() + "-" + (d7.getMonth()+1) + "-" + 0+d7.getDate();
                   column_date7 = ddd2;
               }
               else if(checkDate(dd7) == 3){
                   ddd2 = d7.getFullYear() + "-" + 0+(d7.getMonth()+1) + "-" + 0+d7.getDate();
                   column_date7 = ddd2;
               }
                
               //Column Date 8
               dd8 = d.getFullYear() + "-" + (d8.getMonth()+1) + "-" + d8.getDate();
               if(checkDate(dd8) == 0){
                   ddd = d8.getFullYear() + "-" + (d8.getMonth()+1) + "-" + d8.getDate();
                   column_date8 = ddd;
               }else if(checkDate(dd8) == 1){
                   ddd1 = d8.getFullYear() + "-" + 0+(d8.getMonth()+1) + "-" + d8.getDate();
                   column_date8 = ddd1;
               }
               else if(checkDate(dd8) == 2){
                   ddd2 = d8.getFullYear() + "-" + (d8.getMonth()+1) + "-" + 0+d8.getDate();
                   column_date8 = ddd2;
               }
               else if(checkDate(dd8) == 3){
                   ddd2 = d8.getFullYear() + "-" + 0+(d8.getMonth()+1) + "-" + 0+d8.getDate();
                   column_date8 = ddd2;
               }
                
               //Column Date 9
               dd9 = d.getFullYear() + "-" + (d9.getMonth()+1) + "-" + d9.getDate();
               if(checkDate(dd9) == 0){
                   ddd = d9.getFullYear() + "-" + (d9.getMonth()+1) + "-" + d9.getDate();
                   column_date9 = ddd;
               }else if(checkDate(dd9) == 1){
                   ddd1 = d9.getFullYear() + "-" + 0+(d9.getMonth()+1) + "-" + d9.getDate();
                   column_date9 = ddd1;
               }
               else if(checkDate(dd9) == 2){
                   ddd2 = d9.getFullYear() + "-" + (d9.getMonth()+1) + "-" + 0+d9.getDate();
                   column_date9 = ddd2;
               }
               else if(checkDate(dd9) == 3){
                   ddd2 = d9.getFullYear() + "-" + 0+(d9.getMonth()+1) + "-" + 0+d9.getDate();
                   column_date9 = ddd2;
               }
            
                
                
               //alert(data["Technical Analysis: MFI"][column_date1]["MFI"]);
               var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:[column_date, column_date1, column_date2, column_date3, column_date4, column_date5, column_date6, column_date7, column_date8, column_date9],
                        datasets: [{
                            label: data["Meta Data"]["2: Indicator"],
                            data: [
                                data["Technical Analysis: MFI"][column_date]["MFI"],
                                data["Technical Analysis: MFI"][column_date1]["MFI"],
                                data["Technical Analysis: MFI"][column_date2]["MFI"],
                                data["Technical Analysis: MFI"][column_date3]["MFI"],
                                data["Technical Analysis: MFI"][column_date4]["MFI"],
                                data["Technical Analysis: MFI"][column_date5]["MFI"],
                                data["Technical Analysis: MFI"][column_date6]["MFI"],
                                data["Technical Analysis: MFI"][column_date7]["MFI"],
                                data["Technical Analysis: MFI"][column_date8]["MFI"],
                                data["Technical Analysis: MFI"][column_date9]["MFI"]
                            ],
                            backgroundColor: [
                                'rgba(200, 65, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        },
                        elements: {
                             line: {
                                tension: 0, // disables bezier curves
                            }
                        }
                    }
                });
           },
           error: function(){
               alert("error check url or api key");
           }
       });
   });
   
    </script>

    <!-- Get Market Data  Money Flow Index -->

    <script>
        $(document).ready(function(){
            $.ajax({
                url: "https://www.alphavantage.co/query?function=SECTOR&apikey=400JVSQUJFKVIWRJ",
                dataType: 'json',
                success: function(data) {
                   
                    var ctx = document.getElementById("us-sector-realtime");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [data["Rank A: Real-Time Performance"]["Consumer Staples"], data["Rank A: Real-Time Performance"]["Industrials"], data["Rank A: Real-Time Performance"]["Energy"], data["Rank A: Real-Time Performance"]["Consumer Discretionary"], data["Rank A: Real-Time Performance"]["Health Care"], data["Rank A: Real-Time Performance"]["Utilities"], data["Rank A: Real-Time Performance"]["Materials"], data["Rank A: Real-Time Performance"]["Information Technology"], data["Rank A: Real-Time Performance"]["Real Estate"], data["Rank A: Real-Time Performance"]["Financials"], data["Rank A: Real-Time Performance"]["Telecommunication Services"]],
                        datasets: [{
                            label: 'Us Sector Performance Daily',
                            data: [data["Rank A: Real-Time Performance"]["Consumer Staples"], data["Rank A: Real-Time Performance"]["Industrials"], data["Rank A: Real-Time Performance"]["Energy"], data["Rank A: Real-Time Performance"]["Consumer Discretionary"], data["Rank A: Real-Time Performance"]["Health Care"], data["Rank A: Real-Time Performance"]["Utilities"], data["Rank A: Real-Time Performance"]["Materials"], data["Rank A: Real-Time Performance"]["Information Technology"], data["Rank A: Real-Time Performance"]["Real Estate"], data["Rank A: Real-Time Performance"]["Financials"], data["Rank A: Real-Time Performance"]["Telecommunication Services"]],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
                },
                error: function() {
                    alert("error");
                }
            });        
        });
    </script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>
</html>