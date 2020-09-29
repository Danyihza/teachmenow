const URL = "https://teachmenow.biz.id/";

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

// About Us
$(document).on("click", "#confirm_aboutus", function () {
	const id = $("#id_section_aboutus").val();
	const title = $("#title_aboutus").val();
	const content_1 = $("#heading1_aboutus").val();
	const content_2 = $("#heading2_aboutus").val();
	const content_3 = $("#lfticon_aboutus").val();
	const content_4 = $("#lfticondsc_aboutus").val();
	const content_5 = $("#rghticon_aboutus").val();
	const content_6 = $("#rghticondsc_aboutus").val();
	const content_7 = $("#mdlicon_aboutus").val();
	const content_8 = $("#mdlicondsc_aboutus").val();

	$.ajax({
		url: URL + "api/admin/updateData",
		method: "POST",
		data: {
			id: id,
			title: title,
			content_1: content_1,
			content_2: content_2,
			content_3: content_3,
			content_4: content_4,
			content_5: content_5,
			content_6: content_6,
			content_7: content_7,
			content_8: content_8,
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

// Features
$(document).on("click", "#confirm_features", function () {
	const id = $("#id_section_features").val();
	const title = $("#title_features").val();
	const content_1 = $("#heading1_features").val();
	const content_2 = $("#icon1_features").val();
	const content_3 = $("#icon1dsc_features").val();
	const content_4 = $("#icon2_features").val();
	const content_5 = $("#icon2dsc_features").val();
	const content_6 = $("#icon3_features").val();
	const content_7 = $("#icon3dsc_features").val();
	const content_8 = $("#icon4_features").val();
	const content_9 = $("#icon4dsc_features").val();

	$.ajax({
		url: URL + "api/admin/updateData",
		method: "POST",
		data: {
			id: id,
			title: title,
			content_1: content_1,
			content_2: content_2,
			content_3: content_3,
			content_4: content_4,
			content_5: content_5,
			content_6: content_6,
			content_7: content_7,
			content_8: content_8,
			content_9: content_9,
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

// Screenshot
$(document).on("click", "#confirm_screenshot", function () {
	const id = $("#id_section_screenshot").val();
	const title = $("#title_screenshot").val();
	const content_1 = $("#heading1_screenshot").val();
	const content_2 = $("#heading2_screenshot").val();

	$.ajax({
		url: URL + "api/admin/updateData",
		method: "POST",
		data: {
			id: id,
			title: title,
			content_1: content_1,
			content_2: content_2,
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
