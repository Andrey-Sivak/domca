class FAQBlock {
	constructor() {
		this.block = document.querySelector('.wp-block-domca-faq-block');
		if (!this.block) return;

		this.items = [
			...this.block.querySelectorAll('.wp-block-domca-faq-block__item'),
		];

		this.init();
	}

	init() {
		if (this.items.length) {
			this.items.forEach((item) => {
				const question = item.querySelector(
					'.wp-block-domca-faq-block__question',
				);
				if (question) {
					question.addEventListener(
						'click',
						this.handleQuestionClick,
					);
				}
			});
		}
	}

	handleQuestionClick(event) {
		const item = event.currentTarget.closest(
			'.wp-block-domca-faq-block__item',
		);
		if (item) item.classList.toggle('dm-active');
	}
}

export default FAQBlock;
