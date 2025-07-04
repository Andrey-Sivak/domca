(function () {
	const elements = {
		header: document.querySelector('#dm-header'),
		testimonialGallery: document.querySelector(
			'.wp-block-domca-testimonial-gallery__gallery',
		),
	};

	if (elements.header) {
		import('./Header.js').then(({ default: Header }) => new Header());
	}

	if (elements.testimonialGallery) {
		import('./TestimonialGallery.js').then(
			({ default: TestimonialGallery }) => new TestimonialGallery(),
		);
	}
})();
