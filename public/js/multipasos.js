$(document).ready(function() {
	var count = 0; // To Count Blank Fields
	var tabs=1;
	var pasos=1;
	/*------------ Validation Function-----------------*/
	$(".submit_btn").click(function(event) {
		var radio_check = $('.rdtipo'); // Fetching Radio Button By Class Name
		var input_field = $('.text_field'); // Fetching All Inputs With Same Class Name text_field & An HTML Tag textarea
		var text_area = $('textarea');
		// Validating Radio Button
		if (radio_check[0].checked == false && radio_check[1].checked == false) {
		    var y = 0;
		} else {
		      var y = 1;
		}
		// For Loop To Count Blank Inputs
		for (var i = input_field.length; i > count; i--) {
			if (input_field[i - 1].value == '' || text_area.value == '') {
				count = count + 1;
			} else {
				count = 0;
			}
		}
		// Notifying Validation
		/*if (count != 0 || y == 0) {
			alert("*All Fields are mandatory*");
			event.preventDefault();
		} else {
			return true;
		}*/
	});
	
	/*--------------------next----------------------------*/
	$(".next_btn").click(function(e) { // Function Runs On NEXT Button Click
		e.preventDefault();
		pasos++;
		console.log(pasos);
		if(pasos===2){
			$('gf').focus();
		}
		$(this).parent().next().fadeIn('slow');
		$(this).parent().css({
			'display': 'none'
	    });
		// Adding Class Active To Show Steps Forward;
	   $('.active').next().addClass('active');
	});
		
	/*__________________________back__________________________*/	
		$(".pre_btn").click(function(e) { // Function Runs On PREVIOUS Button Click
		e.preventDefault();
		pasos--;
		console.log(pasos);
		$(this).parent().prev().fadeIn('slow');
		$(this).parent().css({
		'display': 'none'
	});
		// Removing Class Active To Show Steps Backward;
		$('.active:last').removeClass('active');
		
		});
		// Validating All Input And Textarea Fields
		
	$('gf').blur(function(e){
		$('gm').focus();
	});
	$('gm').blur(function(e){
		$('gf').focus();
	});
	$(document).on('keyup',function(e){
		e.preventDefault();
		if(e.keyCode===9){
			if(tabs===1){
				$('gf').focus();
				tabs++;
				console.log('TABS: '+tabs);
			}else if(tabs===2){
				$('gm').focus();
				tabs--;
				console.log('TABS: '+tabs);
			}
			//var tabIndexKey =  document.activeElement.tabIndex-1;
            //$('[tabindex=' + tabIndexKey + ']').focus();

		}
	});
});