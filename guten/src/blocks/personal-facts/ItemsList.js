import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ItemBgSvg from './ItemBgSvg.js';

const ItemsList = ({ baseClass, features, featuresKey, setAttributes }) => {
	const updateFeature = (index, newValue) => {
		const newFeatures = [...features];
		newFeatures[index] = newValue;
		setAttributes({ [featuresKey]: newFeatures });
	};

	const addFeature = () => {
		const newFeatures = [...features, ''];
		setAttributes({ [featuresKey]: newFeatures });
	};

	const removeFeature = (index) => {
		const newFeatures = features.filter((_, i) => i !== index);
		setAttributes({ [featuresKey]: newFeatures });
	};

	return (
		<div className={`${baseClass}__items`}>
			{features.map((feature, index) => (
				<div key={index} className={`${baseClass}__item`}>
					<ItemBgSvg baseClass={baseClass} />
					<RichText
						className={`${baseClass}__item-text`}
						tagName="p"
						key={index}
						value={feature}
						onChange={(newValue) => updateFeature(index, newValue)}
						placeholder="Item text..."
					/>
					<RemoveButtonCross
						handleClick={() => removeFeature(index)}
					/>
				</div>
			))}

			<Button
				isPrimary
				onClick={addFeature}
				className="dm-button dm-admin-button"
			>
				{features.length ? 'Add Item' : 'Add First Item'}
			</Button>
		</div>
	);
};

export default ItemsList;
