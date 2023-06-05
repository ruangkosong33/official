if ($("#sip-calculator-sinace").length) {
	jQuery (function( $ ) {
		if ($(".scroll-to-chart").length) {
			$(".scroll-to-chart").on("click",function (){
				$target  = $(this).data('target')
				// console.log($target)
				$('html,body').animate(
				{
					scrollTop: $("#sip-chart-amortization").offset().top-200
				},1000);

				return false
			})
		}       
		var months_arr = ['January', 'Fabuary', 'March','April','May','June','July','August','September','October','November','December'];
		var date = new Date();
		let year_no = date.getFullYear();
		let month_no = date.getMonth();     

		let month = months_arr[month_no];
		$('#start-date').val(month +' '+year_no)


		// emi-principal-slide

		sip_principal_value()

		$("#sip-principal-input").on("keyup",function(event){
			$principal_slider_value = $("#sip-principal-input").val();

			if (event.keyCode === 13) {
				sip_principal_value($principal_slider_value);
			}
		})
		$("#sip-principal-input").blur(function(){
			$principal_slider_value = $("#sip-principal-input").val();
			sip_principal_value($principal_slider_value)
			
		})

		// emi-year-slider

		// sip_year_value()

		

		$("#sip-year-slide").slider({
		range:"min",
		min:1,
		max:40,
		value:10,
		step:1,
		slide: function(event, ui) {
			$("#sip-totalyear-show").text(ui.value);
			$("#sip-year-input").val(ui.value);
		},
		change: function(event, ui) {
			sipcalculate()
		}
	})
	$("#sip-totalyear-show").text($("#sip-year-slide").slider("value"));
	$("#sip-year-input").val($("#sip-year-slide").slider("value"));
	

		$("#sip-year-input").on("keyup",function(event){
			if (event.keyCode === 13) {
				sip_year_value();
			}
		})

		$("#sip-year-input").blur(function(){
				sip_year_value();
		})


		// sip-rate-input

	$("#sip-interest-slide").slider({
		range:"min",
		min:1,
		max:30,
		value:8,
		step:0.1,
		slide: function(event, ui){
			$("#sip-interest-show").text(ui.value);
			$("#sip-rate-input").val(ui.value);
		},
		change: function(event, ui) {
			sipcalculate()
		}
	})
	$("#sip-interest-show").text($("#sip-interest-slide").slider("value"));
	$("#sip-rate-input").val($("#sip-interest-slide").slider("value"));
		

		$("#sip-rate-input").on("keyup",function(event){
			if (event.keyCode === 13) {
				sip_interest_value();
			}
		})

		$("#sip-rate-input").blur(function(){
			sip_interest_value();
		})

	sipcalculate();
	});
}
	

function sipcalculate()
{
	var numberOfMonths=parseInt(jQuery("#sip-totalyear-show").text() * 12); // count total month..
	var sipamount=parseInt(jQuery("#sip-principal-show").text());           // show choose sip amount
	var rateOfInterest=parseInt(jQuery("#sip-interest-show").text());       // show choose rateofinterest

//---- calculation-start----//
	var monthlyInterestRatio = (rateOfInterest/100)/12;            
	var top = Math.pow((1+monthlyInterestRatio), numberOfMonths);
	var bottom = top -1;
	var dp=bottom/monthlyInterestRatio;
	var ip=(1+monthlyInterestRatio);
	var investamount=(sipamount*numberOfMonths);//invested amount
	var expectedamount =sipamount*dp*ip; //Expected Amount
	var wealthgained = expectedamount-investamount; //Wealth Gained``	
//---- calculation-end-----/

	var sp = top / bottom;
	var emi = ((sipamount * monthlyInterestRatio) * sp);

	var int_pge = (wealthgained / expectedamount) * 100;
	var investamount_str = investamount.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	var expectedamount_str = expectedamount.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	var wealthgained_str = wealthgained.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	$input_principal = $("#sip-principal-input").val().toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");   

	// var sipamount_str = sipamount.toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	jQuery("#monthly-sip").html(investamount_str);
	jQuery("#total-interest").html(wealthgained_str);
	jQuery("#total-amount").html(expectedamount_str);
	jQuery("#sip-principal-input").val($input_principal);

	amortization_calculator(sipamount,emi,rateOfInterest)

	$('.datepicker').datepicker({
		autoclose: true,
		format: 'MM yyyy',
		minViewMode: 1,
	})  

	$('#start-date').change(function(){
		amortization_calculator(sipamount,emi,rateOfInterest)
	})
}


