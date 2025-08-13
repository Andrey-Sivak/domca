import BgBlockWrapper from './BgBlockWrapper.js';
import FAQPage from './FAQPage.js';

(function () {
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
		toTopBtn: document.querySelector('.dm-scroll-top-btn'),
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

	if (elements.toTopBtn) {
		import('./ToTopBtn.js').then(({ default: ToTopBtn }) => new ToTopBtn());
	}
})();
