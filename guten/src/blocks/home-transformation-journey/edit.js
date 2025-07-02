import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import ItemList from './ItemList.js';
import './editor.scss';
import LinkEditor from '../../utils/LinkEditor.js';
import DecorSvg from './DecorSvg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, subtitle, items, button, testimonialQuote } = attributes;

	const baseClass = 'wp-block-domca-home-transformation-journey';

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

					<ItemList
						items={items}
						setAttributes={setAttributes}
						baseClass={baseClass}
					/>

					<LinkEditor
						url={button.url}
						target={button.target}
						onChange={(newValue) =>
							setAttributes({
								button: {
									...newValue,
									text: button.text,
								},
							})
						}
					>
						<RichText
							tagName="span"
							className={`${baseClass}__button dm-button dm-button-primary`}
							value={button.text}
							onChange={(newButtonText) =>
								setAttributes({
									button: {
										...button,
										text: newButtonText,
									},
								})
							}
							placeholder="Button text..."
							allowedFormats={[]}
						/>
					</LinkEditor>

					<div className={`${baseClass}__testimonial-quote`}>
						<RichText
							tagName="p"
							value={testimonialQuote}
							onChange={(newTestimonialQuote) =>
								setAttributes({
									testimonialQuote: newTestimonialQuote,
								})
							}
							placeholder="Testimonial Quote..."
						/>
						<DecorSvg baseClass={baseClass} />
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
