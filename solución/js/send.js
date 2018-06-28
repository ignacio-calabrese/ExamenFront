$(document).on("ready", function() {
	//Mètodo jQuery ajax
	
	var petition = $("#dataForm").attr("action");
	var method = $("#dataForm").attr("method");
	$("#dataForm").on("submit", function(){
		$.ajax({
			beforeSend: function() {
				alert("Cargando");
			},
			url: petition,
			type: method,
			data: $("#dataForm").serialize(),
			success: function(response) {
				console.log(response)
			},
			error: function(jqXHR, status, error) {
				console.log(status);
				console.log(error);
			},
			complete: function(jqXHR, status) {
				console.log(status);
			},
			timeout:10000; 
		}); 
	});
	
	



	//Peticiones con el método POST

	/*
	var petición = $("#dataForm").attr("action");
	var information = $("#dataForm").serialize();
	$.post("index.html", petición, information, function(response, status, jqXHR) {
		console.log(response);
		console.log(status);
		console.log(jqXHR);
	});
	*/
});
