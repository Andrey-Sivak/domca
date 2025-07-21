import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import QuoteBg from './QuoteBg.js';
import BenefitList from './BenefitList.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		title,
		subtitle,
		quote,
		benefitsTitle,
		benefit1,
		benefit2,
		benefit3,
		ctaText,
	} = attributes;

	const baseClass = 'wp-block-domca-new-year-reset';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<RichText
						tagName="p"
						className={`${baseClass}__title dm-heading dm-heading-h2`}
						value={title}
						onChange={(newTitle) =>
							setAttributes({ title: newTitle })
						}
						placeholder="Input section title..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__subtitle`}
						value={subtitle}
						onChange={(newSubtitle) =>
							setAttributes({ subtitle: newSubtitle })
						}
						placeholder="Input section subtitle..."
					/>
					<div className={`${baseClass}__quote`}>
						<RichText
							className={`${baseClass}__quote-text`}
							tagName="p"
							value={quote}
							onChange={(newQuote) =>
								setAttributes({ quote: newQuote })
							}
							placeholder="Quote..."
						/>
						<QuoteBg baseClass={baseClass} />
					</div>
					<BenefitList
						benefitsTitle={benefitsTitle}
						baseClass={baseClass}
						setAttributes={setAttributes}
						benefit1={benefit1}
						benefit2={benefit2}
						benefit3={benefit3}
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__cta-text`}
						value={ctaText}
						onChange={(newCtaText) =>
							setAttributes({ ctaText: newCtaText })
						}
						placeholder="CTA text..."
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
