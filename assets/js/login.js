// correct password is `password` lol

const l = (s, o = document) => o.querySelector(s);
const ll = (s, o = document) => o.querySelectorAll(s);

const login = l("#login-form");
const usernameContainer = l(".username", login);
const username = l("input", usernameContainer);
const passwordContainer = l(".password", login);
const password = l("input", passwordContainer);
const passwordList = l(".dots", passwordContainer);
const submit = l("button", login);
const URL = "http://localhost/teachmenow/";

password.addEventListener("input", (e) => {
	if (password.value.length > ll("i", passwordList).length) {
		passwordList.appendChild(document.createElement("i"));
	}
	submit.disabled = !password.value.length;
	passwordContainer.style.setProperty(
		"--cursor-x",
		password.value.length * 10 + "px"
	);
});

let pressed = false;

password.addEventListener("keydown", (e) => {
	if (
		pressed ||
		login.classList.contains("processing") ||
		(password.value.length > 14 && e.keyCode != 8 && e.keyCode != 13)
	) {
		e.preventDefault();
	}
	pressed = true;

	setTimeout(() => (pressed = false), 50);

	if (e.keyCode == 8) {
		let last = l("i:last-child", passwordList);
		if (last !== undefined && last) {
			last.classList.add("remove");
			setTimeout(() => last.remove(), 50);
		}
	}
});

password.addEventListener("select", function () {
	this.selectionStart = this.selectionEnd;
});

login.addEventListener("submit", (e) => {
	e.preventDefault();

	if (!login.classList.contains("processing")) {
		login.classList.add("processing");

		const username1 = username.value;
		const password1 = password.value;
		console.log(username1);

		setTimeout(() => {
			$.ajax({
				url: URL + "api/admin/login",
				data: {
					username: username1,
					password: password1,
				},
				method: "POST",
				dataType: "JSON",
				success: function (response) {
					const message = response.message;
					console.log(message);
					let cls = message == "Success" ? "success" : "error";
					login.classList.add(cls);
					setTimeout(() => {
						login.classList.remove("processing", cls);
						if (cls == "error") {
							password.value = "";
							passwordList.innerHTML = "";
							submit.disabled = true;
						} else {
							console.log("logged in");
							window.location.href = URL + "admin/";
						}
					}, 2000);
					setTimeout(() => {
						if (cls == "error") {
							passwordContainer.style.setProperty("--cursor-x", 0 + "px");
						}
					}, 600);
				},
			});
		}, 1500);
	}
});
