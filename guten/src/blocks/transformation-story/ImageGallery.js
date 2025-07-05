import { Button } from '@wordpress/components';
import ImageUploader from '../../utils/ImageUploader.js';
// import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const ImageGallery = ({ setAttributes, items, baseClass }) => {
	const updateItem = (index, newImage) => {
		const newItems = [...items];
		newItems[index].image = newImage;
		setAttributes({ images: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				image: '',
			},
		];
		setAttributes({ images: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ images: newItems });
	};

	return (
		<div className={`${baseClass}__gallery`}>
			{items.map((item, index) => (
				<div key={item.url} className={`${baseClass}__gallery-item`}>
					<ImageUploader
						image={item.image?.url}
						onSelect={(media) =>
							updateItem(index, {
								id: media.id,
								url: media.url,
							})
						}
					/>

					{/*<RemoveButtonCross*/}
					{/*	color="red"*/}
					{/*	handleClick={() => removeItem(index)}*/}
					{/*/>*/}
				</div>
			))}
			{items.length < 6 && (
				<Button
					isPrimary
					onClick={addItem}
					className="dm-button dm-admin-button"
				>
					{items.length ? 'Add Item' : 'Add First Item'}
				</Button>
			)}
		</div>
	);
};

export default ImageGallery;
