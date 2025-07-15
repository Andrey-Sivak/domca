import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import ItemList from './ItemList.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, subtitle, introText, steps, closingText } = attributes;

	const baseClass = 'wp-block-domca-seasonal-resets-section';

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
					<RichText
						tagName="p"
						className={`${baseClass}__intro-text`}
						value={introText}
						onChange={(newIntroText) =>
							setAttributes({ introText: newIntroText })
						}
						placeholder="The 3 Seasonal Resets:"
					/>

					<ItemList
						setAttributes={setAttributes}
						baseClass={baseClass}
						items={steps}
					/>

					<RichText
						tagName="p"
						className={`${baseClass}__closing-text`}
						value={closingText}
						onChange={(newClosingText) =>
							setAttributes({ closingText: newClosingText })
						}
						placeholder="Closing Text..."
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
