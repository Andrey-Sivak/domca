import scrollToElement from './utils/scrollToElement.js';

(function () {
	const origin = new URL(window.location.href).origin;

	const elements = {
		header: document.querySelector('#dm-header'),
		testimonialGallery: document.querySelector(
			'.wp-block-domca-testimonial-gallery__gallery',
		),
		reviewsSlider: document.querySelector(
			'.wp-block-domca-reviews-slider__list',
		),
		topicSlider: document.querySelector(
			'.wp-block-domca-topics-carousel__slides',
		),
		blocksToWrap:
			document.querySelector('.wp-block-domca-program-intro') &&
			document.querySelector('.wp-block-domca-what-i-do-today'),
		faqPage: document.querySelector('.dm-faq-page'),
		faqBlock: document.querySelector('.wp-block-domca-faq-block'),
		toTopBtn: document.querySelector('.dm-scroll-top-btn'),
		productFilter: document.querySelector(
			'.wp-block-domca-products-filter',
		),
		anchorButtons: [
			...document.querySelectorAll(
				`.dm-button a[href^="${origin}#"], .dm-button a[href^="#"]`,
			),
		],
		aboutSlider: document.querySelector(
			'.wp-block-domca-about-slider__images',
		),
	};

	if (elements.header) {
		import('./Header.js').then(({ default: Header }) => new Header());
	}

	import('./Animations.js').then(
		({ default: Animations }) => new Animations(),
	);

	if (elements.testimonialGallery) {
		import('./TestimonialGallery.js').then(
			({ default: TestimonialGallery }) => new TestimonialGallery(),
		);
	}

	if (elements.reviewsSlider) {
		import('./ReviewsSlider.js').then(
			({ default: ReviewsSlider }) => new ReviewsSlider(),
		);
	}

	if (elements.topicSlider) {
		import('./TopicSlider.js').then(
			({ default: TopicSlider }) => new TopicSlider(),
		);
	}

	if (elements.blocksToWrap) {
		import('./BgBlockWrapper.js').then(
			({ default: BgBlockWrapper }) => new BgBlockWrapper(),
		);
	}

	if (elements.faqPage) {
		import('./FAQPage.js').then(({ default: FAQPage }) => new FAQPage());
	}

	if (elements.faqBlock) {
		import('./FAQBlock.js').then(({ default: FAQBlock }) => new FAQBlock());
	}

	if (elements.toTopBtn) {
		import('./ToTopBtn.js').then(({ default: ToTopBtn }) => new ToTopBtn());
	}

	if (elements.productFilter) {
		import('./ProductFilter.js').then(
			({ default: ProductFilter }) =>
				new ProductFilter(elements.productFilter),
		);
	}

	if (elements.aboutSlider) {
		import('./AboutSlider.js').then(
			({ default: AboutSlider }) => new AboutSlider(),
		);
	}

	if (elements.anchorButtons.length) {
		elements.anchorButtons.forEach((button) =>
			button.addEventListener('click', (e) => {
				scrollToElement(e);

				if (document.body.classList.contains('mob-menu-active')) {
					document.body.classList.remove('mob-menu-active');
				}
			}),
		);
	}
})();
