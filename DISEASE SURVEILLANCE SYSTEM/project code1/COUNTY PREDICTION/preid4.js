var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
$(document).ready(function(){
    $.ajax({
        url: "http://localhost/project code1/COUNTY PREDICTION/Chartjs/graphdata/COUNTY_BUS/data.php", //http://localhost/projo copy/
        method: "GET",
        success: function(data) {
            console.log(data);
            var month = [];
            var Diarr_Predicted_no_pple = [];
            var TB_Predicted_no_pple = [];
            var Mal_Predicted_no_pple = [];
            var ISCH_Predicted_no_pple = [];
            var HIV_Predicted_no_pple = [];
            var MP_Predicted_no_pple = [];
            var Mala_Predicted_no_pple = [];
            var Card_Predicted_no_pple = [];
            var Urs_Predicted_no_pple = [];
            var PB_Predicted_no_pple = [];
          

            for(var i in data) {
                month.push(data[i].month);
                Diarr_Predicted_no_pple.push(data[i].Diarr_Predicted_no_pple);
                TB_Predicted_no_pple.push(data[i].TB_Predicted_no_pple);
                Mal_Predicted_no_pple.push(data[i].Mal_Predicted_no_pple);
                ISCH_Predicted_no_pple.push(data[i].ISCH_Predicted_no_pple);
                HIV_Predicted_no_pple.push(data[i].HIV_Predicted_no_pple);
                MP_Predicted_no_pple.push(data[i].MP_Predicted_no_pple);
                Mala_Predicted_no_pple.push(data[i].Mala_Predicted_no_pple);
                Card_Predicted_no_pple.push(data[i].Card_Predicted_no_pple);
                Urs_Predicted_no_pple.push(data[i].Urs_Predicted_no_pple);
                PB_Predicted_no_pple.push(data[i].PB_Predicted_no_pple);
            }

            var chartdata = {
                labels: month,
                datasets : [
                    {
                        label: 'Diarrhoea',
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        fill: false,
                        data: Diarr_Predicted_no_pple
                    },



          {
            label: 'General malaria',
            data: Mala_Predicted_no_pple,
        
            borderColor: "violet",
            fill: false,
            borderWidth: 1
        },




        
                ]
            };

            var ctx = $("#mycanvas");

            var barGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});
















var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
$(document).ready(function(){
    $.ajax({
        url: "http://localhost/project code1/COUNTY PREDICTION/Chartjs/graphdata/COUNTY_BUS/data2.php", //http://localhost/projo copy/
        method: "GET",
        success: function(data) {
            console.log(data);
            var month = [];
            var Diarr_Predicted_no_pple = [];
            var TB_Predicted_no_pple = [];
            var Mal_Predicted_no_pple = [];
            var ISCH_Predicted_no_pple = [];
            var HIV_Predicted_no_pple = [];
            var MP_Predicted_no_pple = [];
            var Mala_Predicted_no_pple = [];
            var Card_Predicted_no_pple = [];
            var Urs_Predicted_no_pple = [];
            var PB_Predicted_no_pple = [];
          

            for(var i in data) {
                month.push(data[i].month);
                Diarr_Predicted_no_pple.push(data[i].Diarr_Predicted_no_pple);
                TB_Predicted_no_pple.push(data[i].TB_Predicted_no_pple);
                Mal_Predicted_no_pple.push(data[i].Mal_Predicted_no_pple);
                ISCH_Predicted_no_pple.push(data[i].ISCH_Predicted_no_pple);
                HIV_Predicted_no_pple.push(data[i].HIV_Predicted_no_pple);
                MP_Predicted_no_pple.push(data[i].MP_Predicted_no_pple);
                Mala_Predicted_no_pple.push(data[i].Mala_Predicted_no_pple);
                Card_Predicted_no_pple.push(data[i].Card_Predicted_no_pple);
                Urs_Predicted_no_pple.push(data[i].Urs_Predicted_no_pple);
                PB_Predicted_no_pple.push(data[i].PB_Predicted_no_pple);
            }

            var chartdata = {
                labels: month,
                datasets : [
                   {
                        label: 'Diarrhoea',
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        fill: false,
                        data: Diarr_Predicted_no_pple
                    },


          {
            label: 'General malaria',
            data: Mala_Predicted_no_pple,
        
            borderColor: "violet",
            fill: false,
            borderWidth: 1
        },


        {
            label: 'Lower Respiratory Tract Infections',
            data:Urs_Predicted_no_pple,
        
            borderColor: "black",
            fill: false,
            borderWidth: 1
        },

        
                ]
            };

            var ctx = $("#mycanvas2");

            var barGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});






