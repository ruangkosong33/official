if ($("#inflation-calculator").length) {
jQuery( function( $ ) {

	// Prinipal Slider      

	
	$("#inflation-principal-slide").slider({
		range: "min",
		min: 500,
		max: 2000000,
		value: 1000,
		step: 500,
		slide: function (event, ui) {
			$("#inflation-show").text(ui.value);
			$('#inflation-input').val(ui.value);
			inflationcalculate();
		},
		change: function(){
			inflation_chart_render();
		}
	});
	$("#inflation-show").text($("#inflation-principal-slide").slider("value"));
	$('#inflation-input').val($('#inflation-principal-slide').slider('value'));

	$("#inflation-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			inflation_principal_value();
		}
	})
	$("#inflation-input").blur(function(event) {
			inflation_principal_value();
	})

	// totalyear-show Slider

	$("#inflation-year-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step: 1,
		value: 5,
		slide: function (event, ui) {
			$("#inflation-totalyear-show").text(ui.value);
			$(" #inflation-year-input").val(ui.value)
			inflationcalculate();
		},
		change: function(){
			inflation_chart_render();
		}
	});
	$("#inflation-totalyear-show").text($("#inflation-year-slide").slider("value"));
	$(' #inflation-year-input').val($('#inflation-year-slide').slider('value'));
	
	$(' #inflation-year-input').blur(function(){      
		inflation_loan_year_value()
	})

	$(" #inflation-year-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			inflation_loan_year_value();
		}
	})

  // target-amount-inflation-rate
   $("#inflation-year-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step: 1,
		value: 5,
		slide: function (event, ui) {
			$("#inflation-totalyear-show").text(ui.value);
			$(" #inflation-year-input").val(ui.value)
			inflationcalculate();
		},
		change: function(){
			inflation_chart_render();
		}
	});
	$("#inflation-totalyear-show").text($("#inflation-year-slide").slider("value"));
	$(' #inflation-year-input').val($('#inflation-year-slide').slider('value'));
	
	$(' #inflation-year-input').blur(function(){      
		inflation_loan_year_value()
	})

	$(" #inflation-year-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			inflation_loan_year_value();
		}
	})



	
	// inflation-intrest-slide

	$("#inflation-intrest-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step:0.1,
		value: 10,
		slide: function(event, ui) {
			$("#inflation-intrest").text(ui.value);
			$("#rate-of-inflation").val(ui.value)
			inflationcalculate();
		},
		change: function(){
			inflation_chart_render();
		}

	});
	$("#inflation-intrest").text($("#inflation-intrest-slide").slider("value"));
	$("#rate-of-inflation").val($("#inflation-intrest-slide").slider("value"));

	$("#rate-of-inflation").blur(function(){
			inflation_interest_rate_value()
	}); 
	$("#rate-of-inflation").on('keyup',function(event) {
		if (event.keyCode === 13) {
			inflation_interest_rate_value();
		}
	})
	inflationcalculate();
	inflation_chart_render();
});
// if (typeof(functionName) != 'inflationcalculate') {
	function inflationcalculate()
	{  

		var inflationAmount=parseInt (jQuery("#inflation-show").text());
		var inflationnumberOfyear=parseInt (jQuery("#inflation-totalyear-show").text());
		var inflationrate=parseInt (jQuery("#inflation-intrest").text());
		var inflationrateratio=(inflationrate/100);


		var top2= Math.pow((1+inflationrateratio), inflationnumberOfyear);
		var futurecost=inflationAmount*top2;
      var costincrese=futurecost-inflationAmount;

		var inflation_amount_str = inflationAmount.toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var future_cost_str = futurecost.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var cost_increse_str = costincrese.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		$inflation_input_principal = $('#inflation-input').val().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

		jQuery("#inflation-amount").html(inflation_amount_str);
		jQuery("#inflation-cost-increase").html(cost_increse_str);
		jQuery("#inflation-future-cost-count").html(future_cost_str);
		jQuery('#inflation-input').val($inflation_input_principal);

		if ($('#inflation-chart').length) {
			// inflation_chart_render()
		}
	}
// }
}

