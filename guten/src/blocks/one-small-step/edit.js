import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ImageUploader from '../../utils/ImageUploader.js';
import SectionSeparator from '../hero-section/SectionSeparator.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { text, button, image } = attributes;

	const baseClass = 'wp-block-domca-one-small-step';

	const blockProps = useBlockProps({
		className: baseClass,
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<SectionSeparator baseClass={baseClass} />
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__image`}>
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
							className={`${baseClass}__text`}
							value={text}
							onChange={(newText) =>
								setAttributes({ text: newText })
							}
							placeholder="Input text..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__button dm-button dm-button-white`}
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
		</Fragment>
	);
};

export default Edit;
