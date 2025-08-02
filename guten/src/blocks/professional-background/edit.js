import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import QuoteBgSvg from '../home-testimonial-lead-magnet/QuoteBgSvg.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, quoteIntro, quote, textOne, textTwo } = attributes;

	const baseClass = 'wp-block-domca-professional-background';

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
					<div className={`${baseClass}__content`}>
						<div className={`${baseClass}__quote`}>
							<QuoteBgSvg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__quote-intro`}
								value={`${quoteIntro}`}
								onChange={(newQuoteIntro) =>
									setAttributes({ quoteIntro: newQuoteIntro })
								}
								placeholder="Quote Intro..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__quote-text`}
								value={`${quote}`}
								onChange={(newQuote) =>
									setAttributes({ quote: newQuote })
								}
								placeholder="Quote..."
							/>
						</div>
						<div className={`${baseClass}__content_text`}>
							<RichText
								tagName="p"
								value={`${textOne}`}
								onChange={(newTextOne) =>
									setAttributes({ textOne: newTextOne })
								}
								placeholder="Text..."
							/>
							<RichText
								tagName="p"
								value={`${textTwo}`}
								onChange={(newTextTwo) =>
									setAttributes({ textTwo: newTextTwo })
								}
								placeholder="Text..."
							/>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
