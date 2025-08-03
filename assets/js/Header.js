class Header {
	headerEl = document.querySelector('header#dm-header');
	scrollPrev = 0;

	constructor() {
		if (!this.headerEl) return;

		this.boundScrollHandler = this.scrollHandler.bind(this);
		this.boundMenuClickHandler = this.handleMenuClick.bind(this);

		this.menu = this.headerEl.querySelector('#dm-header-menu');

		this.mobBurgerBtn = document.querySelector('.mob-burger-btn');
		this.boundDisplayMobMenuHandler = this.displayMobMenu.bind(this);
		this.languageSwitcher = document.querySelector('.dm-languages');

		this.init();
	}

	init() {
		this.boundScrollHandler();
		window.addEventListener('scroll', this.boundScrollHandler);

		if (this.mobBurgerBtn) {
			this.mobBurgerBtn.addEventListener(
				'click',
				this.boundDisplayMobMenuHandler,
			);
		}

		if (this.languageSwitcher) {
			import('./LanguageSwitcher.js').then(
				({ default: LanguageSwitcher }) =>
					new LanguageSwitcher(this.languageSwitcher),
			);
		}

		if (this.menu) {
			this.menu.addEventListener('click', this.boundMenuClickHandler);
		}
	}

	isTouchDevice() {
		return window.matchMedia('(hover: none)').matches;
	}

	handleMenuClick(event) {
		const link = event.target.closest('a');

		if (!link) return;

		if (link.getAttribute('href') === '#') {
			event.preventDefault();
		}

		if (this.isTouchDevice()) {
			const menuItem = link.closest('li.menu-item-has-children');

			if (menuItem) {
				event.preventDefault();
				this.toggleSubmenu(menuItem);
			}
		}
	}

	toggleSubmenu(menuItem) {
		menuItem.classList.toggle('dm-active');
	}

	isHeaderHide(scrolled) {
		return scrolled > 100 && scrolled > this.scrollPrev;
	}

	isHeaderScrolled(scrolled) {
		return scrolled > 100;
	}

	scrollHandler() {
		const scrolled = window.scrollY;

		if (this.isHeaderHide(scrolled)) {
			this.headerEl.classList.add('dm-out');

			if (this.languageSwitcher.classList.contains('active')) {
				this.languageSwitcher.classList.remove('active');
			}
		} else {
			this.headerEl.classList.remove('dm-out');
		}

		if (this.isHeaderScrolled(scrolled)) {
			this.headerEl.classList.add('dm-scrolled');
		} else {
			this.headerEl.classList.remove('dm-scrolled');
		}

		this.scrollPrev = scrolled;
	}

	displayMobMenu() {
		document.body.classList.toggle('mob-menu-active');

		this.mobBurgerBtn.setAttribute(
			'aria-expanded',
			document.body.classList.contains('mob-menu-active'),
		);
	}
}

export default Header;
