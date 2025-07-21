import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import SectionSeparator from './SectionSeparator.js';
import DecorBg from './DecorBg.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		leftColumnTitle,
		rightColumnTitle,
		fullProgramTitle,
		fullProgramPrice,
		fullProgramFeatures,
		fullProgramButton,
		ebookTitle,
		ebookPrice,
		ebookFeatures,
		ebookButton,
		mainButton,
	} = attributes;

	const baseClass = 'wp-block-domca-choose-path-pricing';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<SectionSeparator baseClass={baseClass} />
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__column left`}>
						<RichText
							tagName="p"
							className={`${baseClass}__title dm-heading dm-heading-h2`}
							value={leftColumnTitle}
							onChange={(newTitle) =>
								setAttributes({ leftColumnTitle: newTitle })
							}
							placeholder="Input title..."
						/>
						<div className={`${baseClass}__column-content`}>
							<DecorBg baseClass={baseClass} />
							<div className={`${baseClass}__column-inner`}>
								<RichText
									tagName="p"
									className={`${baseClass}__column-title dm-heading dm-heading-h3`}
									value={fullProgramTitle}
									onChange={(newTitle) =>
										setAttributes({
											fullProgramTitle: newTitle,
										})
									}
									placeholder="Input title..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__column-price`}
									value={fullProgramPrice}
									onChange={(newPrice) =>
										setAttributes({
											fullProgramPrice: newPrice,
										})
									}
									placeholder="Input price..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__column-features`}
									value={fullProgramFeatures}
									onChange={(newFeatures) =>
										setAttributes({
											fullProgramFeatures: newFeatures,
										})
									}
									placeholder="Input features..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__column-button dm-button dm-button-white`}
									value={fullProgramButton}
									onChange={(newButton) =>
										setAttributes({
											fullProgramButton: newButton,
										})
									}
									placeholder="Button text..."
									allowedFormats={['core/link']}
								/>
							</div>
						</div>
					</div>

					<div className={`${baseClass}__column right`}>
						<RichText
							tagName="p"
							className={`${baseClass}__title dm-heading dm-heading-h2`}
							value={rightColumnTitle}
							onChange={(newTitle) =>
								setAttributes({ rightColumnTitle: newTitle })
							}
							placeholder="Input title..."
						/>
						<div className={`${baseClass}__column-content`}>
							<DecorBg baseClass={baseClass} />
							<div className={`${baseClass}__column-inner`}>
								<RichText
									tagName="p"
									className={`${baseClass}__column-title dm-heading dm-heading-h3`}
									value={ebookTitle}
									onChange={(newTitle) =>
										setAttributes({ ebookTitle: newTitle })
									}
									placeholder="Input title..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__column-price`}
									value={ebookPrice}
									onChange={(newPrice) =>
										setAttributes({ ebookPrice: newPrice })
									}
									placeholder="Input price..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__column-features`}
									value={ebookFeatures}
									onChange={(newFeatures) =>
										setAttributes({
											ebookFeatures: newFeatures,
										})
									}
									placeholder="Input features..."
								/>
								<RichText
									tagName="p"
									className={`${baseClass}__column-button dm-button dm-button-white`}
									value={ebookButton}
									onChange={(newButton) =>
										setAttributes({
											ebookButton: newButton,
										})
									}
									placeholder="Button text..."
									allowedFormats={['core/link']}
								/>
							</div>
						</div>
					</div>
				</div>

				<RichText
					tagName="p"
					className={`${baseClass}__button dm-button dm-button-primary`}
					value={mainButton}
					onChange={(newButton) =>
						setAttributes({ mainButton: newButton })
					}
					placeholder="Button text..."
					allowedFormats={['core/link']}
				/>
			</div>
		</Fragment>
	);
};

export default Edit;
