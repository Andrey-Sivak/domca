import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';

class AboutSlider {
	initSlidesCount = 3;

	constructor() {
		this.slider = document.querySelector(
			'.wp-block-domca-about-slider__images',
		);

		if (!this.slider) return;

		this.init();
	}

	init() {
		const slideCount = this.slider.querySelectorAll('.swiper-slide').length;

		if (slideCount <= this.initSlidesCount) return;

		new Swiper(this.slider, {
			modules: [Pagination],
			slidesPerView: 3,
			spaceBetween: 30,
			loop: true,
			grabCursor: true,
			centeredSlides: false,
			pagination: {
				el: '.wp-block-domca-about-slider__pagination',
				clickable: true,
			},
			breakpoints: {
				320: {
					slidesPerView: 1.18,
					centeredSlides: true,
					spaceBetween: 10,
				},
				767: {
					slidesPerView: 2,
					centeredSlides: false,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 2.5,
					centeredSlides: false,
					spaceBetween: 30,
				},
				1280: {
					slidesPerView: this.initSlidesCount,
					centeredSlides: false,
					spaceBetween: 30,
				},
			},
		});
	}
}

export default AboutSlider;
