import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import ImageUploader from '../../utils/ImageUploader.js';
import ToBottomArrow from './ToBottomArrow.js';
import SectionSeparator from './SectionSeparator.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text, button, decorImage } = attributes;

	const baseClass = 'wp-block-domca-home-hero-section';

	const blockProps = useBlockProps({
		className: baseClass,
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<SectionSeparator baseClass={baseClass} />
				<ToBottomArrow baseClass={baseClass} />
				<div className={`${baseClass}__inner  dm-wrap`}>
					<div className={`${baseClass}__main-img`}>
						<ImageUploader
							image={decorImage?.url}
							buttonText={`Select Image`}
							onSelect={(media) => {
								setAttributes({
									decorImage: {
										id: media.id,
										url: media.url,
									},
								});
							}}
						/>
					</div>
					<div className={`${baseClass}__wrap dm-container`}>
						<div className={`${baseClass}__content`}>
							<RichText
								tagName="p"
								className={`${baseClass}__title`}
								value={title}
								onChange={(newTitle) =>
									setAttributes({ title: newTitle })
								}
								placeholder="Input section title..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__text`}
								value={text}
								onChange={(newText) =>
									setAttributes({ text: newText })
								}
								placeholder="Input short description text..."
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