function sip_principal_value($sip_principal_value2=1000 ){
	$text_val=$sip_principal_value2.toString()
	$new_text_val = parseInt($text_val.replace(/,/g,''))
	$("#sip-principal-slide").slider({
		range:"min",
		min:500,
		max:200000,
		value:$new_text_val,
		step:500,
		slide: function(event, ui) {
			$("#sip-principal-show").text(ui.value);
			$("#sip-principal-input").val(ui.value);
		},
		change: function(event, ui) {
			sipcalculate()
		}
	})
	// console.log( $new_text_val)
	$("#sip-principal-show").text($("#sip-principal-slide").slider("value"));
	$("#sip-principal-input").val($("#sip-principal-slide").slider("value"));
	sipcalculate()
}
function sip_year_value() {
	$loan_year = $("#sip-year-input").val()
	$("#sip-year-slide").slider({
		range:"min",
		min:1,
		max:40,
		value:$loan_year,
		step:1,
		slide: function(event, ui) {
			$("#sip-totalyear-show").text(ui.value);
			$("#sip-year-input").val(ui.value);
		},
		change: function(event, ui) {
			sipcalculate()
		}
	})
	
	$("#sip-totalyear-show").text($("#sip-year-slide").slider("value"));
	$("#sip-year-input").val($("#sip-year-slide").slider("value"));
	sipcalculate()
}
function sip_interest_value() {
	$sip_loan_rate = $("#sip-rate-input").val()
	$("#sip-interest-slide").slider({
		range:"min",
		min:1,
		max:30,
		value:$sip_loan_rate,
		step:0.1,
		slide: function(event, ui){
			$("#sip-interest-show").text(ui.value);
			$("#sip-rate-input").val(ui.value);
		},

		change: function(event, ui) {
			sipcalculate()
		}

	})
	$("#sip-interest-show").text($("#sip-interest-slide").slider("value"));
	$("#sip-rate-input").val($("#sip-interest-slide").slider("value"));
	sipcalculate()
}

function amortization_calculator(sipamount,investamount,rate,numberOfMonths,wealthgained) {

	var start_date = $('#start-date').val();
	var months_arr = ['January', 'Fabuary', 'March','April','May','June','July','August','September','October','November','December'];
	var date = new Date(start_date);
	let month_no = date.getMonth();
	let year_no = date.getFullYear();
	i = rate/100;

	let content = '';
	
	let current_balance = sipamount;
	let total_interest = 0;
	
	let payment_counter_arr = [];
	let principal_paid_arr=[];
	let toward_interest_arr=[];
	

	var numberOfMonths=parseInt(jQuery("#sip-totalyear-show").text() * 12); // count total month..
	

	var ii=1;		
    var kk=0;
	
	content += '<div class="amortization-column-outer">';
	content += '<div class="amortization-column sum">';
	content += '<div class="amortization-data year-outer"><i class="fas fa-plus-circle"></i><span>'+year_no+'</span></div>';
	// content += '<div class="amortization-data month-show"></div>';

	content += '<div class="amortization-data principal-sum"></div>';
	content += '<div class="amortization-data interest-sum"></div>';
	content += '<div class="amortization-data total-payment-sum"></div>';

	content += '</div>';
	content += '<div class="amortization-column-inner">';
 		var sip_total_new=0;


	while(current_balance > 0){
	let month = months_arr[month_no];
	let payment_counter = month +' '+ year_no;  // show MonthName & YearNo
	let toward_interest = (i/12)*current_balance ; // this calculates the portion of monthly payment that goes toward the interest
          

        var to_wealthgain=(numberOfMonths/wealthgained);
		let toward_balance = investamount - toward_interest;
		total_interest += toward_interest;
		current_balance -= toward_balance;
        sip_paid =sipamount*ii;// sip_paid  sip invest amount     
    
	    var Sip_rateOfInterest=parseInt(jQuery("#sip-interest-show").text());       // show choose rateofinteres
	    var Sip_monthlyInterestRatio = (Sip_rateOfInterest/100)/12;  // value of i

	    var sip_top = Math.pow((1+Sip_monthlyInterestRatio), ii);  

	    var sip_bottom = sip_top -1;
	    var sip_dp=sip_bottom/Sip_monthlyInterestRatio;
    	var sip_ip=(1+Sip_monthlyInterestRatio);
	    var sip_investamount=(sipamount);//invested amount
	    var sip_expectedamount =sipamount*sip_dp*sip_ip; //Expected Amount
	    var io=sipamount*ii;

     	var sip_wealthgained = Math.round((sip_expectedamount-io)); //Wealth Gained

     	var sip_expectedamount_str = sip_expectedamount.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");     	
     	var sip_wealthgained_str = sip_wealthgained.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");


        var sip_total=io+sip_wealthgained;  // Total Payment
		var sip_paid_str = sip_paid.toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");//sip_paid_str
  		var investamount_str = sip_total.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

         if(ii<=numberOfMonths){
		content += '<div class="amortization-column">';
		content += '<div class="amortization-data year">'+payment_counter+''+" "+''+ " "+'<div class="tooltipe"> <i class="fa fa-sharp fa-solid fa-star-of-life"></i> <span class="tooltiptext"> '+kk+''+"Year"+''+" - " +''+ii+''+" Months"+' </span> </div> </div>'; 
	
		if(month_no==11 || ii==numberOfMonths)
		{
			content += '<div class="amortization-data principal principal-last">$<span>'+sip_paid_str+'</span></div>';  //sip_paid sip invest amount
			content += '<div class="amortization-data interest  interest-last">$<span>'+sip_wealthgained_str+'</span></div>'; //wealthgain
			content += '<div class="amortization-data total-payment last-month-val">$<span>'+investamount_str+'</span></div>';//TotalAmount

		}
		else{
		content += '<div class="amortization-data principal">$<span>'+sip_paid_str+'</span></div>';  //sip_paid sip invest amount
		content += '<div class="amortization-data interest">$<span>'+sip_wealthgained_str+'</span></div>'; //wealthgain
        content += '<div class="amortization-data total-payment">$<span>'+investamount_str+'</span></div>';//TotalAmount
		}
		content += '</div>';
				
				}

		month_no++;

		if (month_no>=12) {
			month_no=0
			year_no++
			kk++
			content += '</div>';
			content += '</div>';
			content += '<div class=amortization-column-outer>';
			content += '<div class="amortization-column sum">';
			content += '<div class="amortization-data year-outer"><i class="fas fa-plus-circle"></i><span>'+year_no+'</span></div>';
			// content += '<div class="amortization-data month-show"></div>';
			content += '<div class="amortization-data principal-sum"></div>';
			content += '<div class="amortization-data interest-sum"></div>';
			content += '<div class="amortization-data total-payment-sum"></div>';
			content += '</div>';
			content += '<div class="amortization-column-inner">';
	
		}
		ii++;	
	
	}



	$('.amortization-content').html(content)

	$('.amortization-column-outer').each(function(){
		if($(this).find('.amortization-column-inner').html() == '')
		{
			$(this).remove()
		}
	})

	$('.amortization-column-outer').each(function(){

		var total_principal=0;
		var total_interest_yearly=0;
		var total_last_payment_month=0;

		var total_wealth_yearly=0;
		var total_last_sip_month=0;
		var total_payment_yearly=0;

		$(this).find('.amortization-column-inner .amortization-column').each(function(){
			

			


			if($(this).find(".last-month-val").length)
			{
		      //principal
                 var principal_int = $(this).find('.principal-last  span').html()
			     var new_principal_int = parseInt(principal_int.replace(/,/g,''))
			     total_principal += new_principal_int

			 //interest
			     var interest_int=$(this).find(".interest-last span").html()
			     var new_interest_int=parseInt(interest_int.replace(/,/g,''))
			     total_interest_yearly += new_interest_int

				 total_last_sip_month=$(this).find(".principal-last span").html();
		         total_payment_yearly=$(this).find(".last-month-val span").html();
		         total_wealth_yearly=$(this).find(".interest-last span").html();

			}
			
		})
		var total_principal_str = total_principal.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",")

        
		$(this).find('.principal-sum').html('$<span>'+total_last_sip_month+'</span>')
		$(this).find('.interest-sum').html('$<span>'+total_wealth_yearly+'</span>')
		$(this).find(".total-payment-sum").html('$<span>'+total_payment_yearly+'</span>')               
		// $(this).find(".month-show").html('$<span>'+total_payment_yearly+'</span>')               

		year_no = $(this).find('.year-outer span').html()
		payment_counter_arr.push(year_no);
		principal_paid_arr.push(Math.floor(total_principal));
		toward_interest_arr.push(Math.floor(total_interest_yearly));
		sip_chart_render(payment_counter_arr,principal_paid_arr,toward_interest_arr);   
		       
	})
		

        
	$('.amortization-column-inner').slideUp(0)
	$(".amortization-data.year-outer").on("click", function(){
		$(this).parent().siblings('.amortization-column-inner').slideToggle(500)
		$(this).find("i").toggleClass("fa-plus-circle")
		$(this).find("i").toggleClass("fa-minus-circle")

	})

}

