var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
$(document).ready(function(){
    $.ajax({
        url: "http://localhost/project code/COUNTY PREDICTION/Chartjs/graphdata/data.php", //http://localhost/projo copy/
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
            label: 'Malnutrition',
            data: Mal_Predicted_no_pple,
        
            borderColor: "red",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Tuberculosis',
            data: TB_Predicted_no_pple,
        
            borderColor: "#3cba9f",
            fill: false,
            borderWidth: 1
        },
        // {
        //     label: 'Ischemic Disease',
        //     data: Ischemic_Disease_pred,
        
        //     borderColor: "blue",
        //     fill: false,
        //     borderWidth: 1
        // },
        // {
        //     label: 'HIV',
        //     data: HIV_pred,
        
        //     borderColor: "yellow",
        //     fill: false,
        //     borderWidth: 1
        // },
        // {
        //     label: 'Malaria in pregnancy',
        //     data: Malaria_pregnancy_pred,
        
        //     borderColor: "purple",
        //     fill: false,
        //     borderWidth: 1
        // },

        //   {
        //     label: 'General malaria',
        //     data: General_malaria_pred,
        
        //     borderColor: "violet",
        //     fill: false,
        //     borderWidth: 1
        // },

        // {
        //     label: 'Cardiovascular Disease',
        //     data: Cardiovascular_Dis_pred,
        
        //     borderColor: "green",
        //     fill: false,
        //     borderWidth: 1
        // },
        // {
        //     label: 'Upper Respiratory Tract Infections',
        //     data: Upper_Respiratory_Tract_Infections_pred,
        
        //     borderColor: "black",
        //     fill: false,
        //     borderWidth: 1
        // },
        // {
        //     label: 'Preterm Babies',
        //     data: Preterm_Babies_pred,
        
        //     borderColor: "orange",
        //     fill: false,
        //     borderWidth: 1
        // },

        
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







// var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
// $(document).ready(function(){
//     $.ajax({
//         url: "http://localhost/project code/COUNTY ANALYSIS - Original/Chartjs/graphdata/data2.php",
//         method: "GET",
//         success: function(data) {
//             console.log(data);
//             var Temperature = [];
//             var Diarrhoea = [];
//             var Tuberculosis = [];
//              var Malnutrition = [];
//             var  Ischemic_Disease = [];
//             var  HIV = [];
//             var  Malaria_pregnancy = [];
//             var General_malaria = [];
//             var Cardiovascular_Dis = [];
//             var Upper_Respiratory_Tract_Infections = [];
//             var Preterm_Babies = [];
//             var month = [] ;

//             for(var i in data) {
//                 Temperature.push(data[i].Temperature + "C ");
//                 Diarrhoea.push(data[i].Diarrhoea);
//                 Tuberculosis.push(data[i].Tuberculosis);
//                 Malnutrition.push(data[i].Malnutrition);
//                 Ischemic_Disease.push(data[i].Ischemic_Disease);
//                 HIV.push(data[i].HIV);
//                 Malaria_pregnancy.push(data[i].Malaria_pregnancy);
//                 General_malaria.push(data[i].General_malaria);
//                 Cardiovascular_Dis.push(data[i].Cardiovascular_Dis);
//                 Upper_Respiratory_Tract_Infections.push(data[i].Upper_Respiratory_Tract_Infections);
//                 Preterm_Babies.push(data[i].Preterm_Babies);
//             }

//             var chartdata = {
//                 labels: Temperature,
//                 datasets : [
//                     {
//                         label: 'Diarrhoea',
//                         backgroundColor: 'rgba(200, 200, 200, 0.75)',
//                         borderColor: 'rgba(200, 200, 200, 0.75)',
//                         hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
//                         hoverBorderColor: 'rgba(200, 200, 200, 1)',
//                         fill: false,
//                         data: Diarrhoea
//                     },
//                     {
//             label: 'Malnutrition',
//             data: Malnutrition,
        
//             borderColor: "red",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Tuberculosis',
//             data: Tuberculosis,
        
//             borderColor: "#3cba9f",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Ischemic Disease',
//             data: Ischemic_Disease,
        
//             borderColor: "blue",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'HIV',
//             data: HIV,
        
//             borderColor: "yellow",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Malaria in pregnancy',
//             data: Malaria_pregnancy,
        
//             borderColor: "purple",
//             fill: false,
//             borderWidth: 1
//         },

//           {
//             label: 'General malaria',
//             data: General_malaria,
        
//             borderColor: "violet",
//             fill: false,
//             borderWidth: 1
//         },

//         {
//             label: 'Cardiovascular Disease',
//             data: Cardiovascular_Dis,
        
//             borderColor: "green",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Upper Respiratory Tract Infections',
//             data: Upper_Respiratory_Tract_Infections,
        
//             borderColor: "black",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Preterm Babies',
//             data: Preterm_Babies,
        
//             borderColor: "orange",
//             fill: false,
//             borderWidth: 1
//         },

        
//                 ]
//             };

//             var ctx = $("#mycanvas1");

//             var barGraph = new Chart(ctx, {
//                 type: 'line',
//                 data: chartdata
//             });
//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });



// var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
// $(document).ready(function(){
//     $.ajax({
//         url: "http://localhost/project code/COUNTY ANALYSIS - Original/Chartjs/graphdata/data3.php",
//         method: "GET",
//         success: function(data) {
//             console.log(data);
//             var Period_Startl = [];
//             var Diarrhoeal = [];
//             var Tuberculosisl = [];
//              var Malnutritionl = [];
//             var  Ischemic_Diseasel = [];
//             var  HIVl = [];
//             var  Malaria_pregnancyl = [];
//             var General_malariall = [];
//             var Cardiovascular_Disl = [];
//             var Upper_Respiratory_Tract_Infectionsl = [];
//             var Preterm_Babiesl = [];
            

//             for(var i in data) {
//                 Period_Startl.push(data[i].Period_Startl);
//                 Diarrhoeal.push(data[i].Diarrhoeal);
//                 Tuberculosisl.push(data[i].Tuberculosisl);
//                 Malnutritionl.push(data[i].Malnutritionl);
//                 Ischemic_Diseasel.push(data[i].Ischemic_Diseasel);
//                 HIVl.push(data[i].HIVl);
//                 Malaria_pregnancyl.push(data[i].Malaria_pregnancyl);
//                 General_malariall.push(data[i].General_malariall);
//                 Cardiovascular_Disl.push(data[i].Cardiovascular_Disl);
//                 Upper_Respiratory_Tract_Infectionsl.push(data[i].Upper_Respiratory_Tract_Infectionsl);
//                 Preterm_Babiesl.push(data[i].Preterm_Babiesl);
//             }

//             var chartdata = {
//                 labels:Period_Startl,
//                 datasets : [
//                     {
//                         label: 'Diarrhoea',
//                         backgroundColor: 'rgba(200, 200, 200, 0.75)',
//                         borderColor: 'rgba(200, 200, 200, 0.75)',
//                         hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
//                         hoverBorderColor: 'rgba(200, 200, 200, 1)',
//                         fill: false,
//                         data: Diarrhoeal
//                     },
//                     {
//             label: 'Malnutrition',
//             data: Malnutritionl,
        
//             borderColor: "red",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Tuberculosis',
//             data: Tuberculosisl,
        
//             borderColor: "#3cba9f",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Ischemic Disease',
//             data: Ischemic_Diseasel,
        
//             borderColor: "blue",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'HIV',
//             data: HIVl,
        
//             borderColor: "yellow",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Malaria in pregnancy',
//             data: Malaria_pregnancyl,
        
//             borderColor: "purple",
//             fill: false,
//             borderWidth: 1
//         },

//           {
//             label: 'General malaria',
//             data: General_malariall,
        
//             borderColor: "violet",
//             fill: false,
//             borderWidth: 1
//         },

//         {
//             label: 'Cardiovascular Disease',
//             data: Cardiovascular_Disl,
        
//             borderColor: "green",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Upper Respiratory Tract Infections',
//             data: Upper_Respiratory_Tract_Infectionsl,
        
//             borderColor: "black",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Preterm Babies',
//             data: Preterm_Babiesl,
        
//             borderColor: "orange",
//             fill: false,
//             borderWidth: 1
//         },

        
//                 ]
//             };

//             var ctx = $("#mycanvas3");

//             var barGraph = new Chart(ctx, {
//                 type: 'line',
//                 data: chartdata
//             });
//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });



// var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
// $(document).ready(function(){
//     $.ajax({
//         url: "http://localhost/project code/COUNTY ANALYSIS - Original/Chartjs/graphdata/data4.php",
//         method: "GET",
//         success: function(data) {
//             console.log(data);
//             var Period_Startm = [];
//             var Diarrhoeam = [];
//             var Tuberculosism = [];
//              var Malnutritionm = [];
//             var  Ischemic_Diseasem = [];
//             var  HIVm = [];
//             var  Malaria_pregnancym = [];
//             var General_malariam = [];
//             var Cardiovascular_Dism = [];
//             var Upper_Respiratory_Tract_Infectionsm = [];
//             var Preterm_Babiesm = [];
            

//             for(var i in data) {
//                 Period_Startm.push(data[i].Period_Startm);
//                 Diarrhoeam.push(data[i].Diarrhoeam);
//                 Tuberculosism.push(data[i].Tuberculosism);
//                 Malnutritionm.push(data[i].Malnutritionm);
//                 Ischemic_Diseasem.push(data[i].Ischemic_Diseasem);
//                 HIVm.push(data[i].HIVm);
//                 Malaria_pregnancym.push(data[i].Malaria_pregnancym);
//                 General_malariam.push(data[i].General_malariam);
//                 Cardiovascular_Dism.push(data[i].Cardiovascular_Dism);
//                 Upper_Respiratory_Tract_Infectionsm.push(data[i].Upper_Respiratory_Tract_Infectionsm);
//                 Preterm_Babiesm.push(data[i].Preterm_Babiesm);
//             }

//             var chartdata = {
//                 labels:Period_Startm,
//                 datasets : [
//                     {
//                         label: 'Diarrhoea',
//                         backgroundColor: 'rgba(200, 200, 200, 0.75)',
//                         borderColor: 'rgba(200, 200, 200, 0.75)',
//                         hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
//                         hoverBorderColor: 'rgba(200, 200, 200, 1)',
//                         fill: false,
//                         data: Diarrhoeam
//                     },
//                     {
//             label: 'Malnutrition',
//             data: Malnutritionm,
        
//             borderColor: "red",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Tuberculosis',
//             data: Tuberculosism,
        
//             borderColor: "#3cba9f",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Ischemic Disease',
//             data: Ischemic_Diseasem,
        
//             borderColor: "blue",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'HIV',
//             data: HIVm,
        
//             borderColor: "yellow",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Malaria in pregnancy',
//             data: Malaria_pregnancym,
        
//             borderColor: "purple",
//             fill: false,
//             borderWidth: 1
//         },

//           {
//             label: 'General malaria',
//             data: General_malariam,
        
//             borderColor: "violet",
//             fill: false,
//             borderWidth: 1
//         },

//         {
//             label: 'Cardiovascular Disease',
//             data: Cardiovascular_Dism,
        
//             borderColor: "green",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Upper Respiratory Tract Infections',
//             data: Upper_Respiratory_Tract_Infectionsm,
        
//             borderColor: "black",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Preterm Babies',
//             data: Preterm_Babiesm,
        
//             borderColor: "orange",
//             fill: false,
//             borderWidth: 1
//         },

        
//                 ]
//             };

//             var ctx = $("#mycanvas4");

//             var barGraph = new Chart(ctx, {
//                 type: 'line',
//                 data: chartdata
//             });
//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });


// var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
// $(document).ready(function(){
//     $.ajax({
//         url: "http://localhost/project code/COUNTY ANALYSIS - Original/Chartjs/graphdata/data5.php",
//         method: "GET",
//         success: function(data) {
//             console.log(data);
//             var CName = [];
//             var Diarrhoea = [];
//             var  Tuberculosis= [];
//             var  Malnutrition = [];
//             var  Ischemic_Disease = [];
//             var  HIV = [];
//             var  Malaria_pregnancy = [];
//             var General_malaria = [];
//             var Cardiovascular_Dis = [];
//             var Upper_Respiratory_Tract_Infections = [];
//             var Preterm_Babies = [];
            

//             for(var i in data) {
//                 CName.push(data[i].CName +" " +"TOTAL VICTIM CASES THIS PAST 12 MONTHS");
//                 Tuberculosis.push(data[i].Tuberculosis);
//                 Malnutrition.push(data[i].Malnutrition);
//                 Ischemic_Disease.push(data[i].Ischemic_Disease);
//                 HIV.push(data[i].HIV);
//                 Malaria_pregnancy.push(data[i].Malaria_pregnancy);
//                 General_malaria.push(data[i].General_malaria);
//                 Cardiovascular_Dis.push(data[i].Cardiovascular_Dis);
//                 Upper_Respiratory_Tract_Infections.push(data[i].Upper_Respiratory_Tract_Infections);
//                 Preterm_Babies.push(data[i].Preterm_Babies);
//             }

//             var chartdata = {
//                 labels: CName,
//                 datasets : [
//                     {
//                         label: 'Diarrhoea',
//                         backgroundColor: 'rgba(200, 200, 200, 0.75)',
//                         borderColor: 'rgba(200, 200, 200, 0.75)',
//                         hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
//                         hoverBorderColor: 'rgba(200, 200, 200, 1)',
//                         fill: false,
//                         data: Diarrhoea,
//                     },
//                     {
//             label: 'Malnutrition',
//             data: Malnutrition,
        
//             borderColor: "red",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Tuberculosis',
//             data: Tuberculosis,
        
//             borderColor: "#3cba9f",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Ischemic Disease',
//             data: Ischemic_Disease,
        
//             borderColor: "blue",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'HIV',
//             data: HIV,
        
//             borderColor: "yellow",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Malaria in pregnancy',
//             data: Malaria_pregnancy,
        
//             borderColor: "purple",
//             fill: false,
//             borderWidth: 1
//         },

//           {
//             label: 'General malaria',
//             data: General_malaria,
        
//             borderColor: "violet",
//             fill: false,
//             borderWidth: 1
//         },

//         {
//             label: 'Cardiovascular Disease',
//             data: Cardiovascular_Dis,
        
//             borderColor: "green",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Upper Respiratory Tract Infections',
//             data: Upper_Respiratory_Tract_Infections,
        
//             borderColor: "black",
//             fill: false,
//             borderWidth: 1
//         },
//         {
//             label: 'Preterm Babies',
//             data: Preterm_Babies,
        
//             borderColor: "orange",
//             fill: false,
//             borderWidth: 1
//         },

        
//                 ]
//             };

//             var ctx = $("#mycanvas5");

//             var barGraph = new Chart(ctx, {
//                 type: 'bar',
//                 data: chartdata
//             });
//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });