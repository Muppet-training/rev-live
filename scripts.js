// contentId = 'one';
function getId(clicked_id) {
	contentId = clicked_id;
}

window.addEventListener('load', function() {
	const calcGroupT = document.getElementsByClassName('ct');
	const calcButtonsT = Array.from(calcGroupT);

	calcButtonsT.forEach(function(buttonT) {
		buttonT.addEventListener('click', function() {
			let buttonIdT = buttonT.getAttribute('id');

			switch (buttonIdT) {
				case 'chefT':
					displayT = '$1,400';
					infoT = 'Chef Cost Per Week';
					break;
				case 'locationT':
					displayT = '$5,321';
					infoT = 'Venue Rent / Morgage Per Month';
					break;
				case 'foodT':
					displayT = '$2.06';
					infoT = 'Ingredient Cost Per Recipe Serve';
					break;
				case 'compareT':
					displayT = '12%';
					infoT = 'Compare Recipe Profits';
					break;
				case 'supplyT':
					displayT = '8%';
					infoT = 'Find Reputable Suppliers';
					break;
				case 'profitT':
					displayT = '$16,752';
					infoT = 'Profit Projection Per Year';
					break;
				case 'equalsT':
					displayT = '$300';
					infoT = 'Cost of the time saved per recipe';
					break;
				default:
					displayT = '$16,752';
					infoT = 'Profit Projection Per Year';
			}

			document.getElementById('displayT').innerHTML = displayT;
			document.getElementById('infoT').innerHTML = infoT;

			if (buttonIdT == 'compareT') {
				document.getElementById('displayT').style.color =
					'#4fd040';
			} else {
				document.getElementById('displayT').style.color =
					'#343434';
			}
		});
	});

	const calcGroup = document.getElementsByClassName('cb');
	const calcButtons = Array.from(calcGroup);

	calcButtons.forEach(function(button) {
		button.addEventListener('click', function() {
			let buttonId = button.getAttribute('id');

			switch (buttonId) {
				case 'chef':
					display = '$1,400';
					info = 'Chef Cost Per Week';
					break;
				case 'location':
					display = '$5,321';
					info = 'Venue Rent / Morgage Per Month';
					break;
				case 'food':
					display = '$2.06';
					info = 'Ingredient Cost Per Recipe Serve';
					break;
				case 'compare':
					display = '12%';
					info = 'Compare Recipe Profits';
					break;
				case 'supply':
					display = '8%';
					info = 'Find Reputable Suppliers';
					break;
				case 'profit':
					display = '$16,752';
					info = 'Profit Projection Per Year';
					break;
				case 'equals':
					display = '$300';
					info = 'Cost of the time saved per recipe';
					break;
				default:
					display = '$16,752';
					info = 'Profit Projection Per Year';
			}

			document.getElementById('display').innerHTML = display;
			document.getElementById('info').innerHTML = info;

			if (buttonId == 'compare') {
				document.getElementById('display').style.color =
					'#4fd040';
			} else {
				document.getElementById('display').style.color =
					'#343434';
			}
		});
	});
});

// Show an element
function show(elem) {
	elem.classList.add('active');
}

// Hide an element
function hide(elem) {
	elem.classList.remove('active');
}

function toggle() {
	const toggle = document.getElementById('toggle');
	console.log('Toggle Clicked');

	let content = document.getElementById('content');
	if (!content.classList.contains('active')) {
		show(content);
	} else {
		hide(content);
	}
}

function calc() {
	const toggle = document.getElementById('chef');
	console.log('Chef Clicked');
}

function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function isURL(str) {
	var pattern = new RegExp(
		'^(https?:\\/\\/)?' + // protocol
		'((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|' + // domain name
		'((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
		'(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
		'(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
			'(\\#[-a-z\\d_]*)?$',
		'i'
	); // fragment locator
	return pattern.test(str);
}

/* Adds Element AFTER NeighborElement */
(Element.prototype.appendAfter = function(element) {
	element.parentNode.insertBefore(this, element.nextSibling);
}),
	false;

function resetErrorMessage(name) {
	var element = document.getElementById(name + '-error');
	if (element) {
		element.parentNode.removeChild(element);
	}
}

function displayErrorMessage(NewError, name) {
	NewError.className = 'error-message';
	NewError.id = name + '-error';
	NewError.appendAfter(document.getElementById(name));
}

function checkInput(e) {
	const { name, value } = e;

	switch (name) {
		case 'name':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'Sorry "Your Name" field cannot be left blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'company':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'Sorry the "Company" field cannot be left blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'email':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'We need your email to contact you.. <br> Sorry the "Email" field cannot be blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
				if (!validateEmail(value)) {
					console.log(value);
					console.log('Email isn"t valid');

					var NewError = document.createElement('div');
					NewError.innerHTML =
						"Please double check your email.. <br> it doesn't seem to be a valid email address";
					displayErrorMessage(NewError, name);
				} else {
					resetErrorMessage(name);
				}
				break;
			}
		case 'phone':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					'We need your number to contact you.. <br> Sorry the "Phone Number" field cannot be blank';
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'desire':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					"We are only valuable to you if we solve the problem you define here.. <br> This description is required.. <br> Even if it's just a sentence";
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'objective':
			resetErrorMessage(name);
			if (value.length < 1) {
				var NewError = document.createElement('div');
				NewError.innerHTML =
					"We are only valuable to you if we both know how you define success.. <br> This description is required.. <br> Even if it's just a sentence";
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
		case 'url':
			resetErrorMessage(name);
			if (!isURL(value)) {
				console.log(value);
				console.log('Email isn"t valid');

				var NewError = document.createElement('div');
				NewError.innerHTML =
					"Please double check your URL.. <br> it doesn't seem to be incorrect";
				displayErrorMessage(NewError, name);
			} else {
				resetErrorMessage(name);
			}
			break;
	}

	// if (value.length < 1) {
	// 	console.log('error');
	// 	var NewError = document.createElement('div');
	// 	NewError.innerHTML = 'The ' + name + ' field is required';
	// 	NewError.id = 'error-message';

	// 	NewError.appendAfter(document.getElementById(name));
	// }

	/* Typical Creation and Setup A New Orphaned Element Object */
}