function round(number, decimal_places){
	return(Math.round(number*Math.pow(10,decimal_places)) / Math.pow(10,decimal_places)).toFixed(decimal_places);
}


function sip_chart_render(payment_counter_arr,principal_paid_arr,toward_interest_arr)
{
	var options = {

		chart: {
				type: 'column'
		},

		title: {
				text: ''
		},

		xAxis: {
				categories: payment_counter_arr
		},

		yAxis: {
				allowDecimals: false,
				min: 0,
				title: {
						text: 'Balance' 
				},
				labels: {
					formatter: function () {
						return '$' + this.axis.defaultLabelFormatter.call(this);
					}
				}
		},

		tooltip: {
				formatter: function () {
					y_str = this.y.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
					stacktotal_str = this.point.stackTotal.toFixed(0).toString().replace(/,/g,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
						return '<b>Year: ' + this.x + '</b><br/>' +
								this.series.name + ': $' + y_str + '<br/>' +
								'Total Payment: $' + stacktotal_str;
				}
		},

		plotOptions: {
				column: {
						stacking: 'normal'
				}
		},

		series: [{
				name: 'Interest',
				data: toward_interest_arr,
				color : '#f7c35f'
		}, {
				name: 'Principal',
				data: principal_paid_arr,
				color : 'var(--sinace-base)'
		}]
};
	Highcharts.chart('sip-chart-amortization',options);
	Highcharts.setOptions({
		lang: {
			numericSymbols: null,
			thousandsSep: ','
		}
	});
}

function onlynumeric(event)
{
	var x = event.which || event.keycode;
	if((x>=48 && x<=57 || x==46)){
		return true;
	}
	else
		return false;

}