$(document).ready(function() {
	

	var a = false;

	$(".fa-bars").click(function(event) {
		
		if(a==false){
			$("#mobile-menu").show();
			a=true;
		}else{
			$("#mobile-menu").hide();
			a=false;
		}

	});

});