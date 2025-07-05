import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';

class ReviewsSlider {
	initSlidesCount = 3;

	constructor() {
		this.slider = document.querySelector(
			'.wp-block-domca-reviews-slider__list',
		);

		if (!this.slider) return;

		this.init();
	}

	init() {
		const slideCount = this.slider.querySelectorAll('.swiper-slide').length;

		if (slideCount <= this.initSlidesCount) return;

		new Swiper(this.slider, {
			modules: [Pagination],
			slidesPerView: this.initSlidesCount,
			spaceBetween: 30,
			loop: slideCount > this.initSlidesCount + 1,
			pagination: {
				el: '.wp-block-domca-reviews-slider__pagination',
				clickable: true,
			},
			breakpoints: {
				320: { slidesPerView: 1 },
				450: { slidesPerView: 1.35 },
				767: { slidesPerView: 2 },
				1024: { slidesPerView: this.initSlidesCount },
			},
		});
	}
}

export default ReviewsSlider;
