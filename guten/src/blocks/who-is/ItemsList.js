import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ItemBgSvg from './ItemBgSvg.js';
import ImageUploader from '../../utils/ImageUploader.js';

const ItemsList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ items: newItems });
	};

	const updateItemIcon = (index, media) => {
		const newItems = [...items];
		newItems[index].icon = {
			id: media.id,
			url: media.url,
		};
		setAttributes({ items: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				icon: {
					id: null,
					url: '',
				},
				text: '',
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
				<div key={index} className={`${baseClass}__slide`}>
					<ItemBgSvg baseClass={baseClass} />

					<div className={`${baseClass}__slide-image`}>
						<ImageUploader
							image={item.icon?.url}
							onSelect={(media) => updateItemIcon(index, media)}
							buttonText={`Icon for slide ${index + 1}`}
						/>
					</div>

					<RichText
						tagName="p"
						className={`${baseClass}__slide-text`}
						value={item.text}
						onChange={(newText) => updateItemText(index, newText)}
						placeholder="Input slide text..."
					/>

					<RemoveButtonCross handleClick={() => removeItem(index)} />
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
