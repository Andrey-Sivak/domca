import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import Item1Bg from './Item1Bg.js';
import Item2Bg from './Item2Bg.js';
import Item3Bg from './Item3Bg.js';
import Item4Bg from './Item4Bg.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, subtitle, item1, item2, item3, item4, text } = attributes;

	const baseClass = 'wp-block-domca-personal-journey';

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
					<div className={`${baseClass}__items`}>
						<div className={`${baseClass}__item`}>
							<Item1Bg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__item-title`}
								value={item1}
								onChange={(newItem) =>
									setAttributes({
										item1: newItem,
									})
								}
								placeholder="Item 1..."
							/>
						</div>
						<div className={`${baseClass}__item`}>
							<Item2Bg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__item-title`}
								value={item2}
								onChange={(newItem) =>
									setAttributes({
										item2: newItem,
									})
								}
								placeholder="Item 2..."
							/>
						</div>
						<div className={`${baseClass}__item`}>
							<Item3Bg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__item-title`}
								value={item3}
								onChange={(newItem) =>
									setAttributes({
										item3: newItem,
									})
								}
								placeholder="Item 3..."
							/>
						</div>
						<div className={`${baseClass}__item`}>
							<Item4Bg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__item-title`}
								value={item4}
								onChange={(newItem) =>
									setAttributes({
										item4: newItem,
									})
								}
								placeholder="Item 4..."
							/>
						</div>
					</div>

					<RichText
						tagName="p"
						className={`${baseClass}__text`}
						value={text}
						onChange={(newText) => setAttributes({ text: newText })}
						placeholder="Input text..."
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
