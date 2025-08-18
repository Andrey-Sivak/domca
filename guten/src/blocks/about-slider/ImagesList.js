import { Button } from '@wordpress/components';
import ImageUploader from '../../utils/ImageUploader.js';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const ImagesList = ({ baseClass, setAttributes, images }) => {
	const updateImage = (index, newImage) => {
		const newImages = [...images];
		newImages[index].image = newImage;
		setAttributes({ images: newImages });
	};

	const addImage = () => {
		const newImages = [
			...images,
			{
				image: {
					id: null,
					url: '',
				},
			},
		];
		setAttributes({ images: newImages });
	};

	const removeImage = (index) => {
		const newImages = [...images];
		newImages.splice(index, 1);
		setAttributes({ images: newImages });
	};
	return (
		<div className={`${baseClass}__images`}>
			{images.map((image, index) => (
				<div className={`${baseClass}__image`}>
					<ImageUploader
						image={image.image?.url}
						onSelect={(media) =>
							updateImage(index, {
								id: media.id,
								url: media.url,
							})
						}
					/>

					<RemoveButtonCross
						color="red"
						handleClick={() => removeImage(index)}
					/>
				</div>
			))}
			<Button
				isPrimary
				onClick={addImage}
				className="dm-button dm-admin-button"
			>
				{images.length ? 'Add Image' : 'Add First Image'}
			</Button>
		</div>
	);
};

export default ImagesList;
