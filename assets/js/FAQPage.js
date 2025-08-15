class FAQPage {
	constructor() {
		this.faqContainer = document.querySelector('.wp-block-domca-faq');
		if (!this.faqContainer) return;

		this.prebuilt = this.faqContainer.querySelector(
			'#wp-block-domca-faq__prebuilt',
		);
		if (!this.prebuilt) return;

		this.insertionPoint = document.querySelector(
			'.wp-block-domca-faq-head-info',
		);

		this.init();
	}

	init() {
		this.faqContainer.addEventListener('click', (event) => {
			const clickedItem = event.target.closest(
				'.wp-block-domca-faq__item',
			);
			if (clickedItem) {
				this.handleItemClick(clickedItem);
			}
		});
	}

	handleItemClick(item) {
		const itemId = item.dataset.id;
		if (!itemId) return;

		const newSection = this.createOrUpdateSectionFromPrebuilt(itemId);
		if (!newSection) return;

		requestAnimationFrame(() => {
			newSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
		});
	}

	createOrUpdateSectionFromPrebuilt(sectionId) {
		const existingSection = document.querySelector('.domca-faq__section');
		if (existingSection) existingSection.remove();

		const templateSection = this.prebuilt.querySelector(
			`.domca-faq__section-tpl[data-id="${sectionId}"]`,
		);

		if (!templateSection) return null;

		const clone = templateSection.cloneNode(true);

		clone.classList.remove('domca-faq__section-tpl');
		clone.classList.add('domca-faq__section');
		clone.classList.add('dm-wrap');

		if (this.insertionPoint) {
			this.insertionPoint.after(clone);
		} else {
			this.faqContainer.appendChild(clone);
		}

		this.attachQuestionToggles(clone);

		return clone;
	}

	attachQuestionToggles(sectionRoot) {
		const questions = sectionRoot.querySelectorAll(
			'.domca-faq__section__question',
		);
		questions.forEach((q) => {
			q.addEventListener('click', this.handleQuestionClick);
		});
	}

	handleQuestionClick(event) {
		const item = event.currentTarget.closest('.domca-faq__section__item');
		if (item) item.classList.toggle('dm-active');
	}
}

export default FAQPage;
