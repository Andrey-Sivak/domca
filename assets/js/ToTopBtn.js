class ToTopBtn {
	constructor() {
		this.button = document.querySelector('.dm-scroll-top-btn');
		this.scrollThreshold = window.innerHeight / 2;
		this.isVisible = false;

		if (!this.button) {
			return;
		}

		this.init();
	}

	init() {
		this.button.addEventListener('click', this.scrollToTop.bind(this));
		window.addEventListener('scroll', this.handleScroll.bind(this));
		window.addEventListener(
			'resize',
			this.updateScrollThreshold.bind(this),
		);

		this.handleScroll();
	}

	updateScrollThreshold() {
		this.scrollThreshold = window.innerHeight / 2;
	}

	handleScroll() {
		const scrollTop =
			window.pageYOffset || document.documentElement.scrollTop;

		if (scrollTop > this.scrollThreshold && !this.isVisible) {
			this.showButton();
		} else if (scrollTop <= this.scrollThreshold && this.isVisible) {
			this.hideButton();
		}
	}

	showButton() {
		this.isVisible = true;
		this.button.style.opacity = '1';
		this.button.style.visibility = 'visible';
	}

	hideButton() {
		this.isVisible = false;
		this.button.style.opacity = '0';
		this.button.style.visibility = 'hidden';
	}

	scrollToTop() {
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		});
	}
}

export default ToTopBtn;
