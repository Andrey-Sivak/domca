import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const ItemsList = ({ baseClass, items, setAttributes }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ bulletPoints: newItems });
	};

	const addItem = () => {
		const newItems = [...items, { text: '' }];
		setAttributes({ bulletPoints: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ bulletPoints: newItems });
	};

	return (
		<div className={`${baseClass}__bullet-points_items`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__bullet-points_item`}>
					<RichText
						tagName="p"
						className={`${baseClass}__bullet-points_item-text`}
						value={item.text}
						onChange={(newText) => updateItemText(index, newText)}
						placeholder="Input text..."
					/>

					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			<Button
				isPrimary
				onClick={addItem}
				className="dm-button dm-admin-button"
			>
				{items.length ? 'Add Item' : 'Add First Item'}
			</Button>
		</div>
	);
};

export default ItemsList;
