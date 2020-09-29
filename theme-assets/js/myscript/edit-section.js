const URL = "http://localhost/teachmenow/";

// HOME
$(document).on("click", "#confirm_home", function () {
	const id = $("#id_section").val();
	const title = $("#title_home").val();
	const content_1 = $("#heading1_home").val();
	const content_2 = $("#heading2_home").val();
	const content_3 = $("#heading3_home").val();

	$.ajax({
		url: URL + "api/admin/updateData",
		method: "POST",
		data: {
			id: id,
			title: title,
			content_1: content_1,
			content_2: content_2,
			content_3: content_3,
		},
		dataType: "text",
		success: function (response) {
			$("#section-data").load(" #section-data");
			Swal.fire({
				position: "top-end",
				icon: "success",
				title: "Your work has been saved",
				showConfirmButton: false,
				timer: 1500,
			});
		},
	});
});


