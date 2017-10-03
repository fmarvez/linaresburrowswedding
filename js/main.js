(function() {

	$(document).ready(function() {
		$("#lb-rsvp").submit(function(e) {
			e.preventDefault();
			var guestNames = $("#guest-names").val();
			var numGuests = $("#guest-number").val();
			var attendingStatus = $("#attending-status").val();
			var formKey = "1QnjFG0I0yozwTTS5zvBZ7SWDAqXjpPtX1-e3st0XWDI";

			if(!validateData()) return;


			$.ajax({
				url: "/includes/submit.php",
				method: "POST",
				data: {
					//formkey: formKey,
					'guestNames': guestNames,
					'guestCount': numGuests,
					'attending': attendingStatus,
				},
		    statusCode: {
		        0: function() {
		        	validateData();
		        },
		        200: function() {
		        	console.log("success");
		        	$("#form-success").show();
		        	$("#form-entry").hide();
		        }
		    }
			});
		});
	});

	function validateData(){
		var guestNames = $("#guest-names").val();
		var numGuests = $("#guest-number").val();

		if(guestNames.length == 0 || numGuests.length == 0){
			$("#form-error-message").show();
			return false;
		} else {
			$("#form-error-message").hide();
			return true;
		}
		return true;
	}


})(jQuery);