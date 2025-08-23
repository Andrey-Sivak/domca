import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

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

	return (
		<div className={`${baseClass}__items-wrap`}>
			<div className={`${baseClass}__items`}>
				{items.map((item, index) => (
					<div key={index} className={`${baseClass}__item`}>
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
				))}

				{items.length < 4 && (
					<Button
						isPrimary
						onClick={addItem}
						className="dm-button dm-admin-button"
					>
						{items.length ? 'Add Items' : 'Add First Item'}
					</Button>
				)}
			</div>
		</div>
	);
};

export default ItemsList;
