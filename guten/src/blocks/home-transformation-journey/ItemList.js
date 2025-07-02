import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import ImageUploader from '../../utils/ImageUploader.js';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const ItemList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ items: newItems });
	};
	const updateItemTitle = (index, newTitle) => {
		const newItems = [...items];
		newItems[index].title = newTitle;
		setAttributes({ items: newItems });
	};

	const updateItemImage = (index, media) => {
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
				title: '',
				text: '',
				image: { id: null, url: '' },
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
		<div className={`${baseClass}__items`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__item`}>
					<div className={`${baseClass}__item-image`}>
						<ImageUploader
							image={item.image?.url}
							onSelect={(media) => updateItemImage(index, media)}
							buttonText={`Image for item ${index + 1}`}
						/>
					</div>
					<RichText
						tagName="p"
						className={`${baseClass}__item-title dm-heading dm-heading-h4`}
						value={item.title}
						onChange={(newTitle) =>
							updateItemTitle(index, newTitle)
						}
						placeholder="Input item title..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__item-text`}
						value={item.text}
						onChange={(newText) => updateItemText(index, newText)}
						placeholder="Input item text..."
					/>

					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			{items.length < 4 && (
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

export default ItemList;
