class FAQPage {
	constructor() {
		this.dataContainer = document.querySelector(
			'#wp-block-domca-faq__data',
		);
		this.faqContainer = document.querySelector('.wp-block-domca-faq');

		this.sectionTemplate = document.querySelector('#faq-section-template');
		this.itemTemplate = document.querySelector(
			'#faq-question-item-template',
		);

		if (
			!this.dataContainer ||
			!this.faqContainer ||
			!this.sectionTemplate ||
			!this.itemTemplate
		) {
			return;
		}

		try {
			let rawValue = this.dataContainer.value;
			const tempTextarea = document.createElement('textarea');
			tempTextarea.innerHTML = rawValue;
			let correctedJSON = tempTextarea.value;
			correctedJSON = correctedJSON.replace(/[\u201C\u201D]/g, '"');
			this.faqData = JSON.parse(correctedJSON);
		} catch (error) {
			console.error(
				'Error parsing FAQ data:',
				error,
				this.dataContainer.value,
			);
			this.faqData = [];
			return;
		}

		this.insertionPoint = document.querySelector(
			'.wp-block-domca-faq-head-info',
		);

		this.init();
	}

	init() {
		if (!this.faqData || this.faqData.length === 0) {
			return;
		}

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
		if (!itemId) {
			return;
		}

		const selectedItemData = this.faqData.find(
			(data) => data.id.toString() === itemId,
		);

		if (selectedItemData) {
			this.createOrUpdateSection(selectedItemData);

			const newSection = document.querySelector('.domca-faq__section');

			if (newSection) {
				newSection.scrollIntoView({
					behavior: 'smooth',
					block: 'start',
				});
			}
		}
	}

	createOrUpdateSection(data) {
		const existingSection = document.querySelector('.domca-faq__section');
		if (existingSection) {
			existingSection.remove();
		}

		const sectionFragment = this.sectionTemplate.content.cloneNode(true);

		const titleElement = sectionFragment.querySelector(
			'.domca-faq__section__title',
		);
		const itemsContainer = sectionFragment.querySelector(
			'.domca-faq__section__items',
		);

		titleElement.textContent = data.title;

		if (data.questions && data.questions.length > 0) {
			data.questions.forEach((q, idx) => {
				const itemFragment = this.itemTemplate.content.cloneNode(true);

				const questionEl = itemFragment.querySelector(
					'.domca-faq__section__question',
				);

				const questionText = questionEl.querySelector(
					'.domca-faq__section__question_text',
				);
				const answerEl = itemFragment.querySelector(
					'.domca-faq__section__answer_text',
				);

				if (questionEl) {
					questionText.innerHTML = `${idx + 1}. ${q.question}`;
					questionEl.addEventListener(
						'click',
						this.handleQuestionClick,
					);
				}
				if (answerEl) {
					answerEl.innerHTML = q.answer;
				}

				itemsContainer.appendChild(itemFragment);
			});
		}

		if (this.insertionPoint) {
			this.insertionPoint.after(sectionFragment);
		} else {
			this.faqContainer.appendChild(sectionFragment);
		}
	}

	handleQuestionClick(event) {
		const item = event.currentTarget.parentElement;
		item.classList.toggle('dm-active');
	}
}

export default FAQPage;
