// ProductFilter: filtering for wp-block-domca-products-filter
// - Topic: single-select (buttons with data-filter-topic)
// - Tones: multi-select (buttons with data-filter-tone)
// - Cards: <article data-product ... data-topics="slug1 slug2" data-tone="tone-slug">

class ProductFilter {
	/**
	 * @param {HTMLElement} root Section element with class 'wp-block-domca-products-filter'
	 */
	constructor(root) {
		this.root = root;
		this.activeTopics = this._parseTokens(root.dataset.activeTopic || '');
		this.activeTones = this._parseTokens(root.dataset.activeTones || '');

		this.topicButtons = Array.from(
			this.root.querySelectorAll(
				'.wp-block-domca-products-filter__topic-btn',
			),
		);
		this.toneButtons = Array.from(
			this.root.querySelectorAll(
				'.wp-block-domca-products-filter__tone-btn',
			),
		);
		this.cards = Array.from(
			this.root.querySelectorAll(
				'.wp-block-domca-products-filter__product[data-product="1"]',
			),
		);

		// Precompute topics set per card for faster filtering.
		for (const card of this.cards) {
			const topicsStr = (card.getAttribute('data-topics') || '').trim();
			card._topics = this._parseTokens(topicsStr);
			card._tone = (card.getAttribute('data-tone') || '').trim();
		}

		this.init();
	}

	init() {
		window.Domca = window.Domca || {};
		window.Domca.ProductFilter = ProductFilter;

		this._ensureLiveRegion();
		this._ensureNoResults();

		this._bindEvents();
		this.applyFilter();
	}

	_bindEvents() {
		// Topic buttons: single-select
		for (const btn of this.topicButtons) {
			btn.addEventListener('click', (e) => {
				e.preventDefault();
				const slug = (
					btn.getAttribute('data-filter-topic') || ''
				).trim();
				if (!slug) return;

				const isActive = this.activeTopics.has(slug);

				if (isActive && this.activeTopics.size === 1) {
					const msg = options.topic_hint;
					this._showHint(btn, msg);
					this._announce(msg);
					return;
				}

				if (isActive) {
					this.activeTopics.delete(slug);
					btn.classList.remove('is-active');
					btn.setAttribute('aria-pressed', 'false');
				} else {
					this.activeTopics.add(slug);
					btn.classList.add('is-active');
					btn.setAttribute('aria-pressed', 'true');
				}

				this.root.dataset.activeTopic = Array.from(
					this.activeTopics,
				).join(' ');
				this.applyFilter();
			});
		}

		// Tone buttons: multi-select (checkbox-like)
		for (const btn of this.toneButtons) {
			btn.addEventListener('click', (e) => {
				e.preventDefault();
				const slug = (
					btn.getAttribute('data-filter-tone') || ''
				).trim();
				if (!slug) return;

				if (this.activeTones.has(slug)) {
					this.activeTones.delete(slug);
					btn.classList.remove('is-active');
					btn.setAttribute('aria-pressed', 'false');
					btn.setAttribute('aria-checked', 'false');
				} else {
					this.activeTones.add(slug);
					btn.classList.add('is-active');
					btn.setAttribute('aria-pressed', 'true');
					btn.setAttribute('aria-checked', 'true');
				}

				this.root.dataset.activeTones = Array.from(
					this.activeTones,
				).join(' ');
				this.applyFilter();
			});
		}
	}

	_ensureNoResults() {
		if (!this.cards || this.cards.length === 0) return;

		if (this.noResultsEl) return;

		const host =
			this.root.querySelector(
				'.wp-block-domca-products-filter__results',
			) || this.root;

		const grid = this.root.querySelector('[data-products-grid="1"]');

		const el = document.createElement('p');
		el.className = 'wp-block-domca-products-filter__no-results';
		el.setAttribute('role', 'status');
		el.hidden = true;

		el.textContent = options.no_results_products;

		if (grid && grid.parentNode) {
			grid.parentNode.insertBefore(el, grid.nextSibling);
		} else {
			host.appendChild(el);
		}

		this.noResultsEl = el;
	}

	_ensureLiveRegion() {
		if (this.liveRegion) return;
		const lr = document.createElement('div');
		lr.setAttribute('aria-live', 'polite');
		lr.setAttribute('role', 'status');
		lr.style.position = 'absolute';
		lr.style.width = '1px';
		lr.style.height = '1px';
		lr.style.margin = '-1px';
		lr.style.border = '0';
		lr.style.padding = '0';
		lr.style.clip = 'rect(0 0 0 0)';
		lr.style.overflow = 'hidden';
		this.root.appendChild(lr);
		this.liveRegion = lr;
	}

	_announce(message) {
		if (!this.liveRegion) return;
		this.liveRegion.textContent = '';
		setTimeout(() => {
			this.liveRegion.textContent = message;
		}, 0);
	}

	_showHint(btn, message) {
		btn.dataset.hint = message;
		btn.classList.add('has-hint');

		clearTimeout(btn.__hintTimer);
		btn.__hintTimer = setTimeout(() => {
			btn.classList.remove('has-hint');
			delete btn.dataset.hint;
		}, 1500);
	}

	applyFilter() {
		const topics = this.activeTopics; // Set
		const tones = this.activeTones; // Set

		let visibleCount = 0;

		for (const card of this.cards) {
			const matchesTopic =
				topics.size === 0 ||
				(card._topics && [...topics].some((t) => card._topics.has(t)));

			let matchesTone = true;
			if (tones.size > 0) {
				const toneSlug = card._tone;
				matchesTone = !!toneSlug && tones.has(toneSlug);
			}

			const visible = matchesTopic && matchesTone;
			card.hidden = !visible;
			if (visible) visibleCount++;
		}

		if (this.noResultsEl) {
			const shouldShow = visibleCount === 0;
			this.noResultsEl.hidden = !shouldShow;

			if (shouldShow) {
				this._announce(this.noResultsEl.textContent);
			}
		}
	}

	_parseTokens(str) {
		const out = new Set();
		if (!str) return out;
		for (const tok of str.split(/\s+/)) {
			const t = tok.trim();
			if (t) out.add(t);
		}
		return out;
	}
}

export default ProductFilter;
