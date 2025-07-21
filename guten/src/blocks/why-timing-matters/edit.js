import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ImageUploader from '../../utils/ImageUploader.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, introText, timingPoints, text, image } = attributes;

	const baseClass = 'wp-block-domca-why-timing-matters';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
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
						<RichText
							tagName="p"
							className={`${baseClass}__intro-text`}
							value={introText}
							onChange={(newIntroText) =>
								setAttributes({ introText: newIntroText })
							}
							placeholder="Input intro text..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__timing-points`}
							value={timingPoints}
							onChange={(newTimingPoints) =>
								setAttributes({ timingPoints: newTimingPoints })
							}
							placeholder="Input timing points..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__text`}
							value={text}
							onChange={(newText) =>
								setAttributes({ text: newText })
							}
							placeholder="Input text..."
						/>
					</div>

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
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
