import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

const VideoUploader = ({
	image,
	onSelect,
	buttonText = 'Add Video',
	allowedTypes = ['video', 'video/mp4', 'video/webm', 'video/ogg'],
}) => {
	const buttonClass = image
		? 'image-button'
		: 'button-secondary dm-button dm-admin-button';

	const Video = ({ src }) => (
		<video
			src={src}
			controls
			playsInline
			preload="metadata"
			style={{ display: 'block', width: '100%', maxWidth: '100%' }}
		/>
	);

	return (
		<MediaUploadCheck>
			<MediaUpload
				onSelect={onSelect}
				allowedTypes={allowedTypes}
				value={image}
				render={({ open }) => (
					<Button
						className={buttonClass}
						onClick={open}
						aria-label={buttonText}
					>
						{image ? <Video src={image} /> : buttonText}
					</Button>
				)}
			/>
		</MediaUploadCheck>
	);
};

export default VideoUploader;
