import { useBlockProps, RichText } from '@wordpress/block-editor';
import './editor.scss';
import { Fragment } from '@wordpress/element';
import ImageUploader from '../../utils/ImageUploader.js';
import LinkEditor from '../../utils/LinkEditor.js';
import FeatureList from './FeatureList.js';
import ImageClipPath from './ImageClipPath.js';
import ImageBorderSvg from './ImageBorderSvg.js';
import SeparatorSvg from './SeparatorSvg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, image, button, subHeading, features } = attributes;

	const baseClass = 'wp-block-domca-home-cta-features';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__image`}>
						<ImageClipPath baseClass={baseClass} />
						<ImageBorderSvg baseClass={baseClass} />

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

					<div className={`${baseClass}__content`}>
						<RichText
							tagName="p"
							className={`${baseClass}__title dm-heading dm-heading-h2`}
							value={title}
							onChange={(newTitle) =>
								setAttributes({ title: newTitle })
							}
							placeholder="Input section title..."
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
								className={`${baseClass}__button dm-button dm-button-secondary`}
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

						<SeparatorSvg baseClass={baseClass} />

						<RichText
							tagName="p"
							className={`${baseClass}__sub-heading`}
							value={subHeading}
							onChange={(newSubHeading) =>
								setAttributes({ subHeading: newSubHeading })
							}
							placeholder="Input sub heading..."
						/>

						<FeatureList
							setAttributes={setAttributes}
							items={features}
							baseClass={baseClass}
						/>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
