$(document).ready(function(){
    $.ajax({
        url: "https://www.alphavantage.co/query?function=MFI&symbol=MSFT&interval=weekly&time_period=10&apikey=DVG07CEFFW6GHY5W",
        dataType: 'json',
        success: function(data){

            var k;
            var d =  new Date(data["Meta Data"]["3: Last Refreshed"]);
            var dates = Object.keys(data["Technical Analysis: MFI"]);
            console.log(dates);
           // console.log(JSON.stringify(data["Technical Analysis: MFI"]["2018-07-17"]));
          //  var date_temp_array = JSON.parse(data["Technical Analysis: MFI"]);
            var date_temp_array = data["Technical Analysis: MFI"];
            var count = Object.keys(data["Technical Analysis: MFI"]).length;
            console.log(count);
            var temp_cnt = [d];
            var temp_cnt2 = [];
            var points = [];


            for(k = count ; k > 0 ; k--){
                points.push(data["Technical Analysis: MFI"][(dates[count - k])]["MFI"]);
            }
            console.log(points.length);
            console.log(points);
            //alert(data["Technical Analysis: MFI"][column_date1]["MFI"]);
            var ctx = document.getElementById("myChart").getContext('2d');
             var myChart = new Chart(ctx, {
                 type: 'line',
                 data: {
                     labels: dates,
                     datasets: [{
                         label: data["Meta Data"]["2: Indicator"],
                         data: points,
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