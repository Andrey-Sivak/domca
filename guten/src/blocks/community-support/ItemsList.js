import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import PointIcon from './PointIcon.js';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const ItemsList = ({ baseClass, setAttributes, items }) => {
	const updateItem = (index, value) => {
		const newItems = [...items];
		newItems[index] = value;
		setAttributes({ honestPoints: newItems });
	};

	const addItem = () => {
		const newItems = [...items, ''];
		setAttributes({ honestPoints: newItems });
	};

	const removeItem = (index) => {
		const newItems = items.filter((_, i) => i !== index);
		setAttributes({ honestPoints: newItems });
	};

	return (
		<div className={`${baseClass}__items`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__item`}>
					<RemoveButtonCross handleClick={() => removeItem(index)} />
					<PointIcon />
					<RichText
						tagName="p"
						className={`${baseClass}__item-text`}
						value={item}
						onChange={(value) => updateItem(index, value)}
						placeholder="Item text..."
					/>
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
