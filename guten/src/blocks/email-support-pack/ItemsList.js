import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ItemBgSvg from './ItemBgSvg.js';

const ItemsList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ items: newItems });
	};

	const addItem = () => {
		const newItems = [...items, { text: '' }];
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
					<ItemBgSvg baseClass={baseClass} />
					<div key={index} className={`${baseClass}__item-text-wrap`}>
						<RichText
							tagName="p"
							className={`${baseClass}__item-text`}
							value={item.text}
							onChange={(newText) =>
								updateItemText(index, newText)
							}
							placeholder="Input item text..."
						/>
					</div>
					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			{items.length < 4 && (
				<Button
					isPrimary
					onClick={addItem}
					className="dm-button dm-admin-button"
				>
					{items.length ? 'Add Item' : 'Add Item Item'}
				</Button>
			)}
		</div>
	);
};

export default ItemsList;
