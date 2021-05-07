(function($) {
	"use strict";

	jQuery(document).ready(function() {
		$("#contactform").on('submit',function(){
			var e = $(this).attr("action");
			return $("#message").slideUp(750, function() {
				$("#message").hide(), $("#submit").attr("disabled", "disabled"), $.post(e, {
					name: $("#name").val(),
					email: $("#email").val(),
					comments: $("#comments").val(),
					verify: $("#verify").val()
				}, function(e) {
					document.getElementById("message").innerHTML = e;
					$("#message").slideDown("slow");
					$("#contactform img.loader").fadeOut("slow", function() {
						$(this).remove();
					});
					$("#submit").removeAttr("disabled");
					null != e.match("success") && $("#contactform").slideUp("slow");
				})
			}), !1
		});

	});

})(jQuery);

/*!
* AerWebCopy Engine [version 6.3.0]
* Copyright Aeroson Systems & Co.
* File mirrored from https://irepute.in/js/contact.js
* At UTC time: 2021-05-07 02:16:07.371192
*/
