import { RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';

const FeatureList = ({ baseClass, features, featuresKey, setAttributes }) => {
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
		<ul className={`${baseClass}__program-features`}>
			{features.map((feature, index) => (
				<li key={index} className={`${baseClass}__program-feature`}>
					<RichText
						tagName="p"
						key={index}
						value={feature}
						onChange={(newValue) => updateFeature(index, newValue)}
						placeholder="Feature..."
					/>
					<RemoveButtonCross
						handleClick={() => removeFeature(index)}
					/>
				</li>
			))}

			<Button
				isPrimary
				onClick={addFeature}
				className="dm-button dm-admin-button"
			>
				{features.length ? 'Add Feature' : 'Add First Feature'}
			</Button>
		</ul>
	);
};

export default FeatureList;
