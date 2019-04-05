var script = document.createElement('script');script.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js";document.getElementsByTagName('head')[0].appendChild(script); 
$(document).ready(function(){
	$.ajax({
		url: "http://localhost/projo copy/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var Rainfall = [];
			var Diarrhoea = [];
			var Tuberculosis = [];
			 var Malnutrition = [];
            var  Ischemic_Disease = [];
            var  HIV = [];
            var  Malaria_pregnancy = [];
            var General_malaria = [];
            var Cardiovascular_Dis = [];
            var Upper_Respiratory_Tract_Infections = [];
            var Preterm_Babies = [];

			for(var i in data) {
				Rainfall.push(data[i].Rainfall + "mm");
				Diarrhoea.push(data[i].Diarrhoea);
				Tuberculosis.push(data[i].Tuberculosis);
				Malnutrition.push(data[i].Malnutrition);
				Ischemic_Disease.push(data[i].Ischemic_Disease);
				HIV.push(data[i].HIV);
				Malaria_pregnancy.push(data[i].Malaria_pregnancy);
				General_malaria.push(data[i].General_malaria);
				Cardiovascular_Dis.push(data[i].Cardiovascular_Dis);
				Upper_Respiratory_Tract_Infections.push(data[i].Upper_Respiratory_Tract_Infections);
				Preterm_Babies.push(data[i].Preterm_Babies);
			}

			var chartdata = {
				labels: Rainfall,
				datasets : [
					{
						label: 'Diarrhoea',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						fill: false,
						data: Diarrhoea
					},
					{
            label: 'Malnutrition',
            data: Malnutrition,
        
            borderColor: "red",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Tuberculosis',
            data: Tuberculosis,
        
            borderColor: "#3cba9f",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Ischemic Disease',
            data: Ischemic_Disease,
        
            borderColor: "blue",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'HIV',
            data: HIV,
        
            borderColor: "yellow",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Malaria in pregnancy',
            data: Malaria_pregnancy,
        
            borderColor: "purple",
            fill: false,
            borderWidth: 1
        },

          {
            label: 'General malaria',
            data: General_malaria,
        
            borderColor: "violet",
            fill: false,
            borderWidth: 1
        },

        {
            label: 'Cardiovascular Disease',
            data: Cardiovascular_Dis,
        
            borderColor: "green",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Upper Respiratory Tract Infections',
            data: Upper_Respiratory_Tract_Infections,
        
            borderColor: "black",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Preterm Babies',
            data: Preterm_Babies,
        
            borderColor: "orange",
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
		url: "http://localhost/projo copy/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var Rainfall = [];
			var Diarrhoea = [];
			var Tuberculosis = [];
			 var Malnutrition = [];
            var  Ischemic_Disease = [];
            var  HIV = [];
            var  Malaria_pregnancy = [];
            var General_malaria = [];
            var Cardiovascular_Dis = [];
            var Upper_Respiratory_Tract_Infections = [];
            var Preterm_Babies = [];

			for(var i in data) {
				Rainfall.push(data[i].Rainfall + "mm");
				Diarrhoea.push(data[i].Diarrhoea);
				Tuberculosis.push(data[i].Tuberculosis);
				Malnutrition.push(data[i].Malnutrition);
				Ischemic_Disease.push(data[i].Ischemic_Disease);
				HIV.push(data[i].HIV);
				Malaria_pregnancy.push(data[i].Malaria_pregnancy);
				General_malaria.push(data[i].General_malaria);
				Cardiovascular_Dis.push(data[i].Cardiovascular_Dis);
				Upper_Respiratory_Tract_Infections.push(data[i].Upper_Respiratory_Tract_Infections);
				Preterm_Babies.push(data[i].Preterm_Babies);
			}

			var chartdata = {
				labels: Rainfall,
				datasets : [
					{
						label: 'Diarrhoea',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						fill: false,
						data: Diarrhoea
					},
					{
            label: 'Malnutrition',
            data: Malnutrition,
        
            borderColor: "red",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Tuberculosis',
            data: Tuberculosis,
        
            borderColor: "#3cba9f",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Ischemic Disease',
            data: Ischemic_Disease,
        
            borderColor: "blue",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'HIV',
            data: HIV,
        
            borderColor: "yellow",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Malaria in pregnancy',
            data: Malaria_pregnancy,
        
            borderColor: "purple",
            fill: false,
            borderWidth: 1
        },

          {
            label: 'General malaria',
            data: General_malaria,
        
            borderColor: "violet",
            fill: false,
            borderWidth: 1
        },

        {
            label: 'Cardiovascular Disease',
            data: Cardiovascular_Dis,
        
            borderColor: "green",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Upper Respiratory Tract Infections',
            data: Upper_Respiratory_Tract_Infections,
        
            borderColor: "black",
            fill: false,
            borderWidth: 1
        },
        {
            label: 'Preterm Babies',
            data: Preterm_Babies,
        
            borderColor: "orange",
            fill: false,
            borderWidth: 1
        },

        
				]
			};

			var ctx = $("#mycanvas1");

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