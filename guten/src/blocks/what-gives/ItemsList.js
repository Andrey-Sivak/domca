import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ImageUploader from '../../utils/ImageUploader.js';

const ItemsList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ items: newItems });
	};

	const updateItemTitle = (index, newText) => {
		const newItems = [...items];
		newItems[index].title = newText;
		setAttributes({ items: newItems });
	};

	const updateItemIcon = (index, media) => {
		const newItems = [...items];
		newItems[index].image = {
			id: media.id,
			url: media.url,
		};
		setAttributes({ items: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				image: {
					id: null,
					url: '',
				},
				text: '',
				title: '',
			},
		];
		setAttributes({ items: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ items: newItems });
	};

	return (
		<div className={`${baseClass}__slides`}>
			{items.map((item, index) => (
				<div
					key={index}
					className={`${baseClass}__slide ${item.image?.url ? '' : 'not-selected'}`}
				>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={(media) => updateItemIcon(index, media)}
							allowedTypes={['image']}
							value={item.image?.url}
							render={({ open }) => (
								<div
									className={`${baseClass}__slide-image-edit`}
									onClick={open}
									title={
										item.image?.url
											? 'Change image'
											: 'Select image'
									}
								>
									<svg viewBox="0 0 122.88 82.47">
										<path d="M60.58,52.91,74.86,28.22l9.71,24.56-4.76,5.86c-1,.7-2.94,3.85-4.7,8H19.22V61.83l6-.29L31.12,47l3,10.41H43l7.74-19.93,9.82,15.47ZM10.82,0h83.7a10.86,10.86,0,0,1,10.82,10.82V27.48L99.78,34l-1.21,1.49V11.78a4.08,4.08,0,0,0-4-4H11.78a4.08,4.08,0,0,0-4,4V70.39a4.08,4.08,0,0,0,4,4H72.13a46.38,46.38,0,0,0-1,7.23l-.07.51H10.82A10.86,10.86,0,0,1,0,71.35V10.82A10.86,10.86,0,0,1,10.82,0ZM97.53,78.86,82.29,82.47,84,66.07,97.53,78.86ZM88.68,61l20-22.16a1.44,1.44,0,0,1,1-.5,1.39,1.39,0,0,1,.72.17l12.07,11a1.26,1.26,0,0,1,.39.87,1.23,1.23,0,0,1-.42,1L102.2,73.77,88.66,61ZM30.53,22.27a7.14,7.14,0,1,1-7.14,7.14,7.14,7.14,0,0,1,7.14-7.14Z" />
									</svg>
								</div>
							)}
						/>
					</MediaUploadCheck>

					<div className={`${baseClass}__slide-image`}>
						<ImageUploader
							image={item.image?.url}
							onSelect={(media) => updateItemIcon(index, media)}
							buttonText={`Image for slide ${index + 1}`}
						/>
					</div>

					<RichText
						tagName="p"
						className={`${baseClass}__slide-title`}
						value={item.title}
						onChange={(newText) => updateItemTitle(index, newText)}
						placeholder="Input slide title..."
					/>

					<RichText
						tagName="p"
						className={`${baseClass}__slide-text`}
						value={item.text}
						onChange={(newText) => updateItemText(index, newText)}
						placeholder="Input slide text..."
					/>

					<RemoveButtonCross
						handleClick={() => removeItem(index)}
						color="red"
					/>
				</div>
			))}

			<Button
				isPrimary
				onClick={addItem}
				className="dm-button dm-admin-button"
			>
				{items.length ? 'Add Slide' : 'Add Slide Item'}
			</Button>
		</div>
	);
};

export default ItemsList;
