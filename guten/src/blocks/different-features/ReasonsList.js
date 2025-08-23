import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ItemBgSvg from './ItemBgSvg.js';

const ReasonsList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ features: newItems });
	};

	const addItem = () => {
		const newItems = [...items, { text: '' }];
		setAttributes({ features: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ features: newItems });
	};

	return (
		<div className={`${baseClass}__reasons`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__reason`}>
					<ItemBgSvg baseClass={baseClass} />
					<RichText
						tagName="p"
						className={`${baseClass}__reason-text`}
						value={item.text}
						onChange={(newText) => updateItemText(index, newText)}
						placeholder="Input feature text..."
					/>

					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			<Button
				isPrimary
				onClick={addItem}
				className="dm-button dm-admin-button"
			>
				{items.length ? 'Add feature' : 'Add feature Item'}
			</Button>
		</div>
	);
};

export default ReasonsList;
