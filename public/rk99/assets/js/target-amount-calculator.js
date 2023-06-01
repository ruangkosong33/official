if ($("#target-amount-calculator").length) {
jQuery( function( $ ) {

	// target amount Prinipal Slider      
	$("#target-amount-principal-slide").slider({
		range: "min",
		min: 100000,
		max: 50000000,
		value: 300000,
		step: 5000,
		slide: function (event, ui) {
			$("#target-amount-show").text(ui.value);
			$('#target-amount-input').val(ui.value);
			targetamountcalculate();
		},
		change: function(){
			target_amount_chart_render();
		}
	});
	$("#target-amount-show").text($("#target-amount-principal-slide").slider("value"));
	$('#target-amount-input').val($('#target-amount-principal-slide').slider('value'));

	$("#target-amount-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			target_amount_principal_value();
		}
	})
	$("#target-amount-input").blur(function(event) {
			target_amount_principal_value();
	})

	// totalyear-show Slider

	$("#target-amount-year-slide").slider({
		range: "min",
		min: 1,
		max: 50,
		step: 1,
		value: 5,
		slide: function (event, ui) {
			$("#target-amount-totalyear-show").text(ui.value);
			$(" #target-amount-year-input").val(ui.value)
			targetamountcalculate();
		},
		change: function(){
			target_amount_chart_render();
		}
	});
	$("#target-amount-totalyear-show").text($("#target-amount-year-slide").slider("value"));
	$(' #target-amount-year-input').val($('#target-amount-year-slide').slider('value'));
	
	$(' #target-amount-year-input').blur(function(){      
		target_amount_loan_year_value()
	})

	$(" #target-amount-year-input").on('keyup',function(event) {
		if (event.keyCode === 13) {
			target_amount_loan_year_value();
		}
	})
	
	// target-amount-inflation-rate-slider
	$("#target-amount-inflation-intrest-slide").slider({
		range: "min",
		min: 0,
		max: 10,
		step:0.1,
		value: 5,
		slide: function(event, ui) {
			$("#target-amount-inflation-intrest").text(ui.value);
			$("#target-amount-rate-of-inflation").val(ui.value)
			targetamountcalculate();
		},
		change: function(){
			target_amount_chart_render();
		}

	});
	$("#target-amount-inflation-intrest").text($("#target-amount-inflation-intrest-slide").slider("value"));
	$("#target-amount-rate-of-inflation").val($("#target-amount-inflation-intrest-slide").slider("value"));

	$("#target-amount-rate-of-inflation").blur(function(){
			target_amount_inflation_rate_value()
	}); 
	$("#target-amount-rate-of-inflation").on('keyup',function(event) {
		if (event.keyCode === 13) {
			target_amount_inflation_rate_value();
		}
	})
	targetamountcalculate();
	target_amount_chart_render();


// target-amount-expected-rate-slider
	$("#target-amount-intrest-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step:0.1,
		value: 10,
		slide: function(event, ui) {
			$("#target-amount-intrest").text(ui.value);
			$("#target-amount-rate-of-expected").val(ui.value)
			targetamountcalculate();
		},
		change: function(){
			target_amount_chart_render();
		}

	});
	$("#target-amount-intrest").text($("#target-amount-intrest-slide").slider("value"));
	$("#target-amount-rate-of-expected").val($("#target-amount-intrest-slide").slider("value"));

	$("#target-amount-rate-of-expected").blur(function(){
			target_amount_interest_rate_value()
	}); 
	$("#target-amount-rate-of-expected").on('keyup',function(event) {
		if (event.keyCode === 13) {
			target_amount_interest_rate_value();
		}
	})
	targetamountcalculate();
	target_amount_chart_render();
})

// if (typeof(functionName) != 'targetamountcalculate') {
	function targetamountcalculate()
	{  

		var targetAmount=parseInt (jQuery("#target-amount-show").text());
		var targetamountnumberOfyear=parseInt (jQuery("#target-amount-totalyear-show").text());
		var targetamountinflationrate=parseInt (jQuery("#target-amount-inflation-intrest").text());
		var targetamountexpectedrate=parseInt (jQuery("#target-amount-intrest").text());

		var targetamountinflationrateratio=(targetamountinflationrate/100);
		var targetamountexpectedrateratio=(targetamountexpectedrate/100);
		var realInterestRate=(1+targetamountexpectedrateratio)/(1+targetamountinflationrateratio) -1;
      var monthlyInterestRate = realInterestRate / 12;
      var loanTermMonths = targetamountnumberOfyear * 12;
      var target1=(Math.pow(1+targetamountinflationrateratio,targetamountnumberOfyear));
      var target2=targetAmount*target1;
      var futurevalue=target2;
		var targetamountexpectedrateratio1=(targetamountexpectedrateratio/12);

		var fv= (futurevalue*targetamountexpectedrateratio1);
		var dv=[1+targetamountexpectedrateratio1];
		var kv=targetamountnumberOfyear*12;
		var jv=Math.pow(dv,kv)-1;
		var mothlysip=fv/jv;
		var totalsipinvest=mothlysip*kv;
		var growthamount=futurevalue-totalsipinvest;

		var future_value_str = futurevalue.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var No_of_target_amount_year_str=targetamountnumberOfyear.toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var final_str =mothlysip.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var total_sip_invest_str = totalsipinvest.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		var growthamount_str = growthamount.toFixed().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

		$target_amount_input_principal = $('#target-amount-input').val().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

		jQuery("#target-amount").html(future_value_str);
		jQuery("#target-amount-sip").html(final_str);
		jQuery("#target-amount-sip-invest").html(total_sip_invest_str);
		jQuery("#total-growth-amount").html(growthamount_str);

		jQuery('#target-amount-input').val($target_amount_input_principal);

		if ($('#target-amount-chart').length) {
			// target_amount_chart_render()
		}
	}
