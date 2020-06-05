const inputs = document.getElementsByTagName('input');
for (input of inputs) {
	input.addEventListener('keyup', function(e) {
		if (e.target.hasAttribute('aria-describedby')) {
			var idSmallError = e.target.getAttribute('aria-describedby');
			document.getElementById(idSmallError).innerText = '';
		}
	});
}

document.getElementById('form-connexion').addEventListener('button', function(e) {
	const inputs = document.getElementsByTagName('input');
	var error = false;
	for (input of inputs) {
		if (input.hasAttribute('aria-describedby')) {
			var idSmallError = input.getAttribute('aria-describedby');
			if (!input.value) {
				document.getElementById(idSmallError).innerText = 'Ce champ est obligatoire';
				error = true;
			}
		}
	}
	if (error) {
		e.preventDefault();
		return false;
	}
});
