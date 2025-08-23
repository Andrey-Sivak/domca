import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ItemBgSvg from './ItemBgSvg.js';

const ReasonsList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ reasons: newItems });
	};

	const updateItemTitle = (index, newText) => {
		const newItems = [...items];
		newItems[index].title = newText;
		setAttributes({ reasons: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				title: '',
				text: '',
			},
		];
		setAttributes({ reasons: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ reasons: newItems });
	};

	return (
		<div className={`${baseClass}__reasons`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__reason`}>
					<ItemBgSvg baseClass={baseClass} />
					<RichText
						tagName="p"
						className={`${baseClass}__reason-title`}
						value={item.title}
						onChange={(newTitle) =>
							updateItemTitle(index, newTitle)
						}
						placeholder="Input reason title..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__reason-text-text`}
						value={item.text}
						onChange={(newText) => updateItemText(index, newText)}
						placeholder="Input reason text..."
					/>

					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			<Button
				isPrimary
				onClick={addItem}
				className="dm-button dm-admin-button"
			>
				{items.length ? 'Add reason' : 'Add reason Item'}
			</Button>
		</div>
	);
};

export default ReasonsList;