function inflation_principal_value(){
		$text_val=$('#inflation-input').val().toString()
		$inflation_new_text_val = parseInt($text_val.replace(/,/g,''))
		var max = $("#inflation-principal-slide").slider("option", "max");
		if ($inflation_new_text_val > max) {
			$('#inflation-input').val(max)
		}
		var min = $("#inflation-principal-slide").slider("option", "min");
		if ($inflation_new_text_val < min) {
			$('#inflation-input').val(min)
		}

		$("#inflation-principal-slide").slider({
		range: "min",
		min: 500,
		max: 2000000,
		value: $inflation_new_text_val,
		step: 500,
		slide: function (event, ui) {
			$("#inflation-show").text(ui.value);
			$('#inflation-input').val(ui.value);
			inflationcalculate();
		}
	});
	$("#inflation-show").text($("#inflation-principal-slide").slider("value"));
		inflationcalculate();
		inflation_chart_render()
}

function inflation_loan_year_value(){
	$inflation_loan_year = $(" #inflation-year-input").val()
	var max = $("#inflation-year-slide").slider("option", "max");
		if ($inflation_loan_year > max) {
			$(' #inflation-year-input').val(max)
		}
	var min = $("#inflation-year-slide").slider("option", "min");
		if ($inflation_loan_year < min) {
			$(' #inflation-year-input').val(min)
		}


		$("#inflation-year-slide").slider({
		range: "min",
		min: 1,
		max: 40,
		step: 1,
		value: $inflation_loan_year,
		slide: function (event, ui) {
			$("#inflation-totalyear-show").text(ui.value);
			$(" #inflation-year-input").val(ui.value)
			inflationcalculate();
		}
	});
		$("#inflation-totalyear-show").text($("#inflation-year-slide").slider("value"));
		inflationcalculate();
		inflation_chart_render();
}

function inflation_interest_rate_value(){
	$inflation_loan_rate = $("#rate-of-inflation").val()    
	var max = $("#inflation-year-slide").slider("option", "max");
		if ($inflation_loan_rate > max) {
			$('#rate-of-inflation').val(max)
		}
	
	
	$("#inflation-intrest-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step:0.1,
		value: $inflation_loan_rate,
		slide: function(event, ui) {
			$("#inflation-intrest").text(ui.value);
			$("#rate-of-inflation").val(ui.value)
			inflationcalculate();
		}
	});
		$("#inflation-intrest").text($("#inflation-intrest-slide").slider("value"));
		$("#rate-of-inflation").val($("#inflation-intrest-slide").slider("value"));
		inflationcalculate();
		inflation_chart_render(); 
}

function inflation_chart_render()
{
	var options = inflation_chart_options();
	Highcharts.chart('inflation-chart',options);
		if($(window).width() <= 499){
			// Highcharts.chart('inflation-chart',options).setSize(270,270);
		}
}

function inflation_chart_options(){
	var inflation_principal_chart = parseInt($('#inflation-show').text());
	var inflation_interest_chart = $('#inflation-cost-increase').text().toString();
	var inflation_new_interest_chart = parseFloat(inflation_interest_chart.replace(/,/g,''))

	var options = {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: 0,
					plotShadow: false,
				},
				title: {
					text: '',
					align: 'center',
					verticalAlign: 'middle',
					y: 40
				},
				colors:['var(--sinace-base)','var(--sinace-black)'],
				plotOptions: {
					pie: {
						dataLabels: {
							enabled: true,
							distance: -50,
							style: {
								fontWeight: 'bold',
								color: 'white'
							}
						},
						startAngle: -90,
						endAngle: 90,
						center: ['50%', '120%'],
						size: '210%'
					}
				},
				tooltip: {
             pointFormat: '{series.name}: <b>${point.y}</b>'
             },
				series: [{
					type: 'pie',
					name: '',
					innerSize: '50%',
					data: [
						['Current Cost', inflation_principal_chart],
						['Cost Increase', inflation_new_interest_chart],
						{
							dataLabels: {
							   enabled: true
						   }
						}
					]
				}]
			};
	return options;
}

   function inflation_value() {
		$text_val=$('#inflation-input').val().toString()
		$inflation_input_value = $text_val.replace(/,/g,'')
		
		// var input_value = $('#inflation-input').val()
		console.log($.isNumeric($inflation_input_value))
		console.log($inflation_input_value)
				
		if ($.isNumeric($inflation_input_value) == false) {
			$('#inflation-input').val($('#inflation-show').text())
		}
}

function onlynumeric(event)
{
	var x = event.which || event.keycode;
		if((x>=48 && x<=57 && x==190))
			return true;
		else
			return false;

}