// }
}

function target_amount_principal_value(){
		$text_val=$('#target-amount-input').val().toString()
		$targetamount_new_text_val = parseInt($text_val.replace(/,/g,''))
		var max = $("#target-amount-principal-slide").slider("option", "max");
		if ($targetamount_new_text_val > max) {
			$('#target-amount-input').val(max)
		}
		var min = $("#target-amount-principal-slide").slider("option", "min");
		if ($targetamount_new_text_val < min) {
			$('#target-amount-input').val(min)
		}

		$("#target-amount-principal-slide").slider({
		range: "min",
		min: 100000,
		max: 50000000,
		value: $targetamount_new_text_val,
		step: 500,
		slide: function (event, ui) {
			$("#target-amount-show").text(ui.value);
			$('#target-amount-input').val(ui.value);
			targetamountcalculate();
		}
	});
	$("#target-amount-show").text($("#target-amount-principal-slide").slider("value"));
		targetamountcalculate();
		target_amount_chart_render()
}

function target_amount_loan_year_value(){
	$targetamount_loan_year = $(" #target-amount-year-input").val()
	var max = $("#target-amount-year-slide").slider("option", "max");
		if ($targetamount_loan_year > max) {
			$(' #target-amount-year-input').val(max)
		}
	var min = $("#target-amount-year-slide").slider("option", "min");
		if ($targetamount_loan_year < min) {
			$(' #target-amount-year-input').val(min)
		}


		$("#target-amount-year-slide").slider({
		range: "min",
		min: 1,
		max: 50,
		step: 1,
		value: $targetamount_loan_year,
		slide: function (event, ui) {
			$("#target-amount-totalyear-show").text(ui.value);
			$(" #target-amount-year-input").val(ui.value)
			targetamountcalculate();
		}
	});
		$("#target-amount-totalyear-show").text($("#target-amount-year-slide").slider("value"));
		targetamountcalculate();
		target_amount_chart_render();
}

function target_amount_interest_rate_value(){
	$targetamount_loan_rate = $("#target-amount-rate-of-expected").val()    
	var max = $("#target-amount-year-slide").slider("option", "max");
		if ($targetamount_loan_rate > max) {
			$('#target-amount-rate-of-expected').val(max)
		}
	
	
	$("#target-amount-intrest-slide").slider({
		range: "min",
		min: 1,
		max: 30,
		step:0.1,
		value: $targetamount_loan_rate,
		slide: function(event, ui) {
			$("#target-amount-intrest").text(ui.value);
			$("#target-amount-rate-of-expected").val(ui.value)
			targetamountcalculate();
		}
	});
		$("#target-amount-intrest").text($("#target-amount-intrest-slide").slider("value"));
		$("#target-amount-rate-of-expected").val($("#target-amount-intrest-slide").slider("value"));
		targetamountcalculate();
		target_amount_chart_render(); 
}

function target_amount_inflation_rate_value(){
	$targetamount_inflation_rate = $("#target-amount-rate-of-inflation").val()    
	var max = $("#target-amount-year-slide").slider("option", "max");
		if ($targetamount_inflation_rate > max) {
			$('#target-amount-rate-of-inflation').val(max)
		}
	
	
	$("#target-amount-inflation-intrest-slide").slider({
		range: "min",
		min: 0,
		max: 10,
		step:0.1,
		value: $targetamount_inflation_rate,
		slide: function(event, ui) {
			$("#target-amount-inflation-intrest").text(ui.value);
			$("#target-amount-rate-of-inflation").val(ui.value)
			targetamountcalculate();
		}
	});
		$("#target-amount-inflation-intrest").text($("#target-amount-inflation-intrest-slide").slider("value"));
		$("#target-amount-rate-of-inflation").val($("#target-amount-inflation-intrest-slide").slider("value"));
		targetamountcalculate();
		target_amount_chart_render(); 
}


function target_amount_chart_render()
{
	var options = target_amount_chart_options();
	Highcharts.chart('target-amount-chart',options);
		if($(window).width() <= 499){
			// Highcharts.chart('target-amount-chart',options).setSize(270,270);
		}
}

function target_amount_chart_options(){
	var target_amount_chart = parseInt($('#target-amount-show').text());
	var target_amount_growth_chart = $('#total-growth-amount').text().toString();
	var target_amount_new_growth_chart = parseFloat(target_amount_growth_chart.replace(/,/g,''))

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
				colors:['rgb(44, 175, 254)','rgb(109, 104, 222)'],
				tooltip: {
             pointFormat: '{series.name}: <b>${point.y}</b>'
             },
					plotOptions: {
					pie: {
                        allowPointSelect: true,
                         cursor: 'pointer',
              dataLabels: {
                               enabled: true,
                               format: '<b>{point.name}</b>:${point.y}'
            }
           }
				},
			
				series: [{
					type: 'pie',
					name: '',
					innerSize: '1%',
					data: [
						{name:' Amount', y:target_amount_chart},
						{name:' Growth', y:target_amount_new_growth_chart},
					]
				}]
			};
	return options;
}

   function target_amount_value() {
		$text_val=$('#target-amount-input').val().toString()
		$target_amount_input_value = $text_val.replace(/,/g,'')
		
		// var input_value = $('#target-amount-input').val()
		console.log($.isNumeric($target_amount_input_value))
		console.log($target_amount_input_value)
				
		if ($.isNumeric($target_amount_input_value) == false) {
			$('#target-amount-input').val($('#target-amount-show').text())
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