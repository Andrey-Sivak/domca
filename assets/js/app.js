(function () {
	const elements = {
		header: document.querySelector('#dm-header'),
	};

	if (elements.header) {
		import('./Header.js').then(({ default: Header }) => new Header());
	}
})();
