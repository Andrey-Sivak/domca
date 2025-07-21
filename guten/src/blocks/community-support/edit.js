import { useBlockProps, RichText } from '@wordpress/block-editor';
import './editor.scss';
import { Fragment } from '@wordpress/element';
import ImageUploader from '../../utils/ImageUploader.js';
import ItemsList from './ItemsList.js';
import SectionSeparator from '../hero-section/SectionSeparator.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		title,
		subtitle,
		introText,
		motivationText,
		honestTitle,
		honestPoints,
		closingText,
		button,
		image,
	} = attributes;

	const baseClass = 'wp-block-domca-community-support';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<SectionSeparator baseClass={baseClass} />
				<div className={`${baseClass}__wrap`}>
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

					<div className={`${baseClass}__content`}>
						<div className={`${baseClass}__content_img`}>
							<ImageUploader
								image={image?.url}
								buttonText={`Select Image`}
								onSelect={(media) => {
									setAttributes({
										image: {
											id: media.id,
											url: media.url,
										},
									});
								}}
							/>
						</div>
						<div className={`${baseClass}__content_text`}>
							<RichText
								tagName="p"
								className={`${baseClass}__intro-text`}
								value={introText}
								onChange={(newIntroText) =>
									setAttributes({ introText: newIntroText })
								}
								placeholder="Intro Text..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__motivation-text`}
								value={motivationText}
								onChange={(newMotivationText) =>
									setAttributes({
										motivationText: newMotivationText,
									})
								}
								placeholder="Motivation Text..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__honest-title`}
								value={honestTitle}
								onChange={(newHonestTitle) =>
									setAttributes({
										honestTitle: newHonestTitle,
									})
								}
								placeholder="List Title..."
							/>
							<ItemsList
								items={honestPoints}
								baseClass={baseClass}
								setAttributes={setAttributes}
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__closing-text`}
								value={closingText}
								onChange={(newClosingText) =>
									setAttributes({
										closingText: newClosingText,
									})
								}
								placeholder="Closing Text..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__button dm-button dm-button-primary`}
								value={button}
								onChange={(newButton) =>
									setAttributes({
										button: newButton,
									})
								}
								placeholder="Button text..."
								allowedFormats={['core/link']}
							/>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
