// contentId = 'one';
function getId(clicked_id) {
	contentId = clicked_id;
}

window.addEventListener('load', function() {
	const toggleGroup = document.getElementsByClassName('toggle');
	const toggleTabs = Array.from(toggleGroup);
	const contentGroup = document.getElementsByClassName(
		'toogle-content'
	);
	const contentItems = Array.from(contentGroup);

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
				default:
					contentId = 'one';
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
});

// Show an element
function show(elem) {
	elem.classList.add('active');
}

// Hide an element
function hide(elem) {
	elem.classList.remove('active');
}
