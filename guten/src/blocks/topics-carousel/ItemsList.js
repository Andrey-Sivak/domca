import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ItemBgSvg from './ItemBgSvg.js';

const ItemsList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ slides: newItems });
	};

	const updateItemTitle = (index, newText) => {
		const newItems = [...items];
		newItems[index].title = newText;
		setAttributes({ slides: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				title: '',
				text: '',
			},
		];
		setAttributes({ slides: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ slides: newItems });
	};

	return (
		<div className={`${baseClass}__slides`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__slide`}>
					<ItemBgSvg baseClass={baseClass} />
					<RichText
						tagName="p"
						className={`${baseClass}__slide-title`}
						value={item.title}
						onChange={(newTitle) =>
							updateItemTitle(index, newTitle)
						}
						placeholder="Input slide title..."
					/>
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
