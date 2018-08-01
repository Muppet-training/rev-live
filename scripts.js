// contentId = 'one';
function getId(clicked_id) {
	contentId = clicked_id;
}

window.addEventListener('load', function() {
	const backGroup = document.getElementsByClassName('back');
	const backButtons = Array.from(backGroup);
	const toggleGroup = document.getElementsByClassName('toggle');
	const toggleTabs = Array.from(toggleGroup);
	const contentGroup = document.getElementsByClassName(
		'toogle-content'
	);
	const contentItems = Array.from(contentGroup);

	backButtons.forEach(function(tab) {
		tab.addEventListener('click', function() {
			let backId = tab.getAttribute('id');
			switch (backId) {
				case 'back1':
					contentId = 'p1';
					break;
				case 'back2':
					contentId = 'p2';
					break;
				case 'back3':
					contentId = 'p3';
					break;
				case 'back4':
					contentId = 'p4';
					break;
				case 'back5':
					contentId = 'p5';
					break;
				case 'back6':
					contentId = 'p6';
					break;
				default:
					contentId = 'footer';
			}
			let content = document.getElementById(contentId);
			let pitch = document.getElementById('pitch');
			if (!content.classList.contains('active')) {
				contentItems.forEach(function(item) {
					if (item === content) {
						show(item);
					} else {
						hide(item);
					}
				});
			} else {
				hide(content);
				show(pitch);
			}
		});
	});

	toggleTabs.forEach(function(tab) {
		tab.addEventListener('click', function() {
			let contentId = tab.getAttribute('id');
			switch (contentId) {
				case 'one':
					contentId = 'p1';
					break;
				case 'two':
					contentId = 'p2';
					break;
				case 'three':
					contentId = 'p3';
					break;
				case 'four':
					contentId = 'p4';
					break;
				case 'five':
					contentId = 'p5';
					break;
				case 'six':
					contentId = 'p6';
					break;
				default:
					contentId = 'footer';
			}
			let content = document.getElementById(contentId);
			let pitch = document.getElementById('pitch');
			if (!content.classList.contains('active')) {
				contentItems.forEach(function(item) {
					if (item === content) {
						show(item);
					} else {
						hide(item);
					}
				});
				if (pitch.classList.contains('active')) {
					hide(pitch);
				}
			} else {
				hide(content);
				show(pitch);
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
					"Please double check your URL.. <br> it doesn't seem to be correct";
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
