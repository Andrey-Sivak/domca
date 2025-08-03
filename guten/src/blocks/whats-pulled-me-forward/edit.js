import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ItemOneImage from './ItemOneImage.js';
import ItemTwoImage from './ItemTwoImage.js';
import ItemThreeImage from './ItemThreeImage.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text, item1, item2, item3 } = attributes;

	const baseClass = 'wp-block-domca-whats-pulled-me-forward';

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
						<RichText
							tagName="p"
							className={`${baseClass}__text`}
							value={text}
							onChange={(newText) =>
								setAttributes({ text: newText })
							}
							placeholder="Input text..."
						/>
						<div className={`${baseClass}__items`}>
							<div className={`${baseClass}__item`}>
								<div className={`${baseClass}__item-icon`}>
									<ItemOneImage />
								</div>
								<RichText
									tagName="p"
									className={`${baseClass}__item-text`}
									value={item1}
									onChange={(newItem1) =>
										setAttributes({ item1: newItem1 })
									}
									placeholder="Women."
								/>
							</div>
							<div className={`${baseClass}__item`}>
								<div className={`${baseClass}__item-icon`}>
									<ItemTwoImage />
								</div>
								<RichText
									tagName="p"
									className={`${baseClass}__item-text`}
									value={item2}
									onChange={(newItem2) =>
										setAttributes({ item2: newItem2 })
									}
									placeholder="Connection."
								/>
							</div>
							<div className={`${baseClass}__item`}>
								<div className={`${baseClass}__item-icon`}>
									<ItemThreeImage />
								</div>
								<RichText
									tagName="p"
									className={`${baseClass}__item-text`}
									value={item3}
									onChange={(newItem3) =>
										setAttributes({ item3: newItem3 })
									}
									placeholder="A community that gets you."
								/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
