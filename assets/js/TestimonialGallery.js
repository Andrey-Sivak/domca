import Swiper from 'swiper';
import FsLightbox from 'fslightbox';
import {
	// Navigation, Autoplay,
	Pagination,
	EffectCoverflow,
} from 'swiper/modules';

class TestimonialGallery {
	// initSlidesCount = 6;

	constructor() {
		this.slider = document.querySelector(
			'.wp-block-domca-testimonial-gallery__gallery',
		);

		if (!this.slider) return;

		this.images = [...this.slider.querySelectorAll('img')];

		this.init();
	}

	init() {
		this.images.forEach(this.setupImage, this);
		refreshFsLightbox();

		const slideCount = this.slider.querySelectorAll('.swiper-slide').length;

		// if (slideCount < this.initSlidesCount) return;

		new Swiper(this.slider, {
			modules: [EffectCoverflow, Pagination /*Navigation, Autoplay*/],
			effect: 'coverflow',
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: 'auto',
			variableWidth: true,
			loop: true,
			coverflowEffect: {
				rotate: 0,
				stretch: -40,
				depth: slideCount < 8 ? 100 : 200,
				modifier: 1,
				slideShadows: false,
			},
			spaceBetween: 0,
			speed: 600,
			pagination: {
				el: '.wp-block-domca-testimonial-gallery__pagination',
				clickable: true,
			},
		});
	}

	setupImage(img) {
		if (img.closest('a[data-fancybox]')) return;

		const src = img.getAttribute('src');
		if (!src) return;

		const link = document.createElement('a');
		link.setAttribute('href', src);
		link.setAttribute('data-fslightbox', 'gallery');

		img.parentNode.insertBefore(link, img);
		link.appendChild(img);
	}
}

export default TestimonialGallery;
