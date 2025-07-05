import { useBlockProps, RichText } from '@wordpress/block-editor';
import './editor.scss';
import { Fragment } from '@wordpress/element';
import ItemBgSvg from './ItemBgSvg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, faqText, faqButton, aboutText, aboutButton } = attributes;

	const baseClass = 'wp-block-domca-faq-about-section';

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
						<div className={`${baseClass}__item dm-faq`}>
							<ItemBgSvg baseClass={baseClass} />
							<div className={`${baseClass}__item-inner`}>
								<RichText
									tagName="p"
									className={`${baseClass}__item-text`}
									value={faqText}
									onChange={(newFaqText) =>
										setAttributes({ faqText: newFaqText })
									}
									placeholder="Input text..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__item-button dm-button dm-button-primary`}
									value={faqButton}
									onChange={(newFaqButton) =>
										setAttributes({
											faqButton: newFaqButton,
										})
									}
									placeholder="Button text..."
									allowedFormats={['core/link']}
								/>
							</div>
						</div>
						<div className={`${baseClass}__item dm-about`}>
							<ItemBgSvg baseClass={baseClass} />
							<div className={`${baseClass}__item-inner`}>
								<RichText
									tagName="p"
									className={`${baseClass}__item-text`}
									value={aboutText}
									onChange={(newAboutText) =>
										setAttributes({
											aboutText: newAboutText,
										})
									}
									placeholder="Input text..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__item-button dm-button dm-button-primary`}
									value={aboutButton}
									onChange={(newAboutButton) =>
										setAttributes({
											aboutButton: newAboutButton,
										})
									}
									placeholder="Button text..."
									allowedFormats={['core/link']}
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
