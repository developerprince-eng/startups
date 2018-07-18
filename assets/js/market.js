$(document).ready(function(){
    $.ajax({
        url: "https://www.alphavantage.co/query?function=MFI&symbol=MSFT&interval=weekly&time_period=10&apikey=DVG07CEFFW6GHY5W",
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
                     return 3;
                 }
            }

            var i, j, k;
            var column_date = [];
            var dd = "";
            var dd_num;
            var yr_num; 
            var d =  new Date(data["Meta Data"]["3: Last Refreshed"]);
            console.log(JSON.stringify(data["Technical Analysis: MFI"]));
            var date_temp_array = JSON.parse(data["Technical Analysis: MFI"]);
            var count = Object.keys(data["Technical Analysis: MFI"]).length;
            console.log(count);
            var temp_cnt = [d];
            var temp_cnt2 = [];
            var points = [];

            

            for(i = 0 ; i < date_temp_array.length ; i++ ){
                var t = temp_cnt[temp_cnt - 1];
                t.setDate(t.getDate() - 7);
                temp_cnt.push(t); 
            }
           
            for(j = 0 ; j < date_temp_array.length ; j++){
                var x = temp_cnt[temp_cnt - 1];
                dd = x.getFullYear() + "-" + (x.getMonth()+1) + "-" + x.getDate();
                if(checkDate(dd) == 0){
                    ddd = x.getFullYear() + "-" + (x.getMonth()+1) + "-" + x.getDate();
                    temp_cnt2.push(ddd);
                }else if(checkDate(dd) == 1){
                    ddd = x.getFullYear() + "-" + 0+(x.getMonth()+1) + "-" + x.getDate();
                    temp_cnt2.push(ddd);
                }
                else if(checkDate(dd) == 2){
                    ddd = x.getFullYear() + "-" + (x.getMonth()+1) + "-" + 0+x.getDate();
                    temp_cnt2.push(ddd);
                }
                else if(checkDate(dd) == 3){
                    ddd = x.getFullYear() + "-" + 0+(x.getMonth()+1) + "-" + 0+x.getDate();
                    temp_cnt2.push(ddd);
                }
            }

           

            for(k = 0; k < date_temp_array.length; k++){
                points.pop(data["Technical Analysis: MFI"][(temp_cnt2[temp_cnt2.length - 1])]["MFI"])
            }
             
            //alert(data["Technical Analysis: MFI"][column_date1]["MFI"]);
            var ctx = document.getElementById("myChart").getContext('2d');
             var myChart = new Chart(ctx, {
                 type: 'line',
                 data: {
                     labels: temp_cnt2,
                     datasets: [{
                         label: data["Meta Data"]["2: Indicator"],
                         data: [
                             points
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