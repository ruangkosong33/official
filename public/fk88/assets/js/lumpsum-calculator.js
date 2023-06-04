if ($("#lumpsum-calculator").length) {
jQuery( function( $ ) {

	// Prinipal Slider      

	
	$("#lumpsum-principal-slide").slider({
		range: "min",
		min: 500,
		max: 2000000,
		value: 1000,
		step: 500,
		slide: function (event, ui) {
			$("#principal-show").text(ui.value);
			$('#principal-input').val(ui.value);
			lumpsumcalculate();
		},
		change: function(){
			lumpsum_chart_render();
		}
	});
	$("#principal-show").text($("#lumpsum-principal-slide").slider("value"));
	$('#principal-input').val($('#lumpsum-principal-slide').slider('value'));

	$("#principal-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			principal_value1();
		}
	})
	$("#principal-input").blur(function(event) {
			principal_value1();
	})

	// totalyear-show Slider

	$("#sinace-lumpsum-year-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step: 1,
		value: 5,
		slide: function (event, ui) {
			$("#totalyear-show").text(ui.value);
			$("#loan-year-input").val(ui.value)
			lumpsumcalculate();
		},
		change: function(){
			lumpsum_chart_render();
		}
	});
	$("#totalyear-show").text($("#sinace-lumpsum-year-slide").slider("value"));
	$('#loan-year-input').val($('#sinace-lumpsum-year-slide').slider('value'));
	
	$('#loan-year-input').blur(function(){      
		loan_year_value1()
	})

	$("#loan-year-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			loan_year_value1();
		}
	})
	
	// finlon-intrest-slide

	$("#sinace-lumpsum-intrest-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step:0.1,
		value: 10,
		slide: function(event, ui) {
			$("#intrest").text(ui.value);
			$("#lumpsum-interest-rate-input").val(ui.value)
			lumpsumcalculate();
		},
		change: function(){
			lumpsum_chart_render();
		}

	});
	$("#intrest").text($("#sinace-lumpsum-intrest-slide").slider("value"));
	$("#lumpsum-interest-rate-input").val($("#sinace-lumpsum-intrest-slide").slider("value"));

	$("#lumpsum-interest-rate-input").blur(function(){
			interest_rate_value()
	}); 
	$("#lumpsum-interest-rate-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			interest_rate_value();
		}
	})
	lumpsumcalculate();
	lumpsum_chart_render();
});
// if (typeof(functionName) != 'lumpsumcalculate') {
	function lumpsumcalculate()
	{

		var lumpsumAmount=parseInt (jQuery("#principal-show").text());
		var numberOfyear=parseInt (jQuery("#totalyear-show").text());
		var lumpsumrateOfInterest=parseInt (jQuery("#intrest").text());
		var yearlyInterestRatio = (lumpsumrateOfInterest/100);

		var top1= Math.pow((1+yearlyInterestRatio), numberOfyear);
		var totalamount=lumpsumAmount*top1;
        var totalinterest=totalamount-lumpsumAmount;

		var loanAmount_str = lumpsumAmount.toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var total_amount_str = totalamount.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var total_interest_str1 = totalinterest.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		$input_principal1 = $('#principal-input').val().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

		jQuery("#Invested-lumpsum-amount").html(loanAmount_str);
		jQuery("#wealth-count").html(total_interest_str1);
		jQuery("#total-amount-count").html(total_amount_str);
		jQuery('#principal-input').val($input_principal1);

		if ($('#lumpsum-chart').length) {
			// lumpsum_chart_render()
		}
	}
// }
}

function principal_value1(){
		$text_val=$('#principal-input').val().toString()
		$new_text_val = parseInt($text_val.replace(/,/g,''))
		var max = $("#lumpsum-principal-slide").slider("option", "max");
		if ($new_text_val > max) {
			$('#principal-input').val(max)
		}
		var min = $("#lumpsum-principal-slide").slider("option", "min");
		if ($new_text_val < min) {
			$('#principal-input').val(min)
		}

		$("#lumpsum-principal-slide").slider({
		range: "min",
		min: 500,
		max: 2000000,
		value: $new_text_val,
		step: 500,
		slide: function (event, ui) {
			$("#principal-show").text(ui.value);
			$('#principal-input').val(ui.value);
			lumpsumcalculate();
		}
	});
	$("#principal-show").text($("#lumpsum-principal-slide").slider("value"));
		lumpsumcalculate();
		lumpsum_chart_render()
}

function loan_year_value1(){
	$loan_year = $("#loan-year-input").val()
	var max = $("#sinace-lumpsum-year-slide").slider("option", "max");
		if ($loan_year > max) {
			$('#loan-year-input').val(max)
		}
	var min = $("#sinace-lumpsum-year-slide").slider("option", "min");
		if ($loan_year < min) {
			$('#loan-year-input').val(min)
		}


		$("#sinace-lumpsum-year-slide").slider({
		range: "min",
		min: 1,
		max: 40,
		step: 1,
		value: $loan_year,
		slide: function (event, ui) {
			$("#totalyear-show").text(ui.value);
			$("#loan-year-input").val(ui.value)
			lumpsumcalculate();
		}
	});
		$("#totalyear-show").text($("#sinace-lumpsum-year-slide").slider("value"));
		lumpsumcalculate();
		lumpsum_chart_render();
}

function interest_rate_value(){
	$loan_rate = $("#lumpsum-interest-rate-input").val()    
	var max = $("#sinace-lumpsum-year-slide").slider("option", "max");
		if ($loan_rate > max) {
			$('#lumpsum-interest-rate-input').val(max)
		}
	
	
	$("#sinace-lumpsum-intrest-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step:0.1,
		value: $loan_rate,
		slide: function(event, ui) {
			$("#intrest").text(ui.value);
			$("#lumpsum-interest-rate-input").val(ui.value)
			lumpsumcalculate();
		}
	});
		$("#intrest").text($("#sinace-lumpsum-intrest-slide").slider("value"));
		$("#lumpsum-interest-rate-input").val($("#sinace-lumpsum-intrest-slide").slider("value"));
		lumpsumcalculate();
		lumpsum_chart_render(); 
}

function lumpsum_chart_render()
{
	var options = chart_options();
	Highcharts.chart('lumpsum-chart',options);
		if($(window).width() <= 499){
			// Highcharts.chart('lumpsum-chart',options).setSize(270,270);
		}
}

function chart_options(){
	var principal_chart = parseInt($('#principal-show').text());
	var interest_chart = $('#wealth-count').text().toString();
	var new_interest_chart = parseFloat(interest_chart.replace(/,/g,''))

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
             tooltip: {
             pointFormat: '{series.name}: <b>${point.y}</b>'
             },
				colors:['rgb(44, 175, 254)','rgb(109, 104, 222)'],
				plotOptions: {
					pie: {
                        allowPointSelect: true,
                         cursor: 'pointer',
              dataLabels: {
                               enabled: true,
                               format: '<b>{point.name}</b>: ${point.y}'
            }
        }
				},
				series: [{
					type: 'pie',
					name: '',
					innerSize: '1%',
					data: [
                  
                      { name: 'Invested',y: principal_chart, },
                      { name: 'Gained',y: new_interest_chart,}
					      ]
				}]
			};
	return options;
}

   function value() {
		$text_val=$('#principal-input').val().toString()
		$input_value = $text_val.replace(/,/g,'')
		
			
		if ($.isNumeric($input_value) == false) {
			$('#principal-input').val($('#principal-show').text())
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