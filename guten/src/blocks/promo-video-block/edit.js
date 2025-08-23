import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import VideoUploader from '../../utils/VideoUploader.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, topText, video, text, button } = attributes;

	const baseClass = 'wp-block-domca-promo-video-block';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<RichText
						tagName="p"
						className={`${baseClass}__top-text`}
						value={topText}
						onChange={(newTopText) =>
							setAttributes({ topText: newTopText })
						}
						placeholder="Input text..."
					/>
					<div className={`${baseClass}__video`}>
						<VideoUploader
							image={video?.url}
							buttonText={`Select Video`}
							onSelect={(media) => {
								setAttributes({
									video: {
										id: media.id,
										url: media.url,
									},
								});
							}}
						/>
					</div>

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
						className={`${baseClass}__text`}
						value={text}
						onChange={(newText) => setAttributes({ text: newText })}
						placeholder="Input text..."
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
		</Fragment>
	);
};

export default Edit;
