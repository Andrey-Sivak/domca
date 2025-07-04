import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const FeatureList = ({ setAttributes, items, baseClass }) => {
	const updateItemText = (index, newText) => {
		const newItems = [...items];
		newItems[index].text = newText;
		setAttributes({ features: newItems });
	};

	const addItem = () => {
		const newItems = [
			...items,
			{
				text: '',
			},
		];
		setAttributes({ features: newItems });
	};

	const removeItem = (index) => {
		const newItems = [...items];
		newItems.splice(index, 1);
		setAttributes({ features: newItems });
	};

	return (
		<div className={`${baseClass}__features`}>
			{items.map((item, index) => (
				<div key={index} className={`${baseClass}__feature`}>
					<svg
						viewBox="0 0 224 195"
						fill="none"
						className={`${baseClass}__feature-decor`}
						preserveAspectRatio="none"
					>
						<path d="M24.126 160.774L124.305 190.612C143.153 200.741 166.53 192.127 174.583 172.084L221.261 55.9065C230.124 33.8463 216.125 9.25647 192.854 6.00895L48.0838 0.337717C31.234 -0.322399 16.6099 12.0495 14.2384 28.9708L0.894422 124.184C-1.39833 140.543 8.48989 156.117 24.126 160.774Z" />
					</svg>
					<RichText
						tagName="p"
						className={`${baseClass}__feature-text`}
						value={item.text}
						onChange={(newText) => updateItemText(index, newText)}
						placeholder="Input item text..."
					/>

					<RemoveButtonCross handleClick={() => removeItem(index)} />
				</div>
			))}

			{items.length < 3 && (
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

export default FeatureList;
