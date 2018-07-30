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
			console.log(content);
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
			console.log(content);
			console.log(pitch);
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
