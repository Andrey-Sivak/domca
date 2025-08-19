class Form {
	form = null;
	submitBtn = null;
	// formUID = null;
	loaderContainer = null;
	successContainer = null;

	constructor(formContainer) {
		this.block = formContainer;
		if (!this.block) return;

		this.form = this.block.querySelector('.wpcf7-form');
		if (!this.form) return;

		this.submitBtn = this.form.querySelector('input[type="submit"]');
		// const actionAttr = this.form.getAttribute('action');
		// const formIdMatch = actionAttr.match(/#wpcf7-f(\d+)-\w\d+/);
		// this.formUID = formIdMatch
		// 	? formIdMatch[0]
		// 	: actionAttr.substring(actionAttr.lastIndexOf('/') + 1);
		this.loaderContainer = this.block.querySelector('.dm-form-loading');
		this.successContainer = this.block.querySelector('.dm-form-success');

		this.init();
	}

	// /contact-us/#wpcf7-f814-p818-o1
	// wpcf7-f811-p88-o1

	init() {
		this.submitBtn.addEventListener('click', () => {
			this.block.classList.add('dm-loading');
		});

		document.addEventListener('wpcf7mailsent', (e) => {
			// const formUID = e.detail.apiResponse.into;
			// if (formUID !== this.formUID) return;

			this.handleSuccess();
		});

		document.addEventListener('wpcf7mailfailed', (e) => {
			// const formUID = e.detail.apiResponse.into;
			// if (formUID !== this.formUID) return;

			this.block.classList.remove('dm-loading');
		});

		document.addEventListener('wpcf7invalid', (e) => {
			// const formUID = e.detail.apiResponse.into;
			// if (formUID !== this.formUID) return;

			this.block.classList.remove('dm-loading');
		});
	}

	handleSuccess() {
		this.block.classList.remove('dm-loading');
		setTimeout(() => {
			this.form.classList.add('init');
			this.form.classList.remove('invalid');
			this.block.classList.add('dm-success');
		}, 10);
	}
}

export default Form;
