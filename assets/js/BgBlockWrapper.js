class BgBlockWrapper {
	constructor() {
		this.init();
	}

	init() {
		const programIntro = document.querySelector(
			'.wp-block-domca-program-intro',
		);
		if (!programIntro) {
			return;
		}

		const whatIDoToday = programIntro.nextElementSibling;
		if (
			!whatIDoToday ||
			!whatIDoToday.classList.contains('wp-block-domca-what-i-do-today')
		) {
			return;
		}

		const wrapper = document.createElement('div');
		programIntro.parentNode.insertBefore(wrapper, programIntro);

		wrapper.appendChild(programIntro);
		wrapper.appendChild(whatIDoToday);

		const introStyles = window.getComputedStyle(programIntro);
		const backgroundImage = introStyles.backgroundImage;

		if (backgroundImage && backgroundImage !== 'none') {
			wrapper.style.backgroundImage = backgroundImage;
			programIntro.style.backgroundImage = 'none';
		}

		wrapper.style.backgroundPosition = 'top center';
		wrapper.style.backgroundRepeat = 'repeat';
		wrapper.style.backgroundSize = '100% auto';
	}
}

export default BgBlockWrapper;